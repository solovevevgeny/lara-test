<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;



class MainPageController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at','DESC')
            ->take(6)
            ->get();

        $tags = Tag::all();

        return view('index',[
            'articles' => $articles,
            'tags'     => $tags
        ]);
    }
}
