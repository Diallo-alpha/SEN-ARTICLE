<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Détailles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .card-img-top {
        max-height: 600px; /* Adjust the max-height as needed */
        object-fit: center;
      }
    </style>
  </head>
  <body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <img src="{{$article->image}}" class="card-img-top" alt="Image de l'article">
            <div class="card-body">
                <h5 class="card-title">{{ $article->nom }}</h5>
                <p class="card-text">{{ $article->description }}</p>
                <span class="text-muted">{{ $article->date_création }}</span>

            </div>
        </div>
        <a href="{{ route('commentaires.ajouter_commentaire', ['article_id' => $article->id]) }}" class="btn btn-info mt-2">Ajouter un commentaire</a>
    </div>
    <div class="container">
        <h1 class="mt-5">Commentaires</h1>
            <br>
            <hr>
        @foreach ($commentaires as $commentaire)
            <div class="mb-4">
                <div class="mb-3">

                  <h3>Nom complet: {{ $commentaire->nom_complet_auteur }}</h3>
                </div>
                <div class="mb-3">
                    <label for="commentaire" class="form-label"><strong>Commentaire </strong>:</label>
                        <p>{{ $commentaire->contenue }}</p>
                </div>
               <span>{{$commentaire->date_heure_commentaire}}</span>
               <br>
               <br>
                <a href="{{ route('mettre_jour_commentaire', $commentaire->id) }}" class="btn btn-primary">Modifier</a>
                <a href="{{ route('supprimer_commentaire', $commentaire->id) }}" class="btn btn-primary">Supprimer</a>
            </div>
        @endforeach
        <div class="mt-3">
            <a href="/" class="btn btn-danger">Retour à la page d'accueil</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
