<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class traitement extends Controller
{
    public function index(){
        return view('index');
    }

    public function pop(){
        return view('pop');
    }

    public function contact(){
        return view('contact');
    }
}
