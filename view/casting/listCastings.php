<?php
ob_start();
$imagePathFilm = 'public/images/imgFilms/';
$imagePathActeur = 'public/images/imgActeurs/';
$imagePathRole = 'public/images/imgRoles/';
?>

<?php $liste = "Nombre de Casting" . ($request->rowCount() > 1 ? "s" : "") . " disponible" . ($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> casting<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="container">
    <div class="content">
        <div class="castings-card-detail">
            <div class="film-card-list">
                <?php
                foreach ($request->fetchAll() as $casting) { ?>
                    <div class="casting-container">
                        <div class="casting-images-container">
                            <?php if (!empty($casting["prenom"])) { ?>
                                <div class="image-container">
                                    <a href="index.php?action=infosActeur&id=<?= $casting['id_acteur'] ?>"><img class="casting-image" src="<?= $imagePathActeur . $casting['path_img_acteur'] ?>" alt="affiche de l'acteur <?= $casting['prenom'] ?>"></a>
                                </div>
                            <?php } ?>
                            <?php if (!empty($casting["titre_film"])) { ?>
                                <div class="image-container">
                                    <a href="index.php?action=infosFilm&id=<?= $casting['id_film'] ?>"><img class="casting-image" src="<?= $imagePathFilm . $casting['path_img_film'] ?>" alt="affiche du film <?= $casting['titre_film'] ?>"></a>
                                </div>
                            <?php } ?>
                            <?php if (!empty($casting["role_name"])) { ?>
                                <div class="image-container">
                                    <a href="index.php?action=infosRole&id=<?= $casting['id_role'] ?>"><img class="casting-image" src="<?= $imagePathRole . $casting['path_img_role'] ?>" alt="affiche du rôle <?= $casting['role_name'] ?>"></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php

$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/casting/listCastings.css">';

require "view/template.php";
