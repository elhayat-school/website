<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PagesController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [PagesController::class, 'landing'])->name('landing');
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

Route::get('/founder-word', function () {
    return view('pages.founder-word');
});

Route::get('/infos', function () {
    return view('pages.infos');
});

Route::get('/resultexams', function () {
    return view('pages.resultexams');
});

Route::get('/primaire', function () {
    return view('pages.primaire');
});

Route::get('/moyen', function () {
    return view('pages.moyen');
});

Route::get('/secondaire', function () {
    return view('pages.secondaire');
});

Route::resource('articles', ArticleController::class)->middleware('auth')->except('show');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('articles.show');

require __DIR__.'/auth.php';
