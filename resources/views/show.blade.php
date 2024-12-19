@extends('layout')

@section('title', $post->title)

@section('content')
    <div class="card">
        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Post Image">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="/" class="btn btn-warning">Back to Home</a>
        </div>
    </div>
@endsection
