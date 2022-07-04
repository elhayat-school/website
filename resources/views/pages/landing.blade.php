@extends('layouts.template')

@section('content')
    @include('sections.hero')

    <article class="w-full overflow-hidden bg-white">

        <div class="w-full px-2">

            <x-section>

                <x-slot:section_title class="text-red-500 capitalize font-amiri text-3xl lg:text-4xl" >
                    {{ __('together')}} <span class="text-black"> {{ __('to_have_them')}} </span> <span class="text-green-700"> {{ __('succeed')}} </span>
                </x-slot:section_title>

                <x-slot:right_png class="w-28 mr-5 mt-32 rotate-45">
                    {{ asset('assets/blush/graduate.png') }}
                </x-slot:right_png>

                <x-slot:left_png class="w-28 mr-5 -rotate-12">
                    {{ asset('assets/blush/hands.png') }}
                </x-slot:left_png>


                @include('sections.nav-grid')

            </x-section>

            <x-section id="our-establishements" >

                <x-slot:section_title >
                    Nos etablissements
                </x-slot:section_title>

                <x-slot:right_png class="w-28 mr-5 rotate-[135deg]">
                    {{ asset('assets/blush/pencil.png') }}
                </x-slot:right_png>

                <x-slot:left_png class="w-28 mr-5 -rotate-45">
                    {{ asset('assets/blush/book.png') }}
                </x-slot:left_png>


                @include('sections.etablissement')

            </x-section>

            <x-section id="articles" >

                <x-slot:section_title>
                    Nos Actualités
                </x-slot:section_title>

                <x-slot:right_png class="w-28 mr-5 mt-52">
                    {{ asset('assets/blush/earth.png') }}
                </x-slot:right_png>

                <x-slot:left_png class="w-28 mr-5 ">
                    {{ asset('assets/blush/lightbulb.png') }}
                </x-slot:left_png>

                @include('sections.articles-grid')

            </x-section>

            <x-section-title> Nos Partenaires </x-section-title>

            <section class="w-full mt-10 bg-slate-100">
                <div class="max-w-6xl m-auto">
                    @include('sections.cambridge')
                </div>
            </section>

            <section class="w-full mt-10" id="contact-us-section">
                @include('sections.contact-us')
            </section>

        </div>

    </article>


@endsection
