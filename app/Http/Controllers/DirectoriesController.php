<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Directory, App\Ocr;
use Validator,Redirect,DB;

class DirectoriesController extends Controller
{
    public function create() {
    	return view('directories.create');
    }

    public function store(Request $request) {
    	$rules = [
    		'name' => 'required|min:2|max:155',
    	];
    	$validator = Validator::make($data = $request->all(), $rules);
        if ($validator->fails()) return Redirect::back()->withErrors($validator)->withInput();

    	$message = '';

        if($order = Directory::create($data)) {
            $message .= 'Directory created added successfully !';
        }else{
           $message .= 'Unable to add Directory !';
        }

        return Redirect::route('directory.index')->with('message', $message);
    }

    public function index() {
       $results = Directory::whereStatus(1)->paginate(20); 
       return view('directories.index', compact('results'));
    }

    public function disable($id) {
        $directory = Directory::findOrFail($id);
        $directory->status = 0;
        $directory->save();
        $message = 'Removed successfully';
        return Redirect::route('directory.index')->with('message', $message);
    }


    public function view_files( $directory_id) {
        $dir_info = Directory::findOrFail($directory_id);
        $result = Ocr::where('directory_id', $directory_id)->where('status',1)->paginate(20);
        return view('directories.view_files', compact('result', 'dir_info'));
    }

    public function edit( $id ) {
        $directory = Directory::findOrFail($id);
        return view('directories.edit', compact('directory'));
    }

    public function update( Request $request, $id ) {
        $directory = Directory::findOrFail($id);
        $directory->name = $request->name;
        $directory->save();
        $message = 'Directory edited!';

        return Redirect::route('directory.index')->with('message', $message);
    }
}
