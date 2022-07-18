@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/2.JPG') }}">

        <x-slot:title>
            {{ 'Résultas des examens' }}
        </x-slot:title>

        <div class=" grid grid-cols-1 gap-5 px-2 ">


            <div class="cursor-pointer rounded-2xl border-2 border-sky-500 bg-white overflow-hidden ">

                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">
                <img class="w-full h-full " src="{{ asset('assets/podiumbem.png') }}" alt="img">

            </div>



        </div>

    </x-page>

@endsection
