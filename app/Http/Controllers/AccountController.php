<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    
    
    function attemptPost(Request $request) {
        $userServices = new userServices();
        
        $info = $request->input('information');
        
        $userServices->addInformation($_SESSION['userID'], $info);
        return view("myAccount");
    }
    
    function deletePost(Request $request) {
        $userServices = new userServices();
        
        $id = $request->input('ID');
        $userServices->deleteInformation($id);
        return view("myAccount");
    }
    
}
