<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return 'Bonjour ! Bienvenue dans les coulisses de DevBlog 👋';
});

Route::get('/contact', function () {
    return 'Page de contact de DevBlog.';
});

use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/{id}', [ArticleController::class, 'show']);

use App\Http\Controllers\AuthorController;

Route::get('/auteurs', [AuthorController::class, 'index'])->name('auteurs.index');
Route::get('/auteurs/{id}', [AuthorController::class, 'show'])->name('auteurs.show');