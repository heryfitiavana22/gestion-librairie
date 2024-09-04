<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <div class="container-form">
        <?php if (session()->getFlashdata('authError')): ?>
            <div class="alert-danger">
                <?= session()->getFlashdata('authError'); ?>
            </div>
        <?php endif; ?>
        <form action="/login" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="/register">s'inscrire</a>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>