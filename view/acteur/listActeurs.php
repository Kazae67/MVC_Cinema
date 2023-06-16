<?php
ob_start();
?>
<?php 
?>
<?php $liste = "Nombre d'Acteur".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> acteur<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="acteur-card-list">
    <?php foreach ($request->fetchAll() as $acteur): ?>
        <a href="index.php?action=infosActeur&id=<?= $acteur["id_acteur"] ?>">
            <div class="acteur-card">
                <div class="acteur-card-infos">
                    <span><?= ucfirst($acteur["nom"]) . " " . ucfirst($acteur["prenom"]) ?></span>
                    <span><?= "Né(e) : " . $acteur["birthdate"] ?></span>
                    <span><?= "Sexe : " . $acteur["sexe"] ?></span>
                </div>
                <!-- IMAGE -->
                <?php 
                $imagePath = "public/images/imgActeurs/";
                $imageFilename = $acteur["path_img_acteur"];
                $imageUrl = $imagePath . $imageFilename;
                ?>
                <img class="image-acteur" src="<?= $imageUrl ?>" alt="affiche de l'acteur <?= ucfirst($acteur["nom"]) . " " . ucfirst($acteur["prenom"]) ?>">
            </div>
        </a>
    <?php endforeach;?>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
