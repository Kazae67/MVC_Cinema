<?php

use Controller\FilmsController;
use Controller\ActeursController;
use Controller\RolesController;

/* AUTO LOAD */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$FilmsController = new FilmsController();
$ActeursController = new ActeursController();
$RolesController = new RolesController();

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
        case "listRoles":
            $RolesController->listRoles();
            break;
        case "infosRole":
            $RolesController->infosRole($id);
            break;
    }
} else {
    $FilmsController->listFilms();
}

?>
