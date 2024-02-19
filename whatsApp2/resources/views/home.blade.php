@extends("layouts.layout")

@section('title', "home")

@section("links")

@endsection

@section('content')
    <h1>Eres un pedazo de bujarra {{Auth::user()->name}}</h1>
@endsection