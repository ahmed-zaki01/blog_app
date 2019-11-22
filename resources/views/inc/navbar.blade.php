<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Blog APP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li><a class="nav-link" href="{{url('/about')}}">About</a></li>
            <li><a class="nav-link" href="{{url('/services')}}">Services</a></li>
            <li><a class="nav-link" href="{{url('/posts')}}">Blog</a></li>
        </ul>

        <ul class="navbar navbar-nav ml-auto">
            <li><a class="nav-link" href="{{url('/posts/create')}}">Create Post</a></li>
        </ul>

    </div>
</nav>





<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Blog APP')}}</title>
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('/assets/css/summernote.min.css')}}">
    <link rel="stylesheet" href={{url('/css/app.css')}}>
</head>

<body>

    @include('inc.navbar')
    <div class="container mt-5 mx-auto">
        @include('inc.messages')
        @yield('content')
    </div>

    <script src="{{url('/assets/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{url('/assets/js/popper.min.js')}}"></script>
    <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/assets/js/summernote.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote();
        });

    </script>
</body>

</html>
