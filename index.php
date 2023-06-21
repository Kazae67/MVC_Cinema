<?php
// Importation des différents contrôleurs
use Controller\FilmsController;
use Controller\ActeursController;
use Controller\RolesController;
use Controller\RealisateursController;
use Controller\GenresController;
use Controller\CastingsController;
use Controller\FormulairesController;

/* AUTO LOAD */
// Enregistrement de la fonction d'auto-chargement de classe
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

/* CONTROLLERS */
// Instanciation des différents contrôleurs
$FilmsController = new FilmsController();
$ActeursController = new ActeursController();
$RolesController = new RolesController();
$RealisateursController = new RealisateursController();
$GenresController = new GenresController();
$CastingsController = new CastingsController();
$FormulairesController = new FormulairesController();

/* FILTER */
// Vérification et filtrage du paramètre "id"
if (isset($_GET["id"])) {
    $id = filter_var($_GET["id"], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
}

/* SWITCH */
// Vérification et exécution des actions basées sur le paramètre "action"
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
        /* Liste des ROLES */
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
        /* Liste des CASTINGS */
        case "listCastings":
            $CastingsController->listCastings();
            break;
        /* Ajouter un ACTEUR */
        case "ajouterActeur":
            $FormulairesController->ajouterActeur();
            break;
        /* Ajouter un ROLE */
        case "ajouterRole":
            $FormulairesController->ajouterRole();
            break;
        /* Ajouter un GENRE */
        case "ajouterGenre":
            $FormulairesController->ajouterGenre();
            break;
        /* Ajouter un REALISATEUR */
        case "ajouterRealisateur":
            $FormulairesController->ajouterRealisateur();
            break;
        /* Ajouter un FILM */
        case "ajouterFilm":
            $FormulairesController->ajouterFilm();
            break;
        /* Ajouter un CASTING */
        case "ajouterCasting":
            $FormulairesController->ajouterCasting();
            break;
    }
} else {
    // Si aucune action n'est spécifiée, affiche la liste des films par défaut
    $FilmsController->listFilms();
}

?>
