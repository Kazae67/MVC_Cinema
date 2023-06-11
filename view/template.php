<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <title>Cinema</title>
</head>

<body>
    <main>
        <nav>
            <h2 class="logo"><a href="index.php?action=listFilms">Cinema</a></h2>
            <ul class="menu">
                <li><a href="index.php?action=listFilms">Films</a></li>
                <li><a href="index.php?action=listGenres">Genre</a></li>
                <li><a href="index.php?action=listActeurs">Acteurs</a></li>
                <li><a href="index.php?action=listRoles">Rôles</a></li>
                <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
                <li><a href="index.php?action=listCastings">Castings</a></li>
            </ul>
        </nav>
        <div>
            <?php if (isset($liste)): ?>
                <h2 class="list-film"><?= $liste ?></h2>
            <?php endif; ?>
            <?php if (isset($content)): ?>
                <?= $content ?>
            <?php endif; ?>
        </div>
    </main>
</body>

</html>
