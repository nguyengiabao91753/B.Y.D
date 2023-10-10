<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    //
    public function index()
    {
    	// $data = ['name' => 'tienduong'];	
    	// $pdf = PDF::loadView('pdf',  compact('data'));
    		return view('pdf');
    }

}
