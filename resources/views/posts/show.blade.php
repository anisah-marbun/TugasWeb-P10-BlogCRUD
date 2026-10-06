@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-body">

    <h1>{{ $post->title }}</h1>

    <hr>

    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
        Kembali
    </a>

    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">
        Edit
    </a>

    </div>
</div>

@endsection


    