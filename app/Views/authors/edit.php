<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un auteur</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <div class="container-form">
        <h2><a href="/authors">Auteurs</a> <span class="slash">/</span> Modifier</h2>

        <form action="/authors/update/<?= $author['id']; ?>" method="post">
            <input type="text" name="name" value="<?= $author['name']; ?>" required>
            <button type="submit">Mettre à jour</button>
        </form>
    </div>
</body>

</html>