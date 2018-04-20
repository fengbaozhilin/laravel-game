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

        $articles_indexs = Article::where('is_index', 1)->select('id', 'thumb', 'name')->get();

        foreach ($articles as $k => $article) {

            $articles = Article::find($article->id)->select('id', 'user_id', 'cate_id', 'name', 'hits', 'created_at')
                ->with('category')
                ->with('comment')
                ->with('user');


            if ($request->filter) {

                if ($request->filter == 'hits') {

                    $articles = $articles->OrderBy('hits', 'desc');
                }

            } else {
                $articles = $articles->OrderBy('created_at', 'desc');
            }

            $articles = $articles->paginate(5);

        }

        return view('index', [
            'category' => $category,
            'articles' => $articles,
            'articles_indexs' => $articles_indexs
        ]);

    }


    public function cate($cate_id, Request $request)
    {


        $articles = Article::select('id')->get();

        $category = Category::all();

        foreach ($articles as $k => $article) {

            $articles = Article::find($article->id)->select('id', 'user_id', 'cate_id', 'name', 'hits', 'created_at')
                ->with('category')
                ->with('comment')
                ->with('user')
                ->where('cate_id', $cate_id);


            if ($request->filter) {

                if ($request->filter == 'hits') {

                    $articles = $articles->OrderBy('hits', 'desc');
                }

            } else {
                $articles = $articles->OrderBy('created_at', 'desc');
            }

            $articles = $articles->paginate(5);

        }

        return view('cate', [
            'category' => $category,
            'articles' => $articles,
            'cate' => $cate_id,
        ]);


    }
}
