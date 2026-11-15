<?php

namespace App\Http\Controllers;

class AuthorController extends Controller
{
    // Nos fausses données, en attendant la base (Phase 2)
    private function auteurs(): array
    {
        return [
            1 => ['nom' => 'Alex', 'bio' => 'Passionné de Laravel et de café.'],
            2 => ['nom' => 'Sam',  'bio' => 'Adore expliquer le code simplement.'],
            3 => ['nom' => 'Lou',  'bio' => 'Fan de Blade et de jolies interfaces.'],
        ];
    }

    public function index()
    {
        $auteurs = $this->auteurs();
        return view('auteurs.index', compact('auteurs'));
    }

    public function show($id)
    {
        $auteurs = $this->auteurs();
        $auteur = $auteurs[$id] ?? null;

        // Si l'auteur n'existe pas, on renvoie une 404 (page "introuvable")
        if ($auteur === null) {
            abort(404);
        }

        return view('auteurs.show', compact('auteur'));
    }
}
