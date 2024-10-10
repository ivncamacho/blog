<x-layout meta-title="Blog" meta-description="Descripcion de la pagina del blog">
    <h1>Blog</h1>
    @foreach($posts as $post)
        <a href="{{ route('posts.create') }}">Create a new Post</a>

    @endforeach
</x-layout>

