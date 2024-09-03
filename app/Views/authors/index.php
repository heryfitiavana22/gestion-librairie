<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auteurs</title>
</head>
<body>
    <h2>Authors</h2>
    <a href="/authors/create">Add New Author</a>

    <ul>
        <?php foreach($authors as $author): ?>
            <li>
                <?= $author['name']; ?>
                <a href="/authors/edit/<?= $author['id']; ?>">Edit</a>
                <a href="/authors/delete/<?= $author['id']; ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>