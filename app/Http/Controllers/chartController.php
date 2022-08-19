<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chartController extends Controller
{
    public function index(){
         return view('index');
    }

    public function chartinput(){
        return view('chartinputform');
    } 
}
