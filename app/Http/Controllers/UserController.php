<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index($id, Request $request)
    {


        if ($user = User::find($id)) {

            $friends = Friend::where('user_id', $id)->with('user')->get();

            $articles = Article::where('user_id', $id)->with('comment')->get();

            $state = 2;            //关注用户

            if ($this->login_info()) {
                if ($this->getUser()->id == $id) {
                    $state = 1;             //编辑个人资料
                }
            }

            if ($request->filter) {
                return view('user', [
                    'id' => $id,
                    'user' => $user,
                    'articles' => $articles,
                    'friends' => $friends,
                    'filter' => $request->filter,
                    'state' => $state,
                ]);
            } else {
                return view('user', [
                    'id' => $id,
                    'user' => $user,
                    'articles' => $articles,
                    'friends' => $friends,
                    'filter' => null,
                    'state' => $state,
                ]);
            }

        } else {
            return redirect('/');
        }

    }

    //编辑页面
    public function edit($id,Request $request)
    {

        if (session('user_id') == $id) {

            $user = User::find($id);

            if ($request->filter) {
                $filter = $request->filter;
            }else{
                $filter = null;
            }
            return view('edit', ['user' => $user,'filter'=>$filter,'user_id'=>$id]);

        } else {
            $this->msg_status(200);

            return redirect('/');
        }


    }

    //编辑
    public function editInfo(Request $request, User $user)
    {

        $this->check_login();

        if (session('user_id') == $request->user_id) {

            $user = $user->find($request->user_id);

            $user->update(['nickname' => $request->nickname]);

            $this->msg_status();

            return redirect()->back();

        } else {
            $this->msg_status(200);

            return redirect()->back();
        }


    }

    public function friend($id)
    {

        $this->check_login();

        if ($this->getUser()->id !== $id) {

            if (!Friend::where('user_id', $this->getUser()->id)->where('friend_id', $id)->first()) {

                try {
                    Friend::create(['user_id' => $this->getUser()->id, 'friend_id' => $id]);

                } catch (\Exception $e) {

                    $this->msg_status(200);
                    return redirect()->back();
                }

                $this->msg_status();

                return redirect()->back();


            } else {
                echo '<script> alert("你已经添加过此用户");window.history.go(-1)</script>';

            }


        } else {

            echo '<script>alert("你不能添加自己为好友");window.history.go(-1)</script>';

        }


    }


    public function upload_avatar(Request $request){

        if($this->login_info()) {

            if ($request->user_id == session('user_id')) {

                $file = $request->file('avatar');

                $allowed_extensions = ["png", "jpg", "gif"];

                if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                    return ['error' => 'You may only upload png, jpg or gif.'];
                }

                $destinationPath = 'images/image/'; //public 文件夹下面建文件夹

                $extension = $file->getClientOriginalExtension();

                $fileName = str_random(10) . '.' . $extension;

                $file->move($destinationPath, $fileName);

                $filePath = asset($destinationPath . $fileName);

                $user = User::find(session('user_id'));

                try{

                    $user->update(['avatar'=>$filePath]);


                }catch (\Exception $e){

                    $this->msg_status(200);
                    return redirect()->back();
                }

                $this->msg_status();

                return redirect()->back();

        }

        }else{
            return redirect('login');
        }



    }

    public  function  edit_password(Request $request){
        if($this->login_info()) {

            if ($request->user_id == session('user_id')) {

                $user = User::find(session('user_id'));

                try{

                    $user->update(['password'=>$request->password]);

                }catch (\Exception $e){

                    $this->msg_status(200);

                    return redirect()->back();
                }

                $this->msg_status();

                return redirect()->back();

            }

        }else{

            return redirect('login');

        }


    }


}
