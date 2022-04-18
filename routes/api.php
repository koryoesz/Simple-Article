<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', [ArticleController::class, 'getAll']);
Route::get('articles/{article_id}', [ArticleController::class, 'getOne']);
Route::put('articles/{article_id}/like', [ArticleController::class, 'increaseLike']);
Route::put('articles/{article_id}/view', [ArticleController::class, 'increaseView']);
Route::put('articles/{article_id}/comment', [ArticleController::class, 'getComment']);
