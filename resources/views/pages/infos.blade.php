@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/2.JPG') }}">

        <x-slot:title>
            {{ 'Infos Pratique' }}
        </x-slot:title>

       BLablabla
    </x-page>

@endsection
