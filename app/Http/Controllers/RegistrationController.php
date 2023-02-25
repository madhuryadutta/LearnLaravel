<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view ('form');
        
    }
    public function formusingcomponents(){
        return view ('formusingcomponents');
    }

    // For Future use
    // public function regsiter(){

    // }

    public function register(Request $request){
        $request->validate(
            [
                'u_name' => 'required',
                'u_email' => 'required|email',
                'u_password' => 'required',
                'confirm_password' => 'required|same:u_password'
            ]
        );
        echo '<pre>';
        print_r($request->all());
    }
}
