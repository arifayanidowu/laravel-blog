@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="mt-5">
        <h1>{{ $title }}</h1>
        @if (count($services) > 0)
            <ul claass="list-group">
                @foreach ($services as $service)
                <li class="list-group-item">{{ $service }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection