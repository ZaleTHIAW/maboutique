@extends('base')

@section('title')
Ma boutique
@stop

@section('content')
        <h1>Bienvenue sur votre boutique</h1>
        <p>Il est : {{date('h:i A')}}</p>
        <a href="/">Page d'accueil</a>
 @endsection