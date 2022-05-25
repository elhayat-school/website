@extends('layouts.template')

@section('content')
    @include('sections.hero')

    <div class="w-full overflow-hidden bg-slate-100 ">

        <div class="w-full py-5 px-2">

            <div class="py-4">
                @include('sections.nav-grid')
            </div>

            <div class="w-full space-y-5 mt-16">
                <img class="m-auto w-3/6 lg:w-1/6" src="{{asset('assets/line.svg')}}" alt="">
                <h2 class="text-center font-bold text-3xl">Nos Etablissement</h2>
            </div>

            <div class="w-full m-auto mt-10 ">
                @include('sections.etablissement')
            </div>

            <div class="w-full space-y-5 mt-16">
                <img class="m-auto  w-3/6 lg:w-1/6" src="{{asset('assets/line.svg')}}" alt="">
                <h2 class="text-center font-bold text-3xl">Nos offres</h2>
            </div>

            <div class="w-full mt-10 bg-white">
                <div class="max-w-6xl m-auto">
                @include('sections.marketing')
                </div>
            </div>

            <div class="mt-10">
                @include('sections.contact-us')
            </div>



        </div>

    </div>


    </div>
@endsection
