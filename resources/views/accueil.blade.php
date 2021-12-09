@extends('base')

@section('title')
Ma boutique
@stop

@section('content')
        <h1>Bienvenue sur votre boutique <span class="text-pink-500">&hearts;</span></h1>
        <img src="{{asset('image/saliou.JPG')}}" alt="Saliou">
        <p>Il est : {{date('h:i A')}}</p>
        <a href="#" class="text-indigo-400 hover:text-indigo-900">Page à propos</a>
 @endsection
 