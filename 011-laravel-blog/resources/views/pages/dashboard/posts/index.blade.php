@extends('layouts.dashboard')

@php
    
@endphp

@section('content')
    <h1>Mes Posts</h1>

    <div>
        @if(session('success')) 
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-post-modal">
        Creer un article
    </button>

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
