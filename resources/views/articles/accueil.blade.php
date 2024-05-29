<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .card {
      width: 20rem; /* Increase the width of the cards */
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <div class="text-center mb-4">
      <h1>Articles</h1>
      <a href="/ajouter" class="btn btn-primary" style="text-decoration: none;">Ajouter un article</a>
      @if (session('status'))
      <div class="alert alert-success mt-3">
        {{ session('status') }}
      </div>
      @endif
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 justify-content-center">
      @foreach ($articles as $article)
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="{{ $article->image }}" class="card-img-top" alt="image-article">
          <div class="card-body">
            <h5 class="card-title">{{ $article->nom }}</h5>
            <span class="text-muted">{{ $article->date_creation }}</span>
            <div class="mt-3">
              <a href="/mise_à_jour-article/{{ $article->id }}" class="btn btn-primary">Modifier</a>
              <a href="/supprimer/{{ $article->id }}" class="btn btn-danger">Supprimer</a>
              <a href='/information-article/{{ $article->id }}' class="btn btn-success mt-2">Plus d'informations</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
