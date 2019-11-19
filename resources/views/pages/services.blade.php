@extends('layouts.app')

@section('content')
<div class="services-page">
    <h1 class="text-primary">{{$title}}</h1>
    @if(count($services) > 0)
    <h3 class="text-gray">Our Services</h3>
    <ul class="list-group">
        @foreach($services as $service)
        <li class="list-group-item">{{$service}}</li>
        <li class="list-group-item">{{$service}}</li>
        <li class="list-group-item">{{$service}}</li>
        @endforeach
    </ul>
    @endif
</div>
@endsection
