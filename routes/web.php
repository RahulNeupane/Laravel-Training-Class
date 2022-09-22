<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;


Route::get('/', function () {
    return view('welcome',[
        'header'=>'Routine of KIST Banda',
        'articles'=>Article::getAllArticles()
    ]);
});




