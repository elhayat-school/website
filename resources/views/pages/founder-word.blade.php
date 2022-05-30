@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/1.JPG') }}">

        <x-slot:title>
            {{ 'mot du directeur' }}
        </x-slot:title>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sint tempore aspernatur culpa incidunt non
        magni nobis hic? Possimus maiores aliquam quaerat vero accusantium natus sequi culpa necessitatibus, soluta
        consequuntur!
    </x-page>

@endsection
