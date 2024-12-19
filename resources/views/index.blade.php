
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@extends('layout')

@section('title', 'Home')

@section('content')
    <h1 class="text-center mb-4">Bukti Jackpot Lunas</h1>
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    {{-- <img src="{{ $post->image }}" class="card-img-top" alt="Post Image"> --}}
                    {{-- <p>Debug URL: {{ asset('storage/' . $post->image) }}</p> --}}
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="Post Image">
                    {{-- <p>{{ asset('storage/' . $post->image) }}</p> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-warning">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
