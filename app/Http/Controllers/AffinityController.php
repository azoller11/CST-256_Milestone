<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\affinityServices;


class AffinityController extends Controller
{
    //
    
    
    function attemptSubmit(Request $request)
    {
       
        
        $race = $request->input('race');
        $religion = $request->input('religion');
        $gender = $request->input('gender');
        $age = $request->input('age');
        
        
        $affinityServices = new affinityServices();
        
        
        $affinityServices->addAffinity(2, $race, $religion, $gender, $age);
        
        
        
        return view("myAffinity");
        
    }
    
}
