<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

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

Route::view('', 'pages.landing')->name('pages.landing');

Route::view('founders-word', 'pages.founder-word')->name('pages.founders_word');

Route::view('infos', 'pages.infos')->name('pages.infos');

Route::view('resultexams', 'pages.resultexams')->name('pages.exams_result');

Route::view('primaire', 'pages.primaire')->name('pages.primaire');
Route::view('Moyen', 'pages.moyen')->name('pages.moyen');



Route::middleware('auth')->group(function () {

    Route::resource('articles', ArticleController::class);

    Route::view('dashboard', 'dashboard')->name('dashboard');
});

