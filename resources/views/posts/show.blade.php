@extends('layouts.app')
@section('content')
    <a class="btn btn-default" href="/posts">Go back</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {{ $post->body }}
    </div>
    <hr>
    <small>written on {{ $post->created_at }}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)

            <a href="/posts/{{ $post->id }}/edit" class="btn btn-default">Edit</a>

            <form action="{{ action('PostsController@destroy', [$post->id]) }}" method="post" class="pull-right">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">delete</button>
            </form>
        @endif
    @endif
@endsection
