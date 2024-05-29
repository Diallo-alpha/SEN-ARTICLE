<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commentaire</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
        <h1>Commentaires</h1>
        @if (session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
      </center>
      <div class="container">
        <h1 class="mt-5">les commentaires</h1>

        @foreach ($commentaires as $commentaire)
            <div class="mb-4">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom complet :</label>
                    <input type="text" class="form-control" id="nom_complet_auteur" name="nom_complet_auteur" required value="{{ $commentaire->nom_complet_auteur }}">
                </div>
                <div class="mb-3">
                    <label for="commentaire" class="form-label">Commentaire :</label>
                    <textarea class="form-control" id="contenue" name="contenue" rows="4" required>{{ $commentaire->contenue }}</textarea>
                </div>
               <span>{{$commentaire->date_heure_commentaire}}</span>
               <br>
               <br>
                <a href="{{ route('mettre_jour_commentaire', $commentaire->id) }}" class="btn btn-primary">Modifier</a>
                <a href="{{ route('supprimer_commentaire', $commentaire->id) }}" class="btn btn-primary">Supprimer</a>
            </div>
        @endforeach
    </div>

    </div>


    <!-- Bootstrap JS (optionnel, si vous avez besoin de fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
