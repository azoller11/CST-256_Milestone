<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function Home(){
        return view('Home');
    }
    
    public function test(){
        return "Hello World From Test Controller!";
    }
}
