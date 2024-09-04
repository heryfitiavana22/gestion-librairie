<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter auteur</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <div class="container-form">
        <h2><a href="/authors">Auteurs</a> <span class="slash">/</span> Ajouter</h2>

        <form action="/authors/store" method="post">
            <input type="text" name="name" placeholder="nom" required>
            <button type="submit">Créer</button>
        </form>
    </div>

</body>

</html>