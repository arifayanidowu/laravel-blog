@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-striped">
                        @if (count($posts) > 0)
                        <thead class="thead-inverse">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td scope="row">{{ $post->title}}</td>
                                    <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a></td>
                                    <td>
                                        {{ Form::open(array('action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE')) }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach                
                            </tbody>
                        </table>
                        @else
                            <small class="small">&nbsp; &mdash; You Have no Posts</small>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
