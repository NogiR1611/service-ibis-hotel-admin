<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function get_data()
    {
        return view('index');
    }

    public function syarat_ketentuan(){
        return view('syarat');
    }

    public function kebijakan_privasi(){
        return view('privasi');
    }
}
