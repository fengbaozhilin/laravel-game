<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send()
    {
        $name = '王宝花';
        // Mail::send()的返回值为空，所以可以其他方法进行判断
        try {
            Mail::send('email', ['name' => $name], function ($message) {
                $to = '2053510887@qq.com';
                $message->to($to)->subject('hzj233-注册验证码');
            });
        }
        catch (\Exception $e){
           return $this->error();
        }
        return $this->success();

     //   dd(Mail::failures());
    }



}
