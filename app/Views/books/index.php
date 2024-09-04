<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <section>
        <h2><a href="/">Acceuil</a> <span class="slash">/</span> Livres</h2>
        <div class="btn-add">
            <a href="/books/create">Ajouter un livre</a>
        </div>

        <ul>
            <?php foreach ($books as $book): ?>
                <li class="list-row">
                    <div>
                        <strong><?= $book['title']; ?></strong> by <?= $book['author_name']; ?>
                        <?php if ($book['loan_id'] == null): ?>
                            <span style="color: green;">(dispo) </span>
                        <?php else: ?>
                            <span style="color: red;">(emprunté)</span>
                        <?php endif; ?>
                    </div>
                    <a href="/books/edit/<?= $book['id']; ?>" class="edit">Modifier</a>
                    <a href="/books/delete/<?= $book['id']; ?>" class="delete">Supprimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>

</html>