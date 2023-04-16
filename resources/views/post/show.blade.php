@extends('layouts.main')
@section('content')
<div class="mb-3">
    <div>{{$post->id}}.{{$post->title}}</div>
    <div>{{$post->content}}</div>
</div>
<div class="mb-3">
    <a href="{{route('post.edit', $post->id)}}">Edit</a>
</div>
<div class="mb-3">
    <form action="{{route('post.delete', $post->id)}}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>
<div>
    <a href="{{route('post.index')}}">Back</a>
</div>

@endsection