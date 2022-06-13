@extends('layouts.template')

@section('content')
    <x-page src="{{ asset('storage/' . $article->cover) }}">

        <x-slot:title>
            {{ $article->title }}
        </x-slot:title>

        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-10 gap-y-10 max-w-6xl m-auto" dir="auto">

            <div class="lg:col-span-2">
                    @if(!is_null($article->fb_video))
                    <x-fb-video class="w-full shadow-xl" data-href=" {{ $article->fb_video }}">
                    </x-fb-video>
                    @else
                    <img src="{{ asset('storage/' . $article->cover) }}" alt="cover">
                    @endif
            </div>

            <p class="text-lg lg:ml-5 text-justify font-bold" dir="auto">
                {{ $article->content }}
            </p>

        </div>


            @if (!$article->medias->isEmpty())

               <x-media-grid class="grid grid-cols-3 lg:grid-cols-6" :medias="$article->medias"/>

            @endif

    </x-page>

@endsection
