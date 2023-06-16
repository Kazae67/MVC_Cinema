<?php
ob_start();
?>


<?php $liste = "Nombre de Genre".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> genre<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<div class="genre-card-list">
    <?php foreach ($request->fetchAll() as $genre) { ?>
        <a href="index.php?action=infosGenre&id=<?= $genre["id_genre"] ?>">
            <div class="genre-card">
                <div class="genre-card-infos">
                    <span><?= ucfirst($genre["genre_name"]) ?></span>
                </div>
                <!-- IMAGE -->
                <?php
                $imagePath = "public/images/imgGenres/";
                $imageFilename = $genre["path_img_genre"];
                $imageUrl = $imagePath . $imageFilename;
                ?>
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
