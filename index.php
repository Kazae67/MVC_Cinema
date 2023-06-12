<?php

use Controller\CinemaController;

/* AUTO LOAD */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$ctrlCinema = new CinemaController();

/* FILTER */
if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
}

/* SWITCH */
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        /* Liste des FILMS */
        case "listFilms":
            $ctrlCinema->listFilms();
            break;
        /* Infos du FILM */
        case "infosFilm":
            $ctrlCinema->infosFilm($id);
            break;
        /* Liste des ACTEURS */
        case "listActeurs":
            $ctrlCinema->listActeurs();
            break;
        /* Infos de l'ACTEUR */
        case "infosActeur":
            $ctrlCinema->infosActeur($id);
            break;
    }
} else {
    $ctrlCinema->listFilms();
}

?>
