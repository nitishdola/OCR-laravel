<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Ocr;
use Validator,Redirect,DB;
use TesseractOCR;
class OcrsController extends Controller
{

	public function index() {
		$result = Ocr::where('status', 1)->with('directory')->get();
		
		return view('ocrs.index', compact('result'));
	}


	public function details($id) {
		$result = Ocr::where('id', $id)->first();
		return view('ocrs.details', compact('result'));
	}

    public function store(Request $request) {
    	$rules = [
    		'directory_id' 	=> 'required|exists:directories,id',
    		'visiting_card' => 'required|mimes:jpeg,png|max:2048',
    	];

    	$validator = Validator::make($data = $request->all(), $rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

    	$message = '';
       
		if ($request->hasFile('visiting_card')) {
		    if ($request->file('visiting_card')->isValid()){
		        $path = 'uploads/visiting_cards/'.date('Y-m-d');
		        $destination_path = storage_path( $path );
		        $fileName = time().'_vc.'.$request->file('visiting_card')->getClientOriginalExtension();
		        $request->file('visiting_card')->move($destination_path, $fileName);
		        $vc_path = $path.'/'.$fileName;

		        //OCR reading
		        $tesseract = new TesseractOCR($destination_path.'/'.$fileName); 
				$text = $tesseract->recognize();
				
				//dd($text);
				// Use a simple regular expression to try and find candidate phone numbers
				$phone_number = $fax = $email = '';
				$name = $designation = $address = '';


				foreach(preg_split("/((\r?\n)|(\r\n?))/", $text) as $k => $line) {
					if (preg_match('/[0-9]+[-]/', $line))
					{
					  if($phone_number == '') {
					    preg_match_all('!\d+!', $line, $phone);
					    
					    if(strlen($phone[0][0]) >= 1) {
					      if(isset($phone[0][1])) {
					        $phone_number = '';
					        for($i = 0; $i < count($phone[0]); $i++ ) {
					          $phone_number .= $phone[0][$i];
					        }
					      }
					    }else if( strlen($phone[0][0]) >= 10 )  {
					      $phone_number = $phone[0][0];
					    }  
					  }
					} else if (preg_match('/@/',$line)){ 
					  $email = $line;
					}else if($name == '' && $line != '') {
					  $name = $line;
					}else if($designation == '' && $line != '' && $line != $name) {
					  $designation = $line;
					}else{
					  $address .= ' '.$line;
					}
		   		}
		   		$directory_id = $request->directory_id;
				return view('ocrs.step_1', compact('phone_number','fax','designation','email','name','address', 'vc_path', 'directory_id'));
			}
		}

    }

    public function step_1(Request $request) {
    	$rules = [
    		'directory_id' 	=> 'required|exists:directories,id',
    		'name' 			=> 'required',
    	];

    	$validator = Validator::make($data = $request->all(), $rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

        $message = '';

        if($ocr = Ocr::create($data)) {
            $message .= 'Image saved successfully !';
        }else{
           $message .= 'Unable to add Directory !';
        }
        return Redirect::route('ocr.details', $ocr->id)->with('message', $message);
    }

    public function edit($id) {
		$ocr = Ocr::findOrFail($id);
		$phone_number = $fax = $email = null;
		$name = $designation = $address = null;

		return view('ocrs.edit', compact('ocr','phone_number','fax','designation','email','name','address'));
	}

	public function update(Request $request, $id) {
		$ocr = Ocr::findOrFail($id);
		$phone_number = $fax = $email = null;
		$name = $designation = $address = null;

		$ocr->phone = $request->phone;
		$ocr->fax = $request->fax;
		$ocr->email = $request->email;
		$ocr->name = $request->name;
		$ocr->designation = $request->designation;
		$ocr->address = $request->address;

		$ocr->save();

		$message = 'Updated !';
		return Redirect::route('ocr.details', $id)->with('message', $message);
	}
}
