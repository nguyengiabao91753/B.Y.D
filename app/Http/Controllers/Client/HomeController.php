<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function showImage($id){
        $provider = Provider::select('image')->where('id',$id)->first();

        return view('client.page.home',[
            'provider' => $provider
        ]);
    }
}
