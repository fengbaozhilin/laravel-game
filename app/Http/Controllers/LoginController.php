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
                'username' => 'min:2',
                'password' => 'min:2',
            ]);
            if ($validator->fails()) {
                return $this->error();
            }
            return $this->success();

    }

    public function register()
    {

        return view('register');
    }
}
