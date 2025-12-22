<?php

use Illuminate\Support\Facades\Route;
// Route::get('/articles/detail/{id}', function ( $id ) {
//  return "Article Detail - $id";
// });
Route::get('/articles/detail', function () {
 return 'Article Detail';
})->name('article.detail');
Route::get('/articles/more', function() {
 return redirect()->route('article.detail');
});
use App\Http\Controllers\ArticleController;
use App\Models\Article;
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

use App\Http\Controllers\Testing\FirstEgController;
Route::get('/products/detail', function () {
 return 'Product Detail';
})->name('product.detail');
Route::get('/products/more', function() {
 return redirect()->route('product.detail');
});
Route::get('/products', [FirstEgController::class, 'products']);
Route::get('/products/detail/{id}', [FirstEgController::class, 'detail_id']);
Route::get('/products/detail', [FirstEgController::class, 'detail']);

use App\Http\Controllers\MovieController;

Route::get('/dd_movies', [MovieController::class, 'index']);



// Route::get('/test-dd', function () {
//     $articles= Article::all();
//     dd($articles);   
// });