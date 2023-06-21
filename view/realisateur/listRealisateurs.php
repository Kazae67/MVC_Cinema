<!-- temporisation de sortie -->
<?php 
ob_start(); 
?>

<!-- La variable $liste est définie avec un message indiquant le nombre de réalisateur disponibles. Si le nombre de rôles est supérieur à 1, le texte est au pluriel. -->
<?php $liste = "Nombre de Réalisateur".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>

<!-- Afficher le nombre total de réalisateur disponibles en utilisant la fonction rowCount() de l'objet $request. -->
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> réalisateur<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES CARDS REALISATEUR -->
<div class="realisateur-card-list">

    <!-- Boucle foreach pour itérer sur chaque réalisateurs récupéré à partir de l'objet $request->fetchAll(). 
    Chaque réalisateur est affiché sous forme de card avec un lien vers les informations détaillées du réalisateur. -->
    <?php while ($realisateur = $request->fetch()): ?>
        <a href="index.php?action=infosRealisateur&id=<?= $realisateur["id_realisateur"] ?>">
            <div class="realisateur-card">
                <div class="realisateur-card-infos">
                    <!-- À l'intérieur de chaque card de réalisateur, les informations du réalisateur sont affichées -->
                    <span><?= $realisateur["prenom"]." ".$realisateur["nom"] ?></span>
                    <span><?= $realisateur["birthdate"] ?></span>
                    <span><?= $realisateur["sexe"] ?></span>
                </div>
                <!-- IMAGE -->
                <!-- L'image associée au realisateur est affichée en utilisant les informations du chemin d'accès et du nom de fichier d'image stockées dans les variables. 
                L'URL de l'image est générée en concaténant le chemin d'accès et le nom de fichier. -->
                <?php 
                $imagePath = "public/images/imgRealisateurs/";
                $imageFilename = $realisateur["path_img_realisateur"];
                $imageUrl = $imagePath . $imageFilename;
                ?>
                <!-- L'image du réalisateur est affichée en utilisant le chemin d'accès et le nom de fichier d'image stockés dans les variables. -->
                <img class="image-realisateur" src="<?= $imageUrl ?>" alt="photo du réalisateur <?= ucfirst($realisateur["nom"]) . " " . ucfirst($realisateur["prenom"]) ?>">
            </a>
        </div>
    <?php endwhile; ?>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/realisateur/listRealisateurs.css">';
require "view/template.php";
?>
