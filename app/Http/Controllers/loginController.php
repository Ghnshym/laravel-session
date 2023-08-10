<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(Request $request){

        $data = $request->input('username');

        $request->session()->put("username", $data);
        
        return redirect("home");

    }

    public function home(){
        return view('home');
    }

    public function logout(){
        if(session()->has('username')){
            session()->pull('username', 'null');
        }
        return view('welcome');
    }
}
