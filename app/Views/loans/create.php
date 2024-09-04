<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un emprunt</title>
</head>

<body>
    <h2>Ajouter un emprunt</h2>
    <?php if (session()->getFlashdata('existingLoan')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('existingLoan'); ?>
        </div>
    <?php endif; ?>
    <form action="/loans/store" method="post">
        <input type="text" name="user_name" placeholder="nom d'utilisateur" required>
        <select name="book_id" required>
            <?php foreach ($books as $book): ?>
                <option value="<?= $book['id']; ?>"><?= $book['title']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="date" name="loan_date" required>
        <input type="date" name="return_date" required>
        <button type="submit">Créer</button>
    </form>
</body>

</html>