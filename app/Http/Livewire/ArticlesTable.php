<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{

    public function render()
    {
        $articles = Article::all();

        return view('livewire.articles-table')->with('articles', $articles);
    }
}
