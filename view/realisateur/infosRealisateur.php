<?php
ob_start();
$imagePath = 'public/images/imgFilms/';
?>

<div class="container">
    <div class="content">
        <div class="realisateur-card-detail">
            <?php

            /* PRENOM | NOM */
            // Vérifier si les informations du réalisateur sont définies
            if (isset($request_realisateur_infos)) {
                $realisateur_infos = $request_realisateur_infos->fetch();
                ?>
                <h2><?= $realisateur_infos["prenom"] . " " . $realisateur_infos["nom"] ?></h2>

                <!-- Afficher le nombre de films réalisés -->
                <p class="realisateur-info">Ce réalisateur a réalisé un total de : <?= $request_realisateur_list_films->rowCount() ?> film<?= ($request_realisateur_list_films->rowCount() > 1) ? "s" : "" ?></p>
                <p>Né le : <?= $realisateur_infos["birthdate"] ?></p>

                
                <?php
                /* BIOGRAPHIE */
                // Vérifier si la biographie du réalisateur est définie
                if (isset($realisateur_infos["biographie"])) {
                    ?>
                    <span class="realisateur-info"><b>Biographie :</b> <?= $realisateur_infos["biographie"] ?></span>
                <?php } ?>

                <span></span>
                    <b>Film<?= ($request_realisateur_list_films->rowCount() > 1) ? "s" : "" ?> réalisé<?= ($request_realisateur_list_films->rowCount() > 1) ? "s" : "" ?> :</b>
                </span>
            <?php } ?>

            <?php
            // Vérifier si des films sont disponibles
            if ($request_realisateur_list_films->rowCount() > 0) {
                ?>
                <div class="realisateur-card-horizontal">
                    <?php
                    // Parcourir tous les films du réalisateur
                    foreach ($request_realisateur_list_films->fetchAll() as $realisateur_film) {
                        ?>
                        <div class="realisateur-container">
                            <a href="index.php?action=infosFilm&id=<?= $realisateur_film['id_film'] ?>">
                                <div class="realisateur-card">
                                    <!-- IMAGE FILM -->
                                    <img class="realisateur-image" src="<?= $imagePath . $realisateur_film['path_img_film'] ?>" alt="affiche du film <?= $realisateur_film['titre_film'] ?>">
                                    <div class="realisateur-info">
                                        <h3 class="realisateur-title"><a class="realisateur-link" href="index.php?action=infosFilm&id=<?= $realisateur_film['id_film'] ?>"><?= $realisateur_film['titre_film'] ?></a>
                                            <?php
                                            // Vérifier si le nom du rôle est défini
                                            if (isset($realisateur_film['role_name'])) {
                                                ?>
                                                <span class="realisateur-role"><a class="realisateur-link" href="index.php?action=infosRole&id=<?= $realisateur_film['id_role'] ?>"><?= $realisateur_film['role_name'] ?></a></span>
                                            <?php } ?>
                                            <span class="realisateur-date"><?= $realisateur_film['date_sortie'] ?></span>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <!-- ERREUR -->
            <?php } else { ?>
                <span class="error">Ce réalisateur n'a réalisé aucun film.</span>
            <?php } ?>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/realisateur/infosRealisateur.css">';
require "view/template.php";
?>
