@extends('layouts.template')

@section('content')
    @include('sections.hero')

    <div class="w-full bg-gray-200 pt-10 ">

        <div class="max-w-5xl m-auto px-5 ">


            <h2 class="text-5xl m-10 underline text-blue-600 font-bold text-center">
                Nos cycles
            </h2>






        </div>

        <div class="w-full py-5 bg-white">

            @include('sections.etablissement')

        </div>



    </div>
@endsection
