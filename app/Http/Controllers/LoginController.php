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
        ]);
        if (!$validator->fails()) {

            $user = User::where('username', $request->username);

            $user_info = $user->first();

            if ($user_info && $user_info->password == $request->password) {

                $this->msg_status(); //登陆状态

                $avatar = $user_info->avatar;

                session(['login_info' => 'success', 'user_id'=>$user_info->id]);

                setcookie('user_id',$user_info->id,time()+24 * 60 *60);

                return redirect('/');
            } else {

                return '<script>alert("账号或密码错误");window.history.go(-1);</script>';
            }

        } else {

            return '<script>alert("格式不正确");window.history.go(-1);</script>';
        }

    }


    /*
     * 注册页面
     */
    public function register()
    {
        return view('register');
    }


    /**注册检验
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function username_check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|email',
            'password' => 'required',
            'code' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->error('150');
        }

        if ($user = User::where('username', $request->username)->first()) {
            return $this->error();      //如果用户名重复返回error
        }

        if ($request->code == Cache::get($request->username) && $request->username == Cache::get('username')) {
          $user =  User::create(['username' => $request->username, 'password' => $request->password, 'avatar' => 'https://lccdn.phphub.org/uploads/avatars/21030_1515634349.jpg?imageView2/1/w/100/h/100']);

            $this->msg_status(); //登陆状态

            session(['login_info' => 'success','user_id'=>$user->id]);
            //验证通过,保存success
            setcookie('user_id',$user->id,time()+24 * 60 *60);
            return $this->success();
        } else {
            return $this->error('120');
        }


    }


    public function test()
    {
        date_default_timezone_set("PRC");
        $time = strtotime("2018-02-27 10:19:00");
        return time() - $time;
    }

// 1519697885
// 1519697880

}
