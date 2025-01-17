<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <div class="container-form">
        <h2><a href="/books">Livres</a> <span class="slash">/</span> Modifier</h2>
        <form action="/books/update/<?= $book['id']; ?>" method="post">
            <input type="text" name="title" value="<?= $book['title']; ?>" required>
            <select name="author_id" required>
                <?php foreach ($authors as $author): ?>
                    <option value="<?= $author['id']; ?>" <?= $author['id'] == $book['author_id'] ? 'selected' : ''; ?>>
                        <?= $author['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Mettre à jour</button>
        </form>
    </div>

</body>

</html>