<x-layout meta-title="Blog" meta-description="Descripcion de la pagina del blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>

    @endforeach
</x-layout>

