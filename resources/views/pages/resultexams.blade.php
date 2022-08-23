@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/2.JPG') }}">

        <x-slot:title>
            {{ 'Résultas des examens' }}
        </x-slot:title>

        <div class=" grid grid-cols-1 gap-5 px-2 ">


            <div class="cursor-pointer rounded-2xl border-2 border-sky-500 bg-white overflow-hidden ">

                <img class="" src="{{ asset('resultat/1.jpg') }}" alt="img">
                <div class="grid grid-cols-2">

                    <img class="" src="{{ asset('resultat/2.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/3.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/4.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/5.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/6.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/7.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/8.jpg') }}" alt="img">
                    <img class="" src="{{ asset('resultat/2.jpg') }}" alt="img">

                </div>

            </div>



        </div>

    </x-page>

@endsection
