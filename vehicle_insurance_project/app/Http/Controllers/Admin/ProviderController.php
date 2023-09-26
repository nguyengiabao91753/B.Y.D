<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    //
    public function index()
    {
        //
        {
            //
            $providers=Provider::all();
            return view('admin.category.provider.index',compact('providers'));
        }
    }
}
