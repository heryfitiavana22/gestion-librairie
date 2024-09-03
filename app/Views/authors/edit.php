<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un auteur</title>
</head>
<body>
    <h2>Modifier un auteur</h2>

    <form action="/authors/update/<?= $author['id']; ?>" method="post">
        <input type="text" name="name" value="<?= $author['name']; ?>" required>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>