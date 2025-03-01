<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view("admin.home");
});

Route::get('/admin/articles/liste', function () {
    return view('admin.article.liste');
});

Route::get('/admin/articles/ajouter', function () {
    return view('admin.article.create');
});

Route::get('/admin/articles/details', function () {
    return view("admin.article.show");
});

Route::get('/admin/articles/modifier', function () {
    return view("admin.article.edit");
});

Route::get('/admin/contact/liste', function () {
    return view("admin.contact.liste");
});

Route::get('/admin/contact/details', function () {
    return view("admin.contact.show");
});

Route::get('/', function () {
    return view("client.home");
});

Route::get('/articles', function () {
    return view("client.article");
});

Route::get('/articles/{slug}', function () {
    return view("client.article-show");
});

Route::get('/contact', function () {
    return view("client.contact");
});


