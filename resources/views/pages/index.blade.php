@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    
    <div class="jumbotron text-center">
        <h1 class="display-4">{{$title}}</h1>
        <p>This is the laravel application from Brad Traversy's "Laravel From Scratch" Youtube series</p>
    
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
      </div>
@endsection
