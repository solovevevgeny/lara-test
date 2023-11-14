<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


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

}
