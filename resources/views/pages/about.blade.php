@extends('app')

@section('title','About Us | '.config('app.name'))


@section('content')
    <p>Built with &hearts; By Mike Hanon.</p>

    <p>
        <a href="{{route('home')}}">Revenir à la page d'accueil</a>
    </p>
   
@endsection