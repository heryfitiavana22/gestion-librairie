<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprunts</title>
</head>
<body>
    <h2>Emprunts</h2>
    <a href="/loans/create">Ajouter un emprunt</a>

    <ul>
        <?php foreach($loans as $loan): ?>
            <li>
                <?= $loan['user_name']; ?> a emprunté "<?= $loan['book_title']; ?>" le <?= $loan['loan_date']; ?>
                <a href="/loans/edit/<?= $loan['id']; ?>">Modifier</a>
                <a href="/loans/delete/<?= $loan['id']; ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>