@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')

    <h2>Tambah Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">

        @error('title')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <label>Isi:</label><br>
        <textarea name="body" rows="5">{{ old('body') }}</textarea>

        @error('body')
            <p>{{ $message }}</p>
        @enderror

        <br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('posts.index') }}">Kembali</a>

    </form>

@endsection