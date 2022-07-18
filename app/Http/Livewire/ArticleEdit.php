<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use App\Models\Media;
use Livewire\WithFileUploads;

class ArticleEdit extends Component
{
    use WithFileUploads;

    public int $articleId;
    public $medias = [];

    public function addMedia()
    {
        $date = date('Y-m-d');

        foreach ($this->medias as $media) {
            $media =  Media::create([
                'article_id' => $this->articleId,
                'path' =>  $media->store('articles/'.$date.'/'.$this->articleId . '/media', 'public'),
            ]);
        }
    }


    public function render()
    {
        return view('livewire.article-edit');
    }
}
