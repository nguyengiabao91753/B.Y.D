<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About_UsController extends Controller
{
    public function about(){
        return view('client.about');
    }
}
