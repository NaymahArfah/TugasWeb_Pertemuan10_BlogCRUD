<div>
    <h3>{{ $post->title }}</h3>

    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.show', $post) }}">Lihat</a>
    |
    <a href="{{ route('posts.edit', $post) }}">Edit</a>
</div>

<hr>