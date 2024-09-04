<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprunts</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <section>
        <h2><a href="/">Acceuil</a> <span class="slash">/</span> Livres</h2>
        <div class="btn-add">
            <a href="/loans/create">Ajouter un emprunt</a>
        </div>
        <ul>
            <?php foreach ($loans as $loan): ?>
                <li class="list-row">
                    <div>
                        <strong><?= $loan['user_name']; ?></strong> a emprunté "<strong><?= $loan['book_title']; ?></strong>" le <?= $loan['loan_date']; ?>
                    </div>
                    <a href="/loans/edit/<?= $loan['id']; ?>" class="edit">Modifier</a>
                    <a href="/loans/delete/<?= $loan['id']; ?>" class="delete">Supprimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

</body>

</html>