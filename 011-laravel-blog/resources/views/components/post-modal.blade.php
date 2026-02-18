@php
    $isCreate = $isCreate ?? true;
    $postModalLabelId = $isCreate ? "createPostModalLabel" : "showPostModalLabel"
@endphp

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $postModalLabelId }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="{{ $postModalLabelId }}">
                {{$modalTitle ?? "Creer un article"}}
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            @if (!$isCreate && $post->image)
                <img src="{{ '/storage/' . $post->image }}" alt="Image du post: {{ $post->title }}" style="width: 100px; height: 100px;"/>
            @endif

            <form id="{{ $formId }}" method="POST" action="{{ $actionUrl }}" enctype="{{ $encType }}">
                @csrf
                @method($isCreate ? "POST" : "PUT")
                <div class="mb-3">
                    <label for="post-title" class="col-form-label">Titre de l'article:</label>
                    <input type="text" class="form-control" name="title" id="post-title" value="{{ $post->title ?? '' }}" required>
                </div>
                <div class="mb-3">
                    <label for="post-content" class="col-form-label">Contenu de l'article:</label>
                    <textarea class="form-control" name="content" id="post-content" required>{{ $post->content ?? '' }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image de l'article:</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" form="create-post-form" class="btn btn-primary" form="{{ $formId }}">{{ $isCreate ? "Creer l'article" : "Enregistrer" }}</button>
        </div>
        </div>
    </div>
</div>