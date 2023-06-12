<?php
ob_start();
?>
<p class="row-count-list"> Il y a <?= $request->rowCount() ?> acteurs</p>

<div class="film-card-list">
        <?php
        foreach ($request->fetchAll() as $acteur) { ?>
                        <div class="film-card-person">
                                <a href="index.php?action=infosActeur&id=<?= $acteur["id_acteur"] ?>">
                                        <span><?= ucfirst("Acteur :".$acteur["nom"])." ".ucfirst($acteur["prenom"]) ?></span>
                                        <span><?= "Date de naissance : ".$acteur["birthdate"] ?></span>
                                        <span><?= "Sexe : ".$acteur["sexe"] ?></span>
                        </div>
                                </a>
        <?php } ?>
        </div>

<?php

$title = "Liste des acteurs";
$secondary_title = "Liste des acteurs";
$content = ob_get_clean();


require "view/template.php";