<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Blog APP')}}</title>
    <link rel="stylesheet" href="{{url('/assets/css/bootstrap.min.css')}}">
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
    <script src="{{url('/assets/js/ckeditor.js')}}">
       window.onload = function() {
        CKEDITOR.appendTo('article-ckeditor');
    };

    </script>
</body>

</html>
