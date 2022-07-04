<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{

    public function render()
    {
        $articles = Article::orderByDesc('created_at')->get();

        return view('livewire.articles-table')->with('articles', $articles);
    }
}
