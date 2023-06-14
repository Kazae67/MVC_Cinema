<?php
ob_start();
?>
<div class="film-acteur-card-list">
    <div class="film-acteur-card-detail">
        <?php if (isset($request_realisateur_infos)) {
            $realisateur_infos = $request_realisateur_infos->fetch(); ?>
            <h2><?= $realisateur_infos["prenom"] . " " . $realisateur_infos["nom"] ?></h2>

            <p class="row-count-list">
                Ce réalisateur a réalisé un total de : <?= $request_realisateur_list_films->rowCount() ?> film<?= ($request_realisateur_list_films->rowCount() > 1) ? "s" : "" ?>
            </p>
            <span>Né le : <?= $realisateur_infos["birthdate"] ?></span>

            <span>
                Film<?= ($request_realisateur_list_films->rowCount() > 1) ? "s" : "" ?> réalisé<?= ($request_realisateur_list_films->rowCount() > 1) ? "s" : "" ?> :
            </span>
        <?php } ?>

        <?php if ($request_realisateur_list_films->rowCount() > 0) { ?>
            <div class="film-acteur-card-horizontal">
                <?php foreach ($request_realisateur_list_films->fetchAll() as $realisateur_film) { ?>
                    <div class="film-container">
                        <a href="index.php?action=infosFilm&id=<?= $realisateur_film['id_film'] ?>">
                            <div class="film-acteur-card">
                                <!-- IMAGE -->
                                <?php 
                                $imagePath = "public/images/imgFilms/";
                                $imageFilename = $realisateur_film["path_img_film"];
                                $imageUrl = $imagePath . $imageFilename;
                                ?>
                                <img class="image-acteur-film" src="<?= $imageUrl ?>" alt="affiche du film <?= $realisateur_film['titre_film'] ?>">
                                <div class="film-info">
                                    <span class="film-title"><?= $realisateur_film['titre_film'] ?></span>
                                    <span class="film-date">Date : <?= $realisateur_film['date_sortie'] ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <span class="error">Ce réalisateur n'a réalisé aucun film.</span>
        <?php } ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
