<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
    <!-- LOAD UNIQUE -->
    <?= $cssLink ?>
    <!-- CONDITION ÉTOILES -->
    <link rel="stylesheet" href="public/css/film/etoiles.css">
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
                <li><a href="index.php?action=listGenres">Genres</a></li>
                <li><a href="index.php?action=listCastings">Castings</a></li>
                <li class="dropdown">
                    <a href="#">Formulaires</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Ajouter un film</a></li>
                        <li><a href="index.php?action=ajouterActeur">Ajouter un acteur</a></li>
                        <li><a href="index.php?action=ajouterRole">Ajouter un rôle</a></li>
                        <li><a href="#">Ajouter un réalisateur</a></li>
                        <li><a href="index.php?action=ajouterGenre">Ajouter un genre</a></li>
                        <li><a href="#">Ajouter un casting</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div>
            <?php if (isset($liste)): ?>
                <h2 class="list-cards"><?= $liste ?></h2>
            <?php endif; ?>
            <?php if (isset($content)): ?>
                <?= $content ?>
            <?php endif; ?>
        </div>
    </main>

</body>

</html>
