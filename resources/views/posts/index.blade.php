@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Daftar Post</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        Tambah Post
    </a>
</div>

<x-alert />

@if($posts->count())
    @foreach($posts as $post)

       <x-card>

    <h3>{{ $post->title }}</h3>

    <p>{{ $post->content }}</p>

    <a href="{{ route('posts.show', $post->id) }}"
       class="btn btn-info">
        Lihat
    </a>

    <a href="{{ route('posts.edit', $post->id) }}"
       class="btn btn-warning">
        Edit
    </a>

    <form action="{{ route('posts.destroy', $post->id) }}"
          method="POST"
          class="d-inline">

        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-danger"
                onclick="return confirm('Yakin ingin menghapus post ini?')">
            Hapus
        </button>

    </form>

</x-card>

    @endforeach

    {{ $posts->links() }}

@else

    <div class="alert alert-info">
        Belum ada post.
    </div>

@endif

@endsection