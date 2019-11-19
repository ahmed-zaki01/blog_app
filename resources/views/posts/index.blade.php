@extends('layouts.app')


@section('content')
@if(count($posts) > 0)

@foreach ($posts as $post)
<div class="card my-2">
    <div class="card-header">
        <a href="{{url('/posts/'.$post->id)}}">
            <h3 class="text-primary">{{$post->title}}</h3>
        </a>
        <small class="text-info">{{$post->created_at}}</small>
    </div>
</div>
@endforeach
<div class="d-flex justify-content-center">{{$posts->links()}}</div>
@else
<div class="jumbotron">
    <h2 class="text-primary text-center">There is no posts</h2>
</div>
@endif

@endsection
