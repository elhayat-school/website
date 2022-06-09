@extends('layouts.template')

@section('content')
    @include('sections.hero')

    <article class="w-full overflow-hidden bg-slate-100 ">

        <div class="w-full px-2">

            <x-section>

                <x-slot:section_title class="text-red-500 capitalize font-nadia" >
                    Tous Enssemble <span class="text-black"> pour </span> <span class="text-green-700"> les faire réussir </span>
                </x-slot:section_title>

                <x-slot:right_png class="w-28 mr-5 mt-32 rotate-45">
                    {{ asset('assets/blush/pencil.png') }}
                </x-slot:right_png>

                <x-slot:left_png class="w-28 mr-5 -rotate-12">
                    {{ asset('assets/blush/hands.png') }}
                </x-slot:left_png>


                @include('sections.nav-grid')

            </x-section>

            <x-section id="our-establishements" >

                <x-slot:section_title >
                    Nos etablissement
                </x-slot:section_title>

                <x-slot:right_png class="w-28 mr-5 rotate-45">
                    {{ asset('assets/blush/graduate.png') }}
                </x-slot:right_png>

                <x-slot:left_png class="w-28 mr-5 -rotate-45">
                    {{ asset('assets/blush/book.png') }}
                </x-slot:left_png>


                @include('sections.etablissement')

            </x-section>

            <x-section >

                <x-slot:section_title>
                    Nos Actualité
                </x-slot:section_title>

                <x-slot:right_png class="w-28 mr-5 mt-52">
                    {{ asset('assets/blush/earth.png') }}
                </x-slot:right_png>


                <x-slot:left_png class="w-28 mr-5 -rotate-12">
                    {{ asset('assets/blush/apple.png') }}
                </x-slot:left_png>

                @include('sections.articles-grid')

            </x-section>


            <x-section-title> Nos offres </x-section-title>

            <section class="w-full mt-10 bg-white">
                <div class="max-w-6xl m-auto">
                    @include('sections.marketing')
                </div>
            </section>

            <x-section-title> Nos Partenaires </x-section-title>

            <section class="w-full mt-10">
                <div class="max-w-6xl m-auto">
                    @include('sections.cambridge')
                </div>
            </section>

            <section class="w-full mt-10" id="contact-us-section">
                @include('sections.contact-us')
            </section>

        </div>

    </article>

    <footer class="bg-slate-100 ">

        @include('sections.footer')

    </footer>
@endsection
