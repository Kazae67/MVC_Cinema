<?php ob_start(); ?>

<?php if (isset($request_genre_infos)) {
    $genre_infos = $request_genre_infos->fetch();
} ?>

<?php if ($request_genre_list_films->rowCount() > 0) { ?>
    <?php
    $total_films_genre = $request_genre_list_films->rowCount();

    echo "<p class='row-count-list'>Dans ce genre, il y a un total de : $total_films_genre film" . ($total_films_genre > 1 ? "s" : "") . "</p>";
    ?>

    <div class="film-genre-card-list">
        <div class="film-genre-card-horizontal">
            <?php foreach ($request_genre_list_films->fetchAll() as $genre_list_films) { ?>
                <div class="film-genre-container">
                    <a href="index.php?action=infosFilm&id=<?= $genre_list_films['id_film'] ?>">
                        <div class="film-genre-card">
                            <?php
                            $imagePath = "public/images/imgFilms/";
                            $imageFilename = $genre_list_films["path_img_film"];
                            $imageUrl = $imagePath . $imageFilename;
                            ?>
                            <img class="image-genre-film" src="<?= $imageUrl ?>" alt="affiche du film <?= $genre_list_films['titre_film'] ?>">
                            <div class="film-genre-info">
                                <h3 class="film-genre-title"><?= $genre_list_films['titre_film'] ?></h3>
                                <p class="film-genre-date">Date : <?= $genre_list_films['date_sortie'] ?></p>
                                <p class="film-genre-duree">Durée: <?= $genre_list_films["duree"] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

<?php } else { ?>
    <div class="film-genre-card-list">
        <div class="film-genre-card-detail">
            <span class="error">Aucun film dans ce genre</span>
        </div>
    </div>
<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require "view/template.php"; ?>
