@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/2.JPG') }}">

        <x-slot:title>
            {{ 'Secondaire' }}
        </x-slot:title>

        De l’école primaire à la fin de la scolarité obligatoire, les élèves acquièrent progressivement les compétences
        et les connaissances nécessaires à la maîtrise des valeurs et attitudes requises pour réussir sa scolarité, sa vie d’individu
        et de futur citoyen. Au lycée, les élèves consolident leurs apprentissages
         dans ces domaines selon leurs choix de filière (les sciences et la technologie, l’histoire et la géographie, les langues, l’économie…)
    </br>@auth
    Email : </br>
    Téléphone :
    @endauth
    </x-page>

@endsection
