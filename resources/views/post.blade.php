@extends('layout.app')

@section('content')
    <h1>Recent Posts</h1>

    
    @foreach ($posts as $post)
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <i>Post created by {{$post->name}}</i>
    @endforeach
@endsection
