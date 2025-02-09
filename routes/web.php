<?php

use App\Http\Controllers\ArticleController;
use Carbon\Traits\Date;
use Illuminate\Support\Facades\Route;

//$viewData = [
//    'name' => 'Article Listing Page',
//    'subtitle' => 'As i have met you, so you must acquire one another.',
//    'foo' => 'bar',
//    'users' => [
//        'aj' => 'Chief Technology Officer',
//        'Michael' => 'Chief Executive Officer',
//        'Jeff' => 'Director of Marketing',
//        'Janelle' => 'Director of Human Resources',
//        'Kamron' => 'temp',
//    ]
//
//];
//print_r($viewData);

Route::get('/', function () {
    return view('home');
});

Route::get('/misc', function () {
    return view('misc.index');
});


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

