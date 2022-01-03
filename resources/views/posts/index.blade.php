@extends('layouts.app')
@section('content')
    <h1> Posts</h1>
    <div class="card">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="card-body">
                    <h3><a href="/posts/{{ $post->id }}" class="card-link">{{ $post->title }}</a></h3>
                    <small class="card-text">Written on {{ $post->created_at }}</small>
                </div>
            @endforeach
            {{ $posts->links() }}
        @else
            <p>No posts found</p>
        @endif
    </div>
@endsection
