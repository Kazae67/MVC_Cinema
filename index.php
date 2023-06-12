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

/* FILM + DETAILS */
if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "listFilms":
            $ctrlCinema->listFilms();
            break;
        case "infosFilm":
            $ctrlCinema->infosFilm($id);
            break;
        case "listActeurs":
            $ctrlCinema->listActeurs();
            break;
        case "detailsActeur":
            $ctrlCinema->infosActeur($id);
            break;
    }
} else {
    $ctrlCinema->listFilms();
}

?>
