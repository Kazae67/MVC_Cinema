<?php ob_start(); ?>

<?php
$liste = "Les réalisateurs disponibles" . (($request->rowCount() > 1) ? "s" : "");
?>
<p class="row-count-list">Un total de <?= $request->rowCount() ?> réalisateur<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="realisateur-card-list">
    <?php while ($realisateur = $request->fetch()): ?>
        <div class="realisateur-card">
            <a href="index.php?action=infosRealisateur&id=<?= $realisateur["id_realisateur"] ?>">
                <div class="realisateur-card-infos">
                    <span><?= $realisateur["prenom"]." ".$realisateur["nom"] ?></span>
                    <span><?= $realisateur["birthdate"] ?></span>
                    <span><?= $realisateur["sexe"] ?></span>
                </div>
                <!-- IMAGE -->
                <?php 
                $imagePath = "public/images/imgRealisateurs/";
                $imageFilename = $realisateur["path_img_realisateur"];
                $imageUrl = $imagePath . $imageFilename;
                ?>
                <img class="image-realisateur" src="<?= $imageUrl ?>" alt="photo du réalisateur <?= ucfirst($realisateur["nom"]) . " " . ucfirst($realisateur["prenom"]) ?>">
            </a>
        </div>
    <?php endwhile; ?>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
