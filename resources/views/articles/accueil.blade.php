<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <center>
    <h1>Articles</h1>
    <a href="/ajouter" class="btn btn-primary" style="text-decoration: none;">Ajouter un article</a>
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif
  </center>
  <div class="container d-flex flex-wrap justify-content-center">
    @foreach ($articles as $article)
    <div class="card m-2" style="width: 18rem;">
      <img src="{{ $article->image }}" class="card-img-top" alt="image-article" style="height: 200px; object-fit: cover;">
      <div class="card-body">
        <h5 class="card-title">{{ $article->nom }}</h5>
        <span>{{ $article->date_creation }}</span>
        <br>
        <a href="/mise_à_jour-article/{{ $article->id }}" class="btn btn-primary mt-2">Modifier</a>
        <a href="/supprimer/{{ $article->id }}" class="btn btn-danger mt-2">Supprimer</a>
        <a href='/information-article/{{ $article->id }}' class="btn btn-success mt-3">Plus d'informations</a>
        <a href="{{ route('commentaires.ajouter_commentaire', ['article_id' => $article->id]) }}" class="btn btn-info mt-2">Ajouter un commentaire</a>
      </div>
    </div>
    @endforeach
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
