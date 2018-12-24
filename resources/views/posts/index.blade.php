@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2 class="text-muted" style="font-weight: 300">Posts</h2>
        </div>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                <img src="{{ asset('storage/cover_images/'.$post->cover_image) }}" class="img-fluid img-thumbnail" alt="{{ Auth::user()->name }}'s Image">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="text-muted"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small class="small">&mdash; Created <strong>{{ $post->created_at->diffForHumans() }}</strong> by {{ $post->user->name }}</small>
                </div>
                @endforeach
        @else
                <p class="mt-5 text-center">No Posts Found</p>
            </div>
        </div>
        </div>
        @endif

    </div>

    {{ $posts->onEachSide(3)->links() }}
@endsection
