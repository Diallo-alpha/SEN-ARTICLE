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
Route::get('/commentaires/ajouter/{article_id}', [CommentaireController::class, 'ajouter_commentaire'])->name('commentaires.ajouter_commentaire');
Route::post('/ajouter/traitement_commentaire/{article_id}', [CommentaireController::class, 'traitement_ajouter_commentaire'])->name('traitement_commentaire');
Route::get('/mise_à_jour_commentaire/{id}', [CommentaireController::class, 'mettre_à_jour_commentaire'])->name('mettre_jour_commentaire');
Route::post('/mise_à_jour_commentaire', [CommentaireController::class, 'mise_à_jour_commentaires'])->name('mise_à_jour_commentaire');
Route::get('/supprimer_commentaire/{id}', [CommentaireController::class, 'supprimer_commentaire'])->name('supprimer_commentaire');
