<?php ob_start(); ?>

<?php if ($request_genre_list_films->rowCount() > 0) { ?>
    <?php
    $total_films_genre = $request_genre_list_films->rowCount();

    echo "<p class='row-count-list'>Dans ce genre, il y a un total de : $total_films_genre film" . ($total_films_genre > 1 ? "s" : "") . "</p>";
    ?>

    <div class="film-card-list">
        <div class="film-card-detail">
            <?php foreach ($request_genre_list_films->fetchAll() as $genre_list_films) { ?>
                <span>
                    - <a href="index.php?action=infosFilm&id=<?= $genre_list_films['id_film'] ?>">
                        <?= $genre_list_films["titre_film"] . " " . $genre_list_films["date_sortie"] ?>
                    </a>
                    Durée: <?= $genre_list_films["duree"] ?>
                </span>
            <?php } ?>
        </div>
    </div>

<?php } else { ?>
    <div class="film-card-list">
        <div class="film-card-detail">
            <span class="error">Aucun film dans ce genre</span>
        </div>
    </div>
<?php } ?>

<?php $content = ob_get_clean(); ?>
<?php require "view/template.php"; ?>
