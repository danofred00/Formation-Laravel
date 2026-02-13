<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Lister tous les posts propre a l utilisateur connecter
     */
    public function index()
    {
        // recuperer les posts propre a lutilisateur connecter

        // retourner la vue avec les posts
        return view('pages.dashboard.posts.index');
    }

    /**
     * Presenter la page de creation de post
     */
    public function create()
    {}

    /**
     * Stocker le post en base de donnees, et
     * rediriger l utilisateur vers la liste des posts
     */
    public function store() {}

    /**
     * Presenter la page de modification de post
     */
    public function edit()
    {}

    /**
     * Mettre a jour un post et notifier l utilisateur
     */
    public function update()
    {}

    /**
     * Supprimer un post et rediriger l utilisateur vers la liste
     * des posts disponible
     */
    public function destroy()
    {

    }
}
