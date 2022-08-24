<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class chartController extends Controller
{
    public function index() {
         return view('index');
    }

    public function input() {
        return view('chartinputform');
    }

    public function success() {
        return view('success');
    }

    public function save(Request $request) {
        $birthdate = $request->birthdate;
        $birthtime = $request->birthtime;
        $birthplace = $request->birthplace;
        $gender = $request->gender;
        $lat = '17.5';
        $lon= '14.5';

       $data = DB::table('charts')->insert([
            'birthdate' => $birthdate,
            'birthtime' => $birthtime,
            'birthplace' => $birthplace,
            'gender' => $gender,
            'lat' => $lat,
            'lon' => $lon
        ]);
        
        return redirect()->route('chart')->with('status','Chart data saved successfully!!');
    }//End method

}
