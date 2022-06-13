@extends('layouts.template')

@section('content')
    <x-page src="{{ asset('storage/' . $article->cover) }}">

        <x-slot:title>
            {{ $article->title }}
        </x-slot:title>

        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-10 gap-y-10 max-w-6xl m-auto" dir="auto">

            <div class="lg:col-span-2">
                    @if(!is_null($article->fb_video))
                    {{-- <x-fb-video class="w-full shadow-xl" data-href=" {{ $article->fb_video }}">
                    </x-fb-video> --}}
                    @else
                    <img src="{{ asset('storage/' . $article->cover) }}" alt="cover">
                    @endif
            </div>

            <p class="text-lg lg:ml-5 text-justify font-bold" dir="auto">
                {{ $article->content }}
            </p>

        </div>


            @if (!$article->medias->isEmpty())
                <div class="container grid grid-cols-6 gap-2 mt-10 border-2 border-bluepurple rounded-lg p-2">

                        <x-media-grid :medias="$article->medias"/>

                </div>
            @endif

    </x-page>

@endsection
