<?php

use Controller\FilmsController;
use Controller\ActeursController;
use Controller\RolesController;
use Controller\RealisateursController;
use Controller\GenresController;
use Controller\CastingsController;
use Controller\FormulairesController;

/* AUTO LOAD */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$FilmsController = new FilmsController();
$ActeursController = new ActeursController();
$RolesController = new RolesController();
$RealisateursController = new RealisateursController();
$GenresController = new GenresController();
$CastingsController = new CastingsController();
$FormulairesController = new FormulairesController();

/* FILTER */
if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
}

/* SWITCH */
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        /* Liste des FILMS */
        case "listFilms":
            $FilmsController->listFilms();
            break;
        /* Infos du FILM */
        case "infosFilm":
            $FilmsController->infosFilm($id);
            break;
        /* Liste des ACTEURS */
        case "listActeurs":
            $ActeursController->listActeurs();
            break;
        /* Infos de l'ACTEUR */
        case "infosActeur":
            $ActeursController->infosActeur($id);
            break;
        /* Liste des ROLE */
        case "listRoles":
            $RolesController->listRoles();
            break;
        /* Infos du ROLE */
        case "infosRole":
            $RolesController->infosRole($id);
            break;
        /* Liste des REALISATEURS */
        case "listRealisateurs":
            $RealisateursController->listRealisateurs();
            break;
        /* Infos du REALISATEUR */
        case "infosRealisateur":
            $RealisateursController->infosRealisateur($id);
            break;
        /* Liste des GENRES */
        case "listGenres":
            $GenresController->listGenres();
            break;
        /* Infos du GENRE */
        case "infosGenre":
            $GenresController->infosGenre($id);
            break;
        /* Liste CASTINGS */
        case "listCastings":
            $CastingsController->listCastings();
            break;
        /* Ajouter ACTEUR */
        case "ajouterActeur":
            $FormulairesController->ajouterActeur();
            break;
        /* Ajouter ROLE */
        case "ajouterRole":
            $FormulairesController->ajouterRole();
            break;
        /* Ajouter GENRE */
        case "ajouterGenre":
            $FormulairesController->ajouterGenre();
            break;
        /* Ajouter REALISATEUR */
        case "ajouterRealisateur":
            $FormulairesController->ajouterRealisateur();
            break;
        /* Ajouter FILM */
        case "ajouterFilm":
            $FormulairesController->ajouterFilm();
            break;
    }
} else {
    $FilmsController->listFilms();
}

?>
