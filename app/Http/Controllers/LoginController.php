<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require 'userServices.php';

class LoginController extends Controller
{
    //
    
    
    function attemptLogin(Request $request)
    {
        $userServices = new \userServices();

        $username = $request->input('username');
        $password = $request->input('password');
        
        if ($userServices->loginUser($username, $password)) {
            return View("Home");
        } else {
            return View("login_form");
        }
        
    }
    function attemptRegister(Request $request)
    {
        $userServices = new \userServices();

        $username = $request->input('username');
        $password = $request->input('password');
        
        if ($userServices->registerUser($username, $password)) {
            return View("login_form");
        } else {
            return View("register_form");
        }
        
    }
    
}
