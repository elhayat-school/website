<?php

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Media;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArticleCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $cover;
    public $content;
    public $fb_video;
    public $medias = [];
    public $video;

    protected $rules = [
        'title' => 'required|max:80',
        'content' => 'nullable',
        'cover' => 'required|mimes:png,jpg,gif,jpeg',
        'video' => 'nullable|mimetypes:video/avi,video/mpeg,video/quicktime,video/mp4',
        'fb_video' => 'nullable|URL'
    ];

    public function submit()
    {
        $this->validate();

        $article = Article::create([
            'title' => $this->title,
            'content' => $this->content,
            'cover' =>  $this->cover->store('articles/', 'public'),
            'fb_video' => $this->fb_video,

        ]);
        foreach ($this->medias as $media) {
            $media =  Media::create([
                'article_id' => $article->id,
                'path' =>  $media->store('articles/' . $article->id . '/media', 'public'),
            ]);
        }

        if ($this->video != null) {
            $article->video = $this->video->store('articles/video', 'public');
            $article->save();
        }
        return to_route('articles.index');
    }

    public function render()
    {
        return view('livewire.article-create');
    }
}
