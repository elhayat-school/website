<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('dashboard.articles.index')->with('articles', $articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'max:255',
            'thumbnail' => 'required|mimes:png,jpg,gif,jpeg'
        ]);

       $article = Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' =>  $request->file('thumbnail')->store('articles/' . $request->title , 'public'),
        ]);

        // $files = [];
        // if ($request->file('files')){
        //     foreach($request->file('files') as $key => $file)
        //     {
        //         $fileName = time().rand(1,99).'.'.$file->extension();
        //         $file->move(public_path('uploads'), $fileName);
        //         $files[]['name'] = $fileName;
        //     }
        // }

        // foreach ($files as $key => $file) {
        //     Media::create([$file, 'article_id' => $article->id]);
        // }
        return view('dashboard.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
