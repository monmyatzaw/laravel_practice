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
Route::get('/products', [FirstEgController::class, 'products']);
Route::get('/products/detail/{id}', [FirstEgController::class, 'detail_id']);
Route::get('/products/detail', [FirstEgController::class, 'detail']);

use App\Http\Controllers\MovieController;
Route::get('/dd-movies', [MovieController::class, 'index']);

use App\Http\Controllers\Testing\ProfileController;
Route::get('/profiles/detail', [ProfileController::class, 'index']);

use App\Http\Controllers\Testing\UserController;
Route::get('/users/detail', [UserController::class, 'index']);
Route::get('/post-list', [UserController::class, 'postList']);
Route::get('/user/comments', [UserController::class, 'showComments']);
Route::get('/user/{id}/latest-comment', [UserController::class, 'showLatestComment']);
// output of url 'http://127.0.0.1:8000/user/3/latest-comment' is "beautiful!!"

Route::get('/user/{id}/comments', [UserController::class, 'showUserComments']);
// output of 'http://127.0.0.1:8000/user/3/comments' is 'very good!' and 'beautiful!!'
use App\Http\Controllers\Testing\LikeController;
Route::get('/user/likes', [LikeController::class, 'showLikedPosts']);
Route::get('/post/likers', [LikeController::class, 'showPostLikers']);

use App\Http\Controllers\PostController;
Route::get('/post-user', [PostController::class, 'postedUser']);

use App\Http\Controllers\Testing\CommentController;


// Route::get('/test-dd', function () {
//     $articles= Article::all();
//     dd($articles);   
// });