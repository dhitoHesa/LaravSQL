<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Dashboard extends Controller
{
    //
    function list(){
        $item = Http::get('http://localhost:5500/component')->JSON();
        $value = $item['values'];

        return view('dashboard', ['value' => $value]);
        }   
}