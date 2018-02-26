<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Mews\Captcha\Facades\Captcha;

class LoginController extends Controller
{
    /*
     * 登陆页面
     */
    public function login()
    {

        return view('login');
    }

    /**登陆检测
     * @param Request $request
     * @return string
     */
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
/*
 * 注册页面
 */
    public function register()
    {
        return view('register');
    }


    public  function username_check(Request $request){
     if($user = User::where('username',$request->username)->first()){
         return $this->error();
     }else{
         return $this->success();
     }

    }

    /**注册检测
     * @param Request $request
     */
    public  function  register_check(Request $request){

        $validator = Validator::make($request->all(), [
            'username' => 'required|email',
            'password' => 'required',
            'code' => 'required',
        ]);
        if ($validator->fails()) {

            return '<script>alert("错误,请重试");window.history.go(-1);</script></script>';
        }
        if(!$user = User::where('username',$request->username)->first()){
            if($request->code !== Cache::get('validate_code')){
                return '<script>alert("邮箱验证码错误");window.history.go(-1);</script>';
            }else {
                User::create(['username'=>$request->username,'password'=>$request->password]);
                return '<script>alert("成功");window.history.go(-1);</script>';
            }
        }else{
            return '<script>alert("用户已经存在");window.history.go(-1);</script>';
        }

    }





}
