<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouter(){
        return view('admin.article.create');
       }

       public function modifier(){
        return view('admin.article.edit');
       }

       public function liste(){
        return view('admin.article.liste');
       }

       public function details(){
        return view('admin.article.show');
       }
}
