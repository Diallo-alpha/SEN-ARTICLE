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
    <div class="container">
        <h1 class="mt-5">Laissez un commentaire</h1>
        <form action="traitement_commentaire.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom complet :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="commentaire" class="form-label">Commentaire :</label>
                <textarea class="form-control" id="commentaire" name="commentaire" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>

    <!-- Bootstrap JS (optionnel, si vous avez besoin de fonctionnalités JavaScript de Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
