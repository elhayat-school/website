@extends('layouts.template')

@section('content')

    <x-page src="{{ asset('assets/2.JPG') }}">

        <x-slot:title>
            {{ 'Primaire' }}
        </x-slot:title>

        La scolarité au collège comporte quatre années de la 1ère AM à la 4ème AM  La classe de 1ère AM doit permettre aux
         élèves de s‘adapter à l’organisation et au cadre de vie du collège, ainsi que d’assurer la continuité des apprentissages
         entrepris dans les deux premières années du cycle dans les classes de 4ème AP et de 5ème AP.
         Une attention particulière est portée à l’accueil des élèves et à leur adaptation à l’enseignement secondaire.
    </br>@auth
    Email : </br>
    Téléphone :
    @endauth
    </x-page>

@endsection
