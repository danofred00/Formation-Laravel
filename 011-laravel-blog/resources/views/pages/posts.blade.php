@extends('layouts.landing')

@section('title') Posts | Laravel Blog @endsection

@section('content')
    <h1>Liste de tous les posts</h1>
    <p>Nombre d'articles disponible: {{ count($posts) }}</p>

    <div class="posts-list">
        @if(count($posts) == 0)
            <p>Aucun article disponible pour le moment.</p>
        @endif

        @foreach($posts as $post)
            <div class="post">
                <h3>#{{ $post->id }} - {{ $post->title  }}</h3>
                <p>{{ $post->content }}</p>
                <p>Creer le : {{ date_format($post->created_at->toDate(), "D, d M Y H:i:s") }}</p>
            </div>
        @endforeach
    </div>
@endsection
