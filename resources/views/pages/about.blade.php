@extends('layouts.app', ['pagesTitle' => 'About us '])




@section('content')
<img class="rounded-full shadow-md my-12" src="{{asset('images/profile.png')}}" alt="Mike Hanon">

    <h2 class="text-gray-700 mb-5 text-2xl sm:text-3xl">Built with <span class="text-pink-500">&hearts;</span>  By Mike Hanon.</h2>

    <p>
        <a class="text-red-500 hover:text-red-600 underline" href="{{route('home')}}">Revenir à la page d'accueil</a>
    </p>
   
@endsection