<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(Request $request)
    {

        $category = Category::all();

        $articles = Article::select('id')->get();

        $articles_indexs = Article::where('is_index', 1)->select('id', 'thumb', 'title')->get();

        foreach ($articles as $k => $article) {

            $articles = Article::find($article->id)->select('id', 'user_id', 'cate_id', 'title', 'hits', 'created_at')
                ->with('category')
                ->with('comment')
                ->with('user');

            if ($request->filter) {

                if ($request->filter == 'hits') {

                    $articles = $articles->OrderBy('hits', 'desc');
                }

                if ($request->filter == 'created_at') {

                    $articles = $articles->OrderBy('created_at', 'asc');
                }
            } else {

            }

            $articles = $articles->paginate(5);

        }

//        $articles = Article::find(1)->with(['category'=>function($query){
//
//        }])->get();


//        return $articles;

        return view('index', [
            'category' => $category,
            'articles' => $articles,
            'articles_indexs' => $articles_indexs
        ]);

    }
}
