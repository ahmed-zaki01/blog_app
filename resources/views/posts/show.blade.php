@extends('layouts.app')


@section('content')
<a href="{{url('/posts')}}" class="btn btn-dark font-weight-bold shadow-none text-light my-3">Back
</a>
@if ($post)
<div class="card my-2">
    <div class="card-header">
        <h3 class="text-primary">{{$post->title}}</h3>
    </div>
    <div class="card-body">
        <p class="text-info">{!!$post->body!!}</p>
    </div>
    <div class="card-footer">
        <small class="text-info">{{$post->created_at}}</small>
    </div>
</div>
@else
<div class="jumbotron">
    <h2 class="text-primary text-center">This post is not found</h2>
</div>
@endif

@endsection
