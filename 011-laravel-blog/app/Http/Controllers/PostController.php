<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Lister tous les posts propre a l utilisateur connecter
     */
    public function index()
    {
        // recuperer l utilisateur connectee
        $user = Auth::user();

        // recuperer les posts propre a l'utilisateur connecter
        $posts = Post::where('user_id', '=', $user->id)->get();

        // retourner la vue avec les posts
        return view('pages.dashboard.posts.index', [
            'posts' => $posts
        ]);
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
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'required|image'
        ]);

        $user = $request->user();

        // stocker l'image sur le server
        $image = $request->file('image');
        $path = $image->store('posts/images', 'public');

        // creer le post en base de donnees en ajoutant le champ image
        $post = new Post([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'user_id' => $user->id,
            'image' => $path
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
    public function destroy(Post $post)
    {
        // supprimer le post de la base de donnees
        // DELETE from `posts` WHERE `id` = 'post_id';
        $post->delete();

        return back()->with('success', 'Post supprimer avec succes!');
    }
}
