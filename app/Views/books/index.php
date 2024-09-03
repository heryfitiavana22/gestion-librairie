<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
</head>

<body>
    <h2>Livres</h2>
    <a href="/books/create">Ajouter un livre</a>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <strong><?= $book['title']; ?></strong> by <?= $book['author_name']; ?>
                <?php if ($book['loan_id']): ?>
                    <span style="color: red;">(dispo)</span>
                <?php else: ?>
                    <span style="color: green;">(emprunté)</span>
                <?php endif; ?>
                <a href="/books/edit/<?= $book['id']; ?>">Modifier</a>
                <a href="/books/delete/<?= $book['id']; ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>