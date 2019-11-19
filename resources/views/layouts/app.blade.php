<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name', 'Blog APP')}}</title>
    <link rel="stylesheet" href="{{url('/public/assets/css/bootstrap.min.css')}}">
</head>

<body>

    @include('navbar')
    <div class="container mt-5 mx-auto">
        @yield('content')
    </div>

    <script src="{{url('/public/assets/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{url('/public/assets/js/popper.min.js')}}"></script>
    <script src="{{url('/public/assets/js/bootstrap.min.js')}}"></script>
</body>

</html>
