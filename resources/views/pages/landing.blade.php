@extends('layouts.template')

@section('content')

    @include('sections.hero')

    <article class="w-full overflow-hidden bg-slate-100 ">

        <div class="w-full px-2">

            <section class="py-4 max-w-7xl m-auto">
                @include('sections.nav-grid')
            </section>

            <x-section-title> Nos Etablissement </x-section-title>

            <section class="max-w-7xl m-auto mt-10 ">
                @include('sections.etablissement')
            </section>

            <x-section-title> Nos Actualitées </x-section-title>

            <section class="w-full mt-10">
                <div class="max-w-7xl m-auto">
                @include('sections.articles-grid')
                </div>
            </section>

            <x-section-title> Nos offres </x-section-title>

            <section class="w-full mt-10 bg-white">
                <div class="max-w-6xl m-auto">
                    @include('sections.marketing')
                </div>
            </section>

            <x-section-title> Nos Partenaire </x-section-title>

            <section class="w-full mt-10">
                <div class="max-w-6xl m-auto">
                    @include('sections.cambridge')
                </div>
            </section>

            <section class="w-full mt-10">
                @include('sections.contact-us')
            </section>

        </div>

    </article>

    <footer class="bg-slate-100 ">

        @include('sections.footer')

    </footer>


@endsection
