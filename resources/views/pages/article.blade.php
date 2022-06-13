@extends('layouts.template')

@section('content')
    <x-page src="{{ asset('storage/' . $article->cover) }}">

        <x-slot:title>
            {{ $article->title }}
        </x-slot:title>

        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-10 gap-y-10 max-w-6xl m-auto ">

            <div class="lg:col-span-2">

                @if ($article->fb_video != null)
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
        <div x-data="{ imgModal: false, imgModalSrc: '', imgModalDesc: '' }" class="my-10">


            @if (!$article->medias->isEmpty())
                <div class="container grid grid-cols-6 gap-2 mt-10 border-2 border-bluepurple rounded-lg p-2">

                    @foreach ($article->medias as $media)
                        <x-media-grid src="{{ asset('storage/' . $media->path) }}"
                            imgModalSrc="{{ asset('storage/' . $media->path) }}" />
                    @endforeach

                </div>
            @endif

    </x-page>
@endsection
