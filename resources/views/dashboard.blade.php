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
                    <a href="{{url('/posts/create')}}" class="nav-link btn btn-primary">Create Post</a>
                    @if(count($posts) > 0)
                    <table class="table table-striped my-3">
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="{{url('/posts/'.$post->id)}}" class="btn btn-info">View Post</a></td>

                        </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
