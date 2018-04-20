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








}
