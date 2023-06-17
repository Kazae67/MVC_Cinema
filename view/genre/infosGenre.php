<?php 
ob_start(); 
$imagePath = "public/images/imgFilms/";
?>


<div class="container">
    <div class="content">
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
                                    <img class="film-genre-image" src="<?= $imagePath . $genre_list_films['path_img_film'] ?>" alt="affiche du film <?= $genre_list_films['titre_film'] ?>">
                                    <div class="film-genre-info">
                                        <h2 class="film-genre-title"><?= $genre_list_films['titre_film'] ?></h2>
                                        <p class="film-genre-date">Date : <?= $genre_list_films['date_sortie'] ?></p>
                                        <?php
                                        $minutes = $genre_list_films['duree'];
                                        $heures = floor($minutes / 60);
                                        $minutes_restantes = $minutes % 60;
                                        ?>
                                        <p class="film-genre-duree">Durée: <?= $heures . "h" . $minutes_restantes . " mins" ?></p>
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

    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php $cssLink = '<link rel="stylesheet" href="public/css/genre/infosGenre.css">'; ?>
<?php require "view/template.php"; ?>
