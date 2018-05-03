<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat()
    {
        $login_info = $this->login_info();

        if($login_info){

           $user =  $this->getUser();

            return view('chat',[
                'user'=>$user
            ]);
        }else{
            return redirect('login');
        }


    }
}
