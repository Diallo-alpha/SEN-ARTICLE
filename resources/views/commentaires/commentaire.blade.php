<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commentaires avec Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <center>
        <h1>Articles</h1>
        <a href="/ajouter" class="btn btn-primary" style="text-decoration: none;">ajouter un article</a>
        @if (session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
        @endif
      </center>
    <div class="container">
        <h1 class="mt-5">les commentaires</h1>
        @foreach ( $commentaires as $commentaire)

        @endforeach
            <div class="mb-3">
                <label for="nom" class="form-label">Nom complet :</label>
                <input type="text" class="form-control" id="nom" name="nom" required value="{{$commentaire->nom_complet_auteur}}">
            </div>
            <div class="mb-3">
                <label for="commentaire" class="form-label">Commentaire :</label>
                <textarea class="form-control" id="commentaire" name="commentaire" rows="4" required>{{$commentaire->contenue}}</textarea>
            </div>
            <a href="{{route('mettre_jour_commentaire', $commentaire->id)}}" class="btn btn-primary">Modifier</a>

    </div>

    <!-- Bootstrap JS (optionnel, si vous avez besoin de fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
