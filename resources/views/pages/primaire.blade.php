@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/3.JPG') }}">

        <x-slot:title>
            {{ 'Primaire' }}
        </x-slot:title>

        La maîtrise de la langue et des premiers éléments de mathématiques sont les objectifs prioritaires de l’école primaire pour
         permettre aux élèves d’accéder aux outils fondamentaux de la connaissance. Les élèves découvrent l’apprentissage d’une langue vivante,
        le programme prévoit des enseignements pour questionner le monde, une éducation physique et sportive et un enseignement moral et civique.
    </br>@auth
    Email :
    Téléphone :
    @endauth
    </x-page>

@endsection
