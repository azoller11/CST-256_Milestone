<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\userServices;
use App\Http\Controllers\userRoleServices;


class LoginController extends Controller
{
    //
    
    
    function attemptLogin(Request $request)
    {
        $userServices = new userServices();

        $username = $request->input('username');
        $password = $request->input('password');
        
        if ($userServices->loginUser($username, $password)) {
            $role = new userRoleServices();
            if(!$role->checkRoleExhists($_SESSION['userID']))
                $role->addUserToRoles($_SESSION['userID']);
            return View("Home");
        } else {
            return View("login_form");
        }
        
    }
    function attemptRegister(Request $request)
    {
        $userServices = new userServices();

        $username = $request->input('username');
        $password = $request->input('password');
        
        if ($userServices->registerUser($username, $password)) {
            return View("login_form");
        } else {
            return View("register_form");
        }
        
    }
    
}
