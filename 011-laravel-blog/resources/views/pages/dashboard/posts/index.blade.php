@extends('layouts.dashboard')

@php
    
@endphp

@section('content')
    <div class="d-flex flex-row justify-content-between align-items-center mb-3">
        <h1>Mes Articles ({{ count($posts) }})</h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-post-modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
            Creer un article
        </button>
    </div>

    <div>
        @if(session('success')) 
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Afficher les posts  -->
    <div>
        @if(count($posts) === 0)
            <p class="text-center text-muted">Vous n'avez pas encore d'articles.</p>
        @endif

        <!-- On boucle sur chaque article -->
        <div class="d-flex flex-row gap-3 flex-wrap">
            @foreach ($posts as $post)
                <!-- Affichage d'un article -->
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->content }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary" href="#">Voir</a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $post->id }}">
                            Supprimer
                        </button>
                    

                        <!-- Modal de suppression -->
                        <div class="modal fade" id="delete-modal-{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Voulez-vous vraiment supprimer l'article "{{ $post->title }}" ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    
                                    <form action="/dashboard/posts/{{ $post->id }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>

                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-post-modal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPostModalLabel">Creer un article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="create-post-form" method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="col-form-label">Titre de l'article:</label>
                        <input type="text" class="form-control" name="title" id="post-title" required>
                    </div>
                    <div class="mb-3">
                        <label for="post-content" class="col-form-label">Contenu de l'article:</label>
                        <textarea class="form-control" name="content" id="post-content" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" form="create-post-form" class="btn btn-primary">Sauvegarder</button>
            </div>
            </div>
        </div>
    </div>

@endsection
