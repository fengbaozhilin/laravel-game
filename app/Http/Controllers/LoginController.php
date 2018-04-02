<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;


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
        $validator = Validator::make($request->all(), [
            'username' => 'required|email',
            'password' => 'required',
            'code' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->error('150');
        }

         if($user = User::where('username',$request->username)->first()){
         return $this->error();
        }

        if($request->code == Cache::get($request->username) && $request->username == Cache::get('username')){
            User::create(['username'=>$request->username,'password'=>$request->password]);
            return $this->success();
        }else {
            return $this->error('120');
        }


    }



public  function test(){
    date_default_timezone_set("PRC");
    $time = strtotime("2018-02-27 10:19:00");
  return time()- $time;
}

// 1519697885
// 1519697880

}
