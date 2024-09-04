<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteurs</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <section>
        <h2><a href="/">Acceuil</a> <span class="slash">/</span> Auteurs</h2>
        <div class="btn-add">
            <a href="/authors/create">Ajouter un auteur</a>
        </div>
        <ul>
            <?php foreach ($authors as $author): ?>
                <li class="list-row">
                    <?= $author['name']; ?>
                    <a href="/authors/edit/<?= $author['id']; ?>" class="edit">Modifier</a>
                    <a href="/authors/delete/<?= $author['id']; ?>" class="delete">Suprrimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>

</html>