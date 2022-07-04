@extends('layouts.template')

@section('content')
    <x-page src="{{ asset('assets/1.JPG') }}">

        <x-slot:title>
            Tous les Medias
        </x-slot:title>

        @foreach ($mediasByArticle as $medias)
        <div class="flex items-center mt-10 bg-littleboyblue text-white py-2 rounded-md px-2 lg:px-4">
            <div class="h-10 w-1  bg-white rounded-full"></div>
            <h2 class="text-xl md:text-2xl mr-2">

                {{ $medias->first()->article->title }}
            </h2>
        </div>
            <x-media-grid class="grid grid-cols-3 lg:grid-cols-6" :medias="$medias" />

        @endforeach

    </x-page>
@endsection
