<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
    <!-- CSSLINK (génère dynamiquement le lien vers une page de style spécifique) -->
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
            <!-- LOGO  -->
            <h2 class="logo"><a href="index.php?action=listFilms">Cinema</a></h2>
            <ul class="menu">
                <li><a href="index.php?action=listFilms">Films</a></li>
                <li><a href="index.php?action=listActeurs">Acteurs</a></li>
                <li><a href="index.php?action=listRoles">Rôles</a></li>
                <li><a href="index.php?action=listRealisateurs">Réalisateurs</a></li>
                <li><a href="index.php?action=listGenres">Genres</a></li>
                <li><a href="index.php?action=listCastings">Castings</a></li>
                <!-- Dropdown -->
                <li class="dropdown">
                    <a href="#">Formulaires</a>
                    <!-- (menu déroulant) -->
                    <ul class="dropdown-menu">
                        <li><a href="index.php?action=ajouterFilm">Ajouter un film</a></li>
                        <li><a href="index.php?action=ajouterActeur">Ajouter un acteur</a></li>
                        <li><a href="index.php?action=ajouterRole">Ajouter un rôle</a></li>
                        <li><a href="index.php?action=ajouterRealisateur">Ajouter un réalisateur</a></li>
                        <li><a href="index.php?action=ajouterGenre">Ajouter un genre</a></li>
                        <li><a href="index.php?action=ajouterCasting">Ajouter un casting</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div>
            <!-- Vérifie si la variable $liste existe. Si c'est le cas, un titre de liste est affiché -->
            <?php if (isset($liste)): ?>
                <h2 class="list-cards"><?= $liste ?></h2>
            <?php endif; ?>
            <!-- Vérifie si la variable $content est définie. Si c'est le cas, le contenu dynamique est inséré -->
            <?php if (isset($content)): ?>
                <?= $content ?>
            <?php endif; ?>
        </div>
    </main>

</body>

</html>
