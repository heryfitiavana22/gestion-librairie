<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un emprunt</title>
</head>
<body>
    <h2>Modifier un emprunt</h2>
    <form action="/loans/update/<?= $loan['id']; ?>" method="post">
    <input type="text" name="user_name" value="<?= $loan['user_name']; ?>" required>
        <select name="book_id" required>
            <?php foreach($books as $book): ?>
                <option value="<?= $book['id']; ?>" <?= $book['id'] == $loan['book_id'] ? 'selected' : ''; ?>>
                    <?= $book['title']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="date" name="loan_date" value="<?= $loan['loan_date']; ?>" required>
        <input type="date" name="return_date" value="<?= $loan['return_date']; ?>" required>
        <button type="submit">Mettre à jour</button>
    </form>
</body>
</html>