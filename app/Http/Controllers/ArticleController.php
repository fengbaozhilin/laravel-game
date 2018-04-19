<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function articleDetail($id)
    {

        $detail = Article::find($id);


        return view('articleDetail', ['detail' => $detail]);

    }


    public function create_article()
    {
        $categorys = Category::all();

        return view('create_article', [
            'categorys' => $categorys,

        ]);
    }

    public function upload_article(Request $request)
    {

        if ($this->login_info()) {

            $user = $this->getUser();

            try {

                Article::create(['user_id'=> $user->id,'cate_id'=>$request->cate_id,'name'=>$request->title,'content'=>$request->a_content]);

            } catch (\Exception $e) {

                $this->msg_status(200);

                return $this->error();
            }

            return $this->success();
        } else {
            return $this->error('300', '未登录');
        }
    }

}
