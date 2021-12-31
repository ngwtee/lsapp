@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-secondary rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold"> {{$title}}</h1>
        <p>This is the laravel series</p>
        <p><a class="btn btn-primary btn-lg " type="button" href="/login" role="button"> Login </a><a class="btn btn-success btn-lg" href="/register"role="button"> Regiser </a></p>
    </div>
</div>

@endsection
