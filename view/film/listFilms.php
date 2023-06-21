<!-- temporisation de sortie -->
<?php
ob_start();
// Chemin des images des films
$imagePath = 'public/images/imgFilms/';
?>

<!-- La variable $liste est définie avec un message indiquant le nombre de films disponibles. Si le nombre de films est supérieur à 1, le texte est au pluriel. -->
<?php $liste = "Nombre de Film".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>

<!-- Afficher le nombre total de film disponibles en utilisant la fonction rowCount() de l'objet $request. -->
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> film<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES FILMS -->
<div class="film-card-list">
    <?php

    /* Boucle foreach pour itérer sur chaque réalisateur récupéré à partir de l'objet $request->fetchAll(). 
    Chaque réalisateur est affiché sous forme de card avec un lien vers les informations détaillées du réalisateur. */
    foreach ($request->fetchAll() as $film) {

        // CONDITION MINUTES/HEURES
        $minutes = $film["duree"];
        $heures = floor($minutes / 60);
        $minutes_restantes = $minutes % 60;
        $duree = "Durée : ". $heures . "h " . $minutes_restantes . " mins";

        // Destination des images du film
        $imageSrc = $imagePath . $film["path_img_film"];
    ?>
    <a href="index.php?action=infosFilm&id=<?= $film["id_film"] ?>">
        <div class="film-card">
            <div class="film-card-infos">
                <span class="film-duree"><?= $duree ?></span>
                <span><?= "Titre : ".$film["titre_film"] ?></span>
                <span class="dateSortie"><?="Année : ".$film["date_sortie"] ?></span>
                <span><?= "Genre : ".ucfirst($film["genre_name"]) ?></span>
            </div>

            <!-- IMAGE -->
            <!-- L'image du film est affichée en utilisant le chemin d'accès et le nom de fichier d'image stockés dans les variables. -->
            <img class="image-film" src="<?= $imageSrc ?>" alt="affiche du film <?= $film["titre_film"] ?>">
        </div>
    </a>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/film/listFilms.css">';
require "view/template.php";
?>
