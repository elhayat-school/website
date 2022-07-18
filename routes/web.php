<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PagesController;
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


//Landing
Route::get('/', [PagesController::class, 'landing'])->name('landing');

//Medias
Route::resource('medias', MediaController::class);

//Views
Route::view('/founder-word', 'pages.founder-word');
Route::view('/infos', 'pages.infos');
Route::view('/resultexams', 'pages.resultexams');

//Dashboard
Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

//Articles
Route::resource('dashboard/articles', ArticleController::class)->middleware('auth')->except('show');

//View Articles
Route::get('/article/el_hayat_school_news{article}', [ArticleController::class, 'show'])->name('articles.show');


//Contact
Route::get('/contact', [ContactUsController::class, 'submitContactForm'])->name('submitContactForm');

require __DIR__ . '/auth.php';
