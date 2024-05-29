<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function commentaires()
        {
            $commentaires = Commentaire::all();
            return view('commentaires.commentaire', compact('commentaires'));
        }

    public function ajouter_commentaire($article_id)
        {
            return view('commentaires.ajouter_commentaire', compact('article_id'));
        }

        public function traitement_ajouter_commentaire(Request $request, $article_id)
        {
            $request->validate([
                'contenue'=> 'required',
                'nom_complet_auteur' => 'required',
                
            ]);

            $commentaire = new Commentaire();
            $commentaire->contenue = $request->contenue;
            $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
            $commentaire->date_heure_commentaire = $request->input('date_heure_commentaire', now());
            $commentaire->article_id = $article_id;
            $commentaire->save();

            return redirect('/')->with('status', 'Commentaire ajouté avec succès');
        }

        //à jour
    public function mettre_à_jour_commentaire($id)
        {
            $commentaires = Commentaire::find($id);
            return view('commentaires.mise_à_jour_commentaire', compact('commentaires'));
        }

    public function mise_à_jour_commentaires(Request $request)
        {
            $request->validate([
                'contenue'=> 'required',
                'nom_complet_auteur' => 'required',
            ]);
            $commentaire = Commentaire::find($request->id);
            $commentaire->contenue = $request->contenue;
            $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
            $commentaire->date_heure_commentaire = $request->input('date_heure_commentaire', now());
            $commentaire->update();
            return redirect('/')->with('status', 'commentaire à été mise à jour avec succees');
        }

        //supprimer un commentaire

    public function supprimer_commentaire($id)
        {
            $commentaire = Commentaire::find($id);
            $commentaire->delete();
            return redirect('/')->with('status', 'commentaire à été supprimer avec succees');

        }
}
