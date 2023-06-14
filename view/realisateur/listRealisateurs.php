<?php ob_start(); ?>

<?php $liste = "Les réalisateurs disponibles" . (($request->rowCount() > 1) ? "s" : ""); ?>
<p class="row-count-list">Un total de <?= $request->rowCount() ?> réalisateur<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="realisateur-card-list">
    <table>
        <?php foreach ($request->fetchAll() as $realisateur) { ?>
            <tr>
                <td>
                    <div class="realisateur-card-person">
                        <a href="index.php?action=infosRealisateur&id=<?= $realisateur["id_realisateur"] ?>">
                            <span><?= $realisateur["prenom"]." ".$realisateur["nom"] ?></span>
                            <span><?= $realisateur["birthdate"] ?></span>
                            <span><?= $realisateur["sexe"] ?></span>
                        </a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
