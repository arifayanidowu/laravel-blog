@extends('layouts.app')

@section('content')
    <a href="/posts" class="mt-5 btn btn-light">Go Back</a>
    <div class="card mt-2">
        <h1 class="card-header text-muted" style="font-weight: 300">{{ $post->title }}</h1>
        <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" alt="{{ Auth::user()->name }}'s Image">
        {{-- <img src="{{ asset('storage/cover_images/'.$post->cover_image) }}" class="img-fluid" alt="{{ Auth::user()->name }}'s Image"> --}}
        <div class="card-body">
            <p>{!! $post->body !!}</p>
            <hr>
        &nbsp; &nbsp;<small class="small">&mdash; Created <strong>{{ $post->created_at->diffForHumans() }}</strong> by {{ $post->user->name }}</small>
        </div>
    </div>
    <hr>
    @auth
        @if (Auth::user()->id === $post->user_id)
            <a href="/posts/{{ $post->id}}/edit" class="btn btn-dark mt-2">Edit</a>

            {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right')) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
            
        @endif
        
    @endauth

@endsection