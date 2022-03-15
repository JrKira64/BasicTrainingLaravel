<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class table extends Controller
{
    public function tab(){

        //Un tableau de valeur

        $i = 0;
        $result = 0;
        $hello = "Hi";

        return view('index', compact('result','i','hello'));
    }

    

}
