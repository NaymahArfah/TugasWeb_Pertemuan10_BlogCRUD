@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post) }}" method="POST">

        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">

        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Isi:</label><br>
        <textarea name="body" rows="5">{{ old('body', $post->body) }}</textarea>

        @error('body')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Update</button>
        <a href="{{ route('posts.show', $post) }}">Batal</a>

    </form>

@endsection