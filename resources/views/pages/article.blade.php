@extends('layouts.template')

@section('content')
    <x-page src="{{ asset('storage/' . $article->cover) }}">

        <x-slot:title>
            {{ $article->title }}
        </x-slot:title>

        {{ $article->content }}

        <div class="grid grid-cols-6 gap-2 w-full">
            @foreach ($article->medias as $media)
            <img src="{{asset('storage/'.$media->path)}}" alt="">
            @endforeach

        </div>
    </x-page>
@endsection
