<?php

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
    global $viewData;
    return view('welcome')->with($viewData);
});

Route::get('/articles', [\App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');

