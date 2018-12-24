@extends('layouts.app')

@section('content')
    <h1 class="mt-5 text-center">Create Post</h1>
    {{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
        <div class="form-group">
            {{ Form::label('title', 'Enter Title', array('class' => 'control-label')) }}
            {{ Form::text('title', null ,array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Enter Body', array('class' => 'control-label')) }}
            {{ Form::textarea('body', null ,array('class' => 'form-control', 'id' => 'summary-ckeditor')) }}
        </div>
        <div class="form-group">
            {{ Form::file('cover_image') }}
        </div>
        {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection

@section('scripts')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
      CKEDITOR.replace('summary-ckeditor');
    </script>
@endsection