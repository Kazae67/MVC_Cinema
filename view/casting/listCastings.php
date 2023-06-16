<?php

ob_start();
?>
<?php $liste = "Nombre de Casting".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> casting<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="film-card-list">
    <?php
    foreach ($request->fetchAll() as $casting) { ?>
        <div class="film-card-person">
            <?php if (!empty($casting["prenom"])) { ?>
                <span>Prénom : <a href="index.php?action=infosActeur&id=<?= $casting['id_acteur'] ?>"><?= $casting["prenom"] ?></a></span>
            <?php } ?>
            <?php if (!empty($casting["nom"])) { ?>
                <span>Nom : <a href="index.php?action=infosActeur&id=<?= $casting['id_acteur'] ?>"><?= $casting["nom"] ?></a></span>
            <?php } ?>
            <?php if (!empty($casting["titre_film"])) { ?>
                <span>Film : <a href="index.php?action=infosFilm&id=<?= $casting['id_film'] ?>"><?= $casting["titre_film"] ?></a></span>
            <?php } ?>
            <?php if (!empty($casting["role_name"])) { ?>
                <span>Rôle : <a href="index.php?action=infosRole&id=<?= $casting['id_role'] ?>"><?= $casting["role_name"] ?></a></span>
            <?php } ?>
        </div>
    <?php } ?>
</div>

<?php

$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/casting/listCastings.css">';

require "view/template.php";
