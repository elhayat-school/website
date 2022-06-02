<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MediaController;
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

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/founders-word', function () {
    return view('pages.founder-word');
});

Route::get('/infos', function () {
    return view('pages.infos');
});

Route::get('/resultexams', function () {
    return view('pages.resultexams');
});


Route::resource('articles', ArticleController::class)->middleware('auth');

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
