<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){

        return view('login');
    }

    public function login_check(Request $request){
      return  $this->validate($request, [
            'username' => 'require',
            'password' => 'require',
        ]);


    }

    public function register(){

        return view('register');
    }
}
