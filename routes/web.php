<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use Carbon\Traits\Date;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/misc', function () {
    return view('misc.index');
});


Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

// Route for uploading Excel Spreadsheet for Products
Route::post('/import-products', [\App\Http\Controllers\ProductController::class, 'import'])
    ->name('products.import');



//  Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::post('/import-products', [ProductController::class, 'import'])->name('admin.products.import');
    Route::get('/articles', [ArticleController::class, 'index'])->name('admin.articles.index');
    // Add more routes as needed for articles and reports
});