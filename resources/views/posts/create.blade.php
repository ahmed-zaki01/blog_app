@extends('layouts.app')

@section('content')
<h1 class="text-primary">Create A Post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
<div class="form-group my-3">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
</div>
<div class="form-group my-3">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
</div>
{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection
