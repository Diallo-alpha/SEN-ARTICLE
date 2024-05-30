<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter une article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <center>
    <h1>Ecrire un articles</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <ul>
    @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
    @endforeach
    </ul>
    </center>
    <form action="/ajouter/traitement" method="POST" style="margin: auto;">
        @csrf
        {{-- ajouter la route traitement after --}}
    <div class="mb-3">
        <label for="nom_article" class="form-label">Nom de l'article</label>
        <input type="text" class="form-control" id="nom_article" placeholder="apprendre en ligne" name="nom" style="width: 50%;">
      </div>
      <div>
        <label for="image" class="form-label">Ajouter une image</label>
        <input class="form-control form-control-ls" id="image" type="text" name="image" style="width: 50%;">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="date_creation">Date de création :</label>
        <input type="date" class="form-control" id="date_création" name="date_creation" value="{{ date('Y-m-d') }}">
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="a_la_une" id="a_la_une_oui" value="1">
        <label class="form-check-label" for="a_la_une_oui">
            OUI
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="a_la_une" id="a_la_une_non" value="0" checked>
        <label class="form-check-label" for="a_la_une_non">
            Non
        </label>
    </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Ajouter</button>
      </div>
      <a href="/" class="btn btn-danger">Revenire a la Liste des articles</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
