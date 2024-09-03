<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter auteur</title>
</head>
<body>
    <h2>Ajouter un auteur</h2>

    <form action="/authors/store" method="post">
        <input type="text" name="name" placeholder="nom" required>
        <button type="submit">Créer</button>
    </form>

</body>
</html>