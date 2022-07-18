<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;
class ArticlesTable extends Component
{
    use WithFileUploads;

    public $medias;
    public int $editId = 0;
    public int $articleId;

    public function addMedia()
    {
        foreach ($this->medias as $media) {
            $media =  Media::create([
                   'article_id' => $this->articleId,
                   'path' =>  $media->store('articles/' . $this->articleId . '/media', 'public'),
               ]);
           }
    }

    public function startEdit(int $id)
    {
        $this->editId = $id;
    }

    public function render()
    {
        $articles = Article::orderByDesc('created_at')->get();

        return view('livewire.articles-table')->with('articles', $articles);
    }
}
