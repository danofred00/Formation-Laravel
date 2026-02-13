<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
    public function store(Request $request) {
        // valider les donnees du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $user = $request->user();

        // creer le post en base de donnees
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'user_id' => $user->id,
        ]);
        $post->save();

        // rediriger l utilisateur vers la liste des posts
        return back()->with('success', 'Post creer avec succes!');
    }

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
