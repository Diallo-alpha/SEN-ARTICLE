<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
class ArticleController extends Controller
{
    public function affiche_article()
    {
        $articles = Article::all();
        return view('articles.accueil', compact('articles'));
    }

public function ajouter_articles()
    {
        return view('articles.ajouter');
    }

public function ajouter_une_article(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required',
            'a_la_une' => 'required|boolean',

        ]);
        // instance de l'article
        $article = new Article();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->image = $request->image;
        $article->date_creation = $request->input('date_creation', now());
        $article->a_la_une = $request->a_la_une;
        // Enregistrer dans la base de donnée
        $article->save();
        return redirect('/')->with('status', 'l\'article a bien été ajouter');
    }

    public function mise_à_jour_article($id)
        {
            $articles = Article::find($id);
            return view('articles.update', compact('articles'));
        }
    public function mise_à_jour_articles(Request $request)
            {
                $request->validate([
                    'nom' => 'required',
                    'description' => 'required',
                    'image' => 'required',
                    'a_la_une' => 'required|boolean',

                ]);

                $article = Article::find($request->id);
                $article->nom = $request->nom;
                $article->description = $request->description;
                $article->image = $request->image;
                $article->date_creation = $request->input('date_creation', now());
                $article->a_la_une = $request->a_la_une;
                // Update dans la base de donnée
                $article->update();
                return redirect('/')->with('status', 'l\'article a bien été modifier');
            }

    public function voir_plus($id)
            {
                $article = Article::find($id);
                return view('articles.information', compact('article'));
            }

    public function supprimer ($id)
            {
                $article  = Article::find($id);
                $article->delete();
                return redirect('/')->with('status', 'l\'article a bien été supprimer');
            }
}
