<?php

namespace App\Http\Controllers;

use App\Models\Article; // on importe notre modèle

class ArticleController extends Controller
{
    public function index()
    {
        // Avant : un tableau écrit à la main.
        // Maintenant : les vrais articles, venus de la base !
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
{
    $article = Article::findOrFail($id);

    return view('articles.show', compact('article'));
}
}