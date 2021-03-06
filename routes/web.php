<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    $articles = Article::all();
    return view('articles', ['articles' => $articles]);
});

Route::get('/formArticle', function () {
    return view('formArticle');
});

Route::post('newArticle', [ArticleController::class, 'store']);