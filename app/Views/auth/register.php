<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    <div class="container-form">
        <?php if (session()->getFlashdata('usernameTaken')): ?>
            <div class="alert-danger">
                <?= session()->getFlashdata('usernameTaken'); ?>
            </div>
        <?php endif; ?>
        <form action="/register" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>