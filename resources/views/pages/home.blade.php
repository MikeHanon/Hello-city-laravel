@extends('layouts.app')

@section('content')
      <img class="rounded shadow-md h-60 mt-12" src="{{asset('images/Flag_of_Belgium.jpg')}}" alt="Belgiun flag">

        <h1 class="text-red-600 text-3xl sm:text-5xl font-semibold mt-10">hello from Belgium! </h1>

        <p class="text-gray-800 text-lg mt-5">It's currently {{date('h:i A')}} .</p>

    
  @endsection
