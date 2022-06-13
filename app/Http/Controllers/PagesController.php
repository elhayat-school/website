<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PagesController extends Controller
{
    public function landing()
    {
        $articles = Article::latest('created_at')->take(9)->get();

        return view('pages.landing')->with('articles', $articles);
    }

    public function dashboard()
    {
        return view('dashboard.articles.index');
    }
}
