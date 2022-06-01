@extends('layouts.template')

@section('content')

    @include('sections.hero')

    <article class="w-full overflow-hidden bg-slate-100 ">

        <div class="w-full px-2">

            <section class="py-4 max-w-7xl m-auto">
                @include('sections.nav-grid')
            </section>

            <section class="w-full space-y-5 mt-16">
                <img class="m-auto w-3/6 lg:w-1/6" src="{{ asset('assets/line.svg') }}" alt="">
                <h2 class="text-center font-bold text-3xl">Nos Etablissements</h2>
            </section>

            <section class="max-w-7xl m-auto mt-10 ">
                @include('sections.etablissement')
            </section>

            <section class="w-full space-y-5 mt-16">
                <img class="m-auto  w-3/6 lg:w-1/6" src="{{ asset('assets/line.svg') }}" alt="">
                <h2 class="text-center font-bold text-3xl">Nos offres</h2>
            </section>

            <section class="w-full mt-10 bg-white">
                <div class="max-w-6xl m-auto">
                    @include('sections.marketing')
                </div>
            </section>

            <section class="w-full space-y-5 mt-16">
                <img class="m-auto  w-3/6 lg:w-1/6" src="{{ asset('assets/line.svg') }}" alt="">
                <h2 class="text-center font-bold text-3xl">Nos partenaires</h2>
            </section>

            <section class="w-full mt-10 bg-white">
                <div class="max-w-6xl m-auto">
                    @include('sections.cambridge')
                </div>
            </section>

            <section class="mt-10">
                @include('sections.contact-us')
            </section>

        </div>


    </article>
    <footer class="bg-slate-100 ">

        @include('sections.footer')

    </footer>


@endsection
