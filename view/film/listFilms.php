<?php
ob_start();

// Chemin des images des films
$imagePath = 'public/images/imgFilms/';

// LISTE DE FILMS + INFOS
?>
<?php $liste = "Nombre de Film".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> film<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES FILMS -->
<div class="film-card-list">
    <?php
    foreach ($request->fetchAll() as $film) {
        $minutes = $film["duree"];
        $heures = floor($minutes / 60);
        $minutes_restantes = $minutes % 60;
        $duree = "Durée : ". $heures . "h " . $minutes_restantes . " mins";
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
            <img class="image-film" src="<?= $imageSrc ?>" alt="affiche du film <?= $film["titre_film"] ?>">
        </div>
    </a>
    <?php } ?>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
