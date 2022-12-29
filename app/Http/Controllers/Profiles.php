<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    //
    function list(){
        $data = Http::get('http://localhost:5500/data')-> JSON();
        $val = $data['values'];

        return view('profiles', ['val' => $val]);
    }

}
