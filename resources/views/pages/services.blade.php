@extends('layouts.app')


@section('content')
    <h1>{{$title}}</h1>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item"><a href="/posts">{{$service}}</a></li>
            @endforeach
                <li class="list-group-item"><a href="">Asus Products</a></li>
                <li class="list-group-item"><a href="">Dell Products</a></li>
                <li class="list-group-item"><a href="">Hp Products</a></li>
                <li class="list-group-item"><a href="">Acer Products</a></li>
                <li class="list-group-item"><a href="">Lenevo Products</a></li>
                <li class="list-group-item"><a href="">Lg Products</a></li>
        </ul>

    @endif
    
@endsection
