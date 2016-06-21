<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Directory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directories = [''=>'Select Directory'] + Directory::whereStatus(1)->orderBy('name')->lists('name', 'id')->toArray();
        return view('home', compact('directories'));
    }
}
