@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/2.JPG') }}">

        <x-slot:title>
            {{ 'Résultas des examens' }}
        </x-slot:title>

        <div class=" grid grid-cols-1 lg:grid-cols-3 gap-5 px-2 ">


            <div class="cursor-pointer rounded-2xl border-2 border-sky-500 bg-white overflow-hidden ">

                <img class="w-full h-full " src="{{ asset('assets/result1.jpg') }}" alt="">



            </div>

            <div class="cursor-pointer rounded-2xl border-2 border-sky-500 bg-white overflow-hidden ">

                <img class="w-full h-full " src="{{ asset('assets/result2.jpg') }}" alt="">

            </div>

            <div class="cursor-pointer rounded-2xl border-2 border-sky-500 bg-white overflow-hidden">

                <img class="w-full h-full" src="{{ asset('assets/result3.jpg') }}" alt="">


                </div>

            </div>



        </div>

    </x-page>

@endsection
