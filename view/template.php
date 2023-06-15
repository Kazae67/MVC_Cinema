<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
    <!-- FILMS -->
    <link rel="stylesheet" href="public/css/film/infosFilm.css">
    <link rel="stylesheet" href="public/css/film/etoiles.css">
    <link rel="stylesheet" href="public/css/film/listFilms.css">
    <!-- ACTEURS -->
    <link rel="stylesheet" href="public/css/acteur/listActeurs.css">
    <link rel="stylesheet" href="public/css/acteur/infosActeur.css">
    <!-- ROLES -->
    <link rel="stylesheet" href="public/css/role/listRoles.css">
    <link rel="stylesheet" href="public/css/role/infoRole.css">
    <!-- REALISATEURS -->
    <link rel="stylesheet" href="public/css/realisateur/listRealisateurs.css">
    <link rel="stylesheet" href="public/css/realisateur/infosRealisateur.css">
    <!-- GENRES -->
    <link rel="stylesheet" href="public/css/genre/listGenres.css">
    <link rel="stylesheet" href="public/css/genre/infosGenre.css">
    <!-- NAVBAR -->
    <link rel="stylesheet" href="public/css/navbar.css">
    <!-- STANDARD -->
    <link rel="stylesheet" href="public/css/standard.css">

    <title>Cinema</title>
</head>

<body>
    <!-- NAVBAR -->
    <main>
        <nav>
            <h2 class="logo"><a href="index.php?action=listFilms">Cinema</a></h2>
            <ul class="menu">
                <li><a href="index.php?action=listFilms">Films</a></li>
                <li><a href="index.php?action=listActeurs">Acteurs</a></li>
                <li><a href="index.php?action=listRoles">Rôles</a></li>
                <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
                <li><a href="index.php?action=listGenres">Genre</a></li>
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
