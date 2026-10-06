@extends('layouts.master')

@section('content')

<h1 class="mb-4">Tambah Post</h1>

<form action="{{ route('posts.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>

        <input type="text"
               name="title"
               id="title"
               class="form-control @error('title') is-invalid @enderror"
               value="{{ old('title') }}">

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
              class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>

    @error('content')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">
    simpan 
</button>

<a href="{{ route('posts.index') }}" class="btn btn-secondary">
    kembali
</a>

</form>

@endsection