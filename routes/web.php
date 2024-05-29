<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'affiche_article']);
Route::get('/ajouter', [ArticleController::class, 'ajouter_articles']);
Route::post('/ajouter/traitement', [ArticleController::class, 'ajouter_une_article']);
Route::get('/mise_à_jour-article/{id}', [ArticleController::class, 'mise_à_jour_article']);
Route::post('/mise_à_jour/traitement', [ArticleController::class, 'mise_à_jour_articles']);
Route::get('/information-article/{id}', [ArticleController::class, 'voir_plus']);
Route::get('/supprimer/{id}', [ArticleController::class, 'supprimer']);
//route pour commentaires

Route::get('/commentaire',[CommentaireController::class, 'commentaires']);
Route::get('/ajouter_commentaire/{id}', [CommentaireController::class, 'ajouter_commentaire'])->name('ajouter_commentaire');
Route::post('/ajouter/traitement_commentaire', [CommentaireController::class, 'traitement_ajouter_commentaire'])->name('traitement_commentaire');
