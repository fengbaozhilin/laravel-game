<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{


    public function articleDetail($id)
    {

        $this->hit($id);

        $article = Article::where('id',$id);

        if($article){

            $article = $article->with('user')->with('comment')->first();

            foreach ($article->comment as $k => $value){

                $user =   User::find($value->user_id);

                $article->comment[$k]['user'] = $user;
            }

            $count_comment  = count($article->comment);

        return view('articleDetail',['article'=>$article,'count_comment'=>$count_comment]);
        }else{
            var_dump(1);
        }



    }

//上传文章页面
    public function create_article()
    {
        $categorys = Category::all();

        return view('create_article', [
            'categorys' => $categorys,

        ]);
    }

    //上传文章
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

    public function article_reply(Request $request){

        if($this->login_info()){
            try {

                Comment::create(['article_id'=>$request->article_id,'content'=>$request->contents,'user_id'=>$this->getUser()->id]);

            } catch (\Exception $e) {

                $this->msg_status(200);

                return redirect()->back();
            }
            $this->msg_status();

            return redirect()->back();
        }else{
            $this->msg_status(200);
            return redirect('login');
        }



    }


    //增加点击量
    public function hit($id){

        if(isset($_SERVER['REMOTE_ADDR'])){

         if( $article =  Article::find($id)){

             $article->hits =$article->hits+1;

             $article->save();

             return true;
         }

        }
    }

}
