<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{



    public function articleDetail($id){

       $detail =  Article::find($id);


       return view('articleDetail',['detail'=>$detail]);

    }


    public function create_article(){
        $categorys = Category::all();

        return view('create_article',[
            'categorys'=>$categorys,

        ]);
    }

    public function upload_article(Request $request){

      return response()->json(['code'=>200,'title'=>$request->title]);


    }

}
