<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;

class ArticleController extends Controller
{

    public function liste()
    {
        $articles = Article::all();
        //dd($articles);

        return view('admin.article.liste', [
            'articles' => $articles
        ]);
    }

    public function ajouter()
    {
        $categories = Categorie::all();
        return view('admin.article.create',[

            'categories' => $categories
        ]);

    }

    public function ajouter_traitement(Request $request)
    {
        //dd($request->all());

        Article::create([
            'titre' => $request->titre,
            'image' => $request->image,
            'resume' => $request->resume,
            'categorie_id' => $request->categorie_id,
            'description' => $request->description,
            'tags' => $request->tags,
            'slug' => Str::slug(date('Y-m-d') . '-' . $request->slug)
        ]);
        return redirect()->route('admin.article.ajouter');
    }

    public function modifier()
    {
        return view('admin.article.edit');
    }

    public function details()
    {
        return view('admin.article.show');
    }
}
