<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::Paginate(3);
        return view("article.list", ['articles'=>$articles]);
    }

    public function show($slug) 
    {
        $article = Article::with('tags')->where("slug",'=', $slug)->first();
        $article->views++;
        $article->save();

        return view('article.show',['article'=>$article]);
    }

    public function tag($tagId)
    {
        $articles = Tag::with('articles')->where('id','=', $tagId)->first();
        $articlesCollection = collect($articles->articles);

        return view('article.listByTags',[
            'articles' => $articlesCollection
        ]);

        dd($articlesCollection);

        return $articles;
    }

}
