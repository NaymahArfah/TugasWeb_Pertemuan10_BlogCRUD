@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

    <h2>Daftar Post</h2>

    <a href="{{ route('posts.create') }}">+ Tambah Post</a>

    <hr>

    <x-alert />

    @forelse ($posts as $post)

        <div>
            <h3>{{ $post->title }}</h3>

            <p>{{ $post->body }}</p>

            <a href="{{ route('posts.show', $post) }}">Lihat</a>
            |
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </div>

        <hr>

    @empty

        <p>Belum ada post.</p>

    @endforelse

    {{ $posts->links() }}

@endsection