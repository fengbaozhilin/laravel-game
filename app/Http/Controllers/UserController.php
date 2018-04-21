<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Friend;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index($id,Request $request){


            if($user = User::find($id)) {

                $friends = Friend::where('user_id', $id)->with('user')->get();

                $articles = Article::where('user_id', $id)->with('comment')->get();

                $state =2 ;            //关注用户

                if($this->login_info()){
                    if ($this->getUser()->id == $id){
                        $state = 1 ;             //编辑个人资料
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

            }else{
                return redirect('/');
            }

        }

        //编辑页面
        public function edit($id){

            if(session('user_id') == $id){

                $user = User::find($id);

                return view('edit',['user'=>$user]);

            }else{
                $this->msg_status(200);

                return redirect('/');
            }









        }

        //编辑
        public function  editInfo(Request $request,User $user){

            $this->check_login();

            if(session('user_id') == $request->user_id){

                $user = $user->find($request->user_id);

                $user->update(['nickname'=>$request->nickname]);

                $this->msg_status();

                return redirect()->back();

            }else{
                $this->msg_status(200);

                return redirect()->back();
            }





        }








}
