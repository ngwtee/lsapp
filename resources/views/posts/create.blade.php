@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
    <form action="p" method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" id="" placeholder="Title" name="title">
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control" id="" rows="5" placeholder="Body" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection