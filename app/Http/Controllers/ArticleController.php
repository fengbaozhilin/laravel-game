<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //文章列表
    public function article(){


    }


    public function articleDetail($id){

       $detail =  Article::find($id);


       return view('articleDetail',['detail'=>$detail]);

    }

}
