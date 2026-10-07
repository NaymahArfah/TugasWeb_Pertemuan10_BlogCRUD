@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')

    <x-alert />

    <h2>{{ $post->title }}</h2>

    <p>{{ $post->body }}</p>

    <hr>

    <a href="{{ route('posts.index') }}">Kembali</a>
    |
    <a href="{{ route('posts.edit', $post) }}">Edit</a>

    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')

        <button type="submit">Hapus</button>
    </form>

@endsection