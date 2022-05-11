@extends('layouts.template')

@section('content')

    @include('sections.hero')

    <div class="w-full  pt-10 ">

        <div class="max-w-5xl m-auto px-5 ">

            @include('sections.card-grid')

            @include('sections.content')

        </div>

        @include('sections.contact-form')

        <div class="mt-52 ">


        @include('sections.footer')

        </div>

    </div>

@endsection
