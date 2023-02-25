<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view ('form');
        
    }

    // For Future use
    // public function regsiter(){

    // }

    public function register(Request $request){
        echo '<pre>';
        print_r($request->all());
    }
}
