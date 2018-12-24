@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="mt-5">
        <h1>This is the About page</h1>
        <a href="{{ route('homepage') }}">Home</a>
    </div>
@endsection