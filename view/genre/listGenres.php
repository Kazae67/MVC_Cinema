<!-- temporisation de sortie -->
<?php
ob_start();
?>

<!-- La variable $liste est définie avec un message indiquant le nombre de genres disponibles. Si le nombre de genres est supérieur à 1, le texte est au pluriel. -->
<?php $liste = "Nombre de Genre".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>

<!-- Afficher le nombre total de genre disponibles en utilisant la fonction rowCount() de l'objet $request. -->
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> genre<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES CARDS GENRE -->
<div class="genre-card-list">

    <!-- Boucle foreach pour itérer sur chaque genres récupéré à partir de l'objet $request->fetchAll(). 
    Chaque genre est affiché sous forme de card avec un lien vers les informations détaillées du genre. -->
    <?php foreach ($request->fetchAll() as $genre) { ?>
        <a href="index.php?action=infosGenre&id=<?= $genre["id_genre"] ?>">
            <div class="genre-card">
                <div class="genre-card-infos">
                    <span><?= ucfirst($genre["genre_name"]) ?></span>
                </div>
                <!-- IMAGE -->
                <!-- L'image associée au genre est affichée en utilisant les informations du chemin d'accès et du nom de fichier d'image stockées dans les variables. 
                L'URL de l'image est générée en concaténant le chemin d'accès et le nom de fichier. -->
                <?php
                $imagePath = "public/images/imgGenres/";
                $imageFilename = $genre["path_img_genre"];
                $imageUrl = $imagePath . $imageFilename;
                ?>
                <!-- L'image du genre est affichée en utilisant le chemin d'accès et le nom de fichier d'image stockés dans les variables. -->
                <img class="image-genre" src="<?= $imageUrl ?>" alt="affiche de l'acteur <?= ucfirst($genre["genre_name"]) ?>">
            </div>
        </a>
    <?php
    }
    ?>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/genre/listGenres.css">';
require "view/template.php";
?>
