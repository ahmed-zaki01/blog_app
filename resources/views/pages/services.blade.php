@extends('layouts.app')

@section('content')
<div class="services-page">
    <h1 class="text-primary">{{$title}}</h1>
    @if(count($services) > 0)
    <ul class="list-group">
        @foreach($services as $service)
        <li class="list-group-item my-2">{{$service}}</li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
