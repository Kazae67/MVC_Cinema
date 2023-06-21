<!-- temporisation de sortie -->
<?php
ob_start();
?>

<!-- La variable $liste est définie avec un message indiquant le nombre d'acteurs disponibles. Si le nombre d'acteur est supérieur à 1, le texte est au pluriel. -->
<?php $liste = "Nombre d'Acteur".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>

<!-- Afficher le nombre total d'acteur disponibles en utilisant la fonction rowCount() de l'objet $request. -->
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> acteur<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES CARDS ACTEUR -->
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
                <!-- L'image associée à l'acteur est affichée en utilisant les informations du chemin d'accès et du nom de fichier d'image stockées dans les variables. 
                L'URL de l'image est générée en concaténant le chemin d'accès et le nom de fichier. -->
                <?php 
                $imagePath = "public/images/imgActeurs/";
                $imageFilename = $acteur["path_img_acteur"];
                $imageUrl = $imagePath . $imageFilename;
                ?>
                <!-- L'image de l'acteur est affichée en utilisant le chemin d'accès et le nom de fichier d'image stockés dans les variables. -->
                <img class="image-acteur" src="<?= $imageUrl ?>" alt="affiche de l'acteur <?= ucfirst($acteur["nom"]) . " " . ucfirst($acteur["prenom"]) ?>">
            </div>
        </a>
    <?php endforeach;?>
</div>

<?php
$cssLink ='<link rel="stylesheet" href="public/css/acteur/listActeurs.css">';
$content = ob_get_clean();
require "view/template.php";
?>
