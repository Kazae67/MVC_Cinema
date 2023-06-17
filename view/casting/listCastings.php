<?php
ob_start();
$imagePathFilm = 'public/images/imgFilms/';
$imagePathActeur = 'public/images/imgActeurs/';
$imagePathRole = 'public/images/imgRoles/';
?>

<?php $liste = "Nombre de Casting".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> casting<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="film-card-list">
    <?php
    foreach ($request->fetchAll() as $casting) { ?>
        <div class="casting-container">
            <div class="casting-images-container">
                <?php if (!empty($casting["prenom"])) { ?>
                    <div class="image-container">
                        <img class="casting-image" src="<?= $imagePathActeur . $casting['path_img_acteur'] ?>" alt="affiche de l'acteur <?= $casting['prenom'] ?>">
                    </div>
                <?php } ?>
                <?php if (!empty($casting["titre_film"])) { ?>
                    <div class="image-container">
                        <img class="casting-image" src="<?= $imagePathFilm . $casting['path_img_film'] ?>" alt="affiche du film <?= $casting['titre_film'] ?>">
                    </div>
                <?php } ?>
                <?php if (!empty($casting["role_name"])) { ?>
                    <div class="image-container">
                        <img class="casting-image" src="<?= $imagePathRole . $casting['path_img_role'] ?>" alt="affiche du rôle <?= $casting['role_name'] ?>">
                    </div>
                <?php } ?>
            </div>
            <div class="casting-info">
                <?php if (!empty($casting["prenom"])) { ?>
                    <span>Prénom : <a href="index.php?action=infosActeur&id=<?= $casting['id_acteur'] ?>"><?= $casting["prenom"] ?></a></span>
                <?php } ?>
                <?php if (!empty($casting["role_name"])) { ?>
                    <span>Rôle : <a href="index.php?action=infosRole&id=<?= $casting['id_role'] ?>"><?= $casting["role_name"] ?></a></span>
                <?php } ?>
                <?php if (!empty($casting["titre_film"])) { ?>
                    <span>Film : <a href="index.php?action=infosFilm&id=<?= $casting['id_film'] ?>"><?= $casting["titre_film"] ?></a></span>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

<?php

$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/casting/listCastings.css">';

require "view/template.php";
