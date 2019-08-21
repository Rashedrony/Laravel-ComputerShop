@extends('layouts.app')


@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <h3> Online Computer Shop </h3>
        <p>You can buy computer and accessoris with very Low price</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register">Add Admin</a></p>
    </div>
@endsection

