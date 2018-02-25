<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    public function login()
    {

        return view('login');
    }

    public function login_check(Request $request)
    {


            $validator = Validator::make($request->all(), [
                'username' => 'min:2|required',
                'password' => 'min:2|required',
            ]);
            if ($validator->fails()) {
                return '<script>alert("error");window.history.go(-1);</script></script>';
            }
        return '<script>alert("success");window.history.go(-1);</script>';


    }

    public function register()
    {

        return view('register');
    }
}
