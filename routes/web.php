<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/articles-lists', [ArticleController::class, 'a_detail']);
    Route::get('/articles/create', [ArticleController::class, 'create']);
	Route::post('/articles/store', [ArticleController::class, 'store']);

});

Route::get('/admin', function () {
    return 'Admin Page - Only admin can access';
})->middleware('check.email');
Route::get('/masteradmin', function () {
    return 'Master Admin Page - Only master admin can access';
})->middleware('checkm.admin');

require __DIR__.'/auth.php';

// Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

