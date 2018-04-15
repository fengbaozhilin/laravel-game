<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public  function index(){

        $category = Category::all();

        $articles = Article::select('id')->get();


        foreach ($articles as $k=> $article){

            $articles = Article::find($article->id)->select('id','user_id','cate_id','title','hits','created_at')
                ->with('category')
                ->with('comment')
                ->with('user')
                ->paginate(1);
        }

//        $articles = Article::find(1)->with(['category'=>function($query){
//
//        }])->get();


//        return $articles;

        return view('index',[
            'category'=>$category,
            'articles'=>$articles
        ]);

    }
}
