<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function liste()
    {
        $articles = Article::all();
        //dd($articles);

        return view("client.article", [
            'articles' => $articles
        ]);
    }

    public function details(string $slug)
    {
        //dd($slug)
        $articles = Article::where('slug','=', $slug)->first();

        return view('client.article-show', [
            'articles' => $articles
        ]);
    }
}
