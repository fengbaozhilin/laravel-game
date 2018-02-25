<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Mews\Captcha\Facades\Captcha;

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
                'username' => 'required|email',
                'password' => 'required|alpha_dash',
            ]);
            if ($validator->fails()) {
                return '<script>alert("登陆失败,账号或密码错误");window.history.go(-1);</script></script>';
            }
        return '<script>alert("success");window.history.go(-1);</script>';

    }

    public function register()
    {
        return view('register');
    }

    public  function  register_check(Request $request){
      if($request->code == Cache::get('validate_code')){
          var_dump(666);
      }else {
          var_dump('233');
        }

    }



}
