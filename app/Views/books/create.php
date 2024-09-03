<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un livre</title>
</head>
<body>
    <h2>Ajouter un livre</h2>

    <form action="/books/store" method="post">
        <input type="text" name="title" placeholder="titre" required>
        <select name="author_id" required>
            <?php foreach($authors as $author): ?>
                <option value="<?= $author['id']; ?>"><?= $author['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Créer</button>
    </form>

</body>
</html>