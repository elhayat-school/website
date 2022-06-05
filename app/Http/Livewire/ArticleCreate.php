<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreate extends Component
{
    use WithFileUploads;

    public $cover;

    public function render()
    {
        return view('livewire.article-create');
    }
}
