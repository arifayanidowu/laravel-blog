@extends('layouts.app')

@section('content')
    <div class="jumbotron mt-5">
    <h1 class="display-3">Welcome to {{ config('app.name') }}</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, nesciunt.</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{ route('about') }}" role="button">About</a>
        </p>
    </div>
@endsection