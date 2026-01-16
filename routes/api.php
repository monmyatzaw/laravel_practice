<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ArticleApiController;

Route::get('/articles', [ArticleApiController::class,'index']);
Route::get('/articles/{id}', [ArticleApiController::class,'detail']);
Route::post('/articles', [ArticleApiController::class,'create']);
Route::put('/articles/{id}', [ArticleApiController::class,'update']);
Route::patch('/articles/{id}', [ArticleApiController::class,'update']);
Route::delete('/articles/{id}', [ArticleApiController::class,'delete']);

// Route::apiResource('/articles', 'ArticleApiController');
// url is /api/articles