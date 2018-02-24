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
            ],[
                'username.min'=>'用户名不能小于两位',
                'password.min'=>'密码不能小于两位',
                ]);
            if ($validator->fails()) {
$a=1;
              dd($validator->messages());
                return '<script>alert('.$validator->messages().');window.history.go(-1);</script>';
            }
        return '<script>alert("success");window.history.go(-1);</script>';

    }

    public function register()
    {

        return view('register');
    }
}
