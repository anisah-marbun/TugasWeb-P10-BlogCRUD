@extends('layouts.master')

@section('content')

<h1 class="mb-4">Edit Post</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>

        <input type="text"
               name="title"
               id="title"
               class="form-control @error('title') is-invalid @enderror"
               value="{{ old('title', $post->title) }}">

        @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Isi Post</label>

        <textarea name="content"
                  id="content"
                  rows="6"
                  class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>

        @error('content')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection