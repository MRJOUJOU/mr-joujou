<?php

use App\Http\Controllers\admin\ArticleController as AdminArticleController;
use App\Http\Controllers\admin\ContactController as AdminContactController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\client\ArticleController;
use App\Http\Controllers\client\CategorieController;
use App\Http\Controllers\client\ContactController;
use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [AdminHomeController::class, 'acceuil'])->name('');

Route::get('/admin/articles/liste', [AdminArticleController::class, 'liste']);

Route::get('/admin/articles/ajouter', [AdminArticleController::class, 'ajouter']);

Route::get('/admin/articles/details',[AdminArticleController::class, 'details'] );

Route::get('/admin/articles/modifier', [AdminArticleController::class, 'modifier']);

Route::get('/admin/contact/liste', [AdminContactController::class, 'liste']);

Route::get('/admin/contact/details', [AdminContactController::class, 'details']);

Route::get('/', [HomeController::class, 'acceuil']) ->name('client.acceuil');

Route::get('/articles', [ArticleController::class, 'liste'])->name('client.article');

Route::get('/articles/{slug}', [ArticleController::class, 'details'])->name('client.article.details');

Route::get('/contact', [ContactController::class, 'contact'])->name('client.contact');

Route::post('/contact/taitement', [ContactController::class, 'contact_traitement'])->name('client.contact.traitement');

Route::get('/categorie', [CategorieController::class, 'liste'])->name('client.categorie');

Route::get('/categorie/{slug}', [CategorieController::class, 'details'])->name('client.categorie.details');


