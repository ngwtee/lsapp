@extends('layouts.app')
@section('content')
    <a class="btn btn-default" href="/posts">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>written on {{$post->created_at}}</small>
@endsection