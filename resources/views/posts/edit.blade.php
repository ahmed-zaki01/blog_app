@extends('layouts.app')


@section('content')
@if ($post)
<h1>Edit Post</h1>
{!! Form::open(['method' => 'POST', 'action' => ['PostsController@update', $post->id]]) !!}

<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $post->title, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control']) }}
</div>

{{Form::hidden('_method', 'PUT')}}
<div class="d-flex justify-content-around">
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    <a href="{{url('/posts/'.$post->id)}}" class="btn btn-info">Cancel</a>
</div>
{!! Form::close() !!}
@else
<div class="jumbotron">
    <h2 class="text-primary text-center">There is something wrong</h2>
</div>
@endif

@endsection
