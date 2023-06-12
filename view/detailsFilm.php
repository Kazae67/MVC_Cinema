<?php
ob_start();
$film = $request_film->fetch();
?>

<a href="index.php?action=listFilms" class="button"><i class="fa-solid fa-arrow-left"></i>Retour</a>
<div class="film-card-list">
    <div class="film-card-infos">
        <div class="film-card-detail">
            <span><?= $film["titre_film"] ?></span>
            <span>Realisateur : <a href="index.php?action=detailsRealisateur&id=<?= $film['id_realisateur'] ?>"><?= $film["rea_prenom"] . " " . $film["rea_nom"] ?></a></span>
            <span>Genre : <?= ucfirst($film["genre_name"]) ?></span>
            <span>Date de sortie : <?= $film["date_sortie"] ?></span>
            <span>Durée du film :
                <?php
                $minutes = $film["duree"];
                $duree = date('H:i', mktime(0, $minutes));
                echo $duree;
                ?>
            </span>
            <span>Note :
                <?php
                $times = $film["note"];
                echo str_repeat("<i class='fa-solid fa-star'></i>", $times);
                echo str_repeat("<i class='fa-regular fa-star'></i>", 5 - $times);
                ?>
            </span>
            <span>Synopsis : <?= $film["synopsis"] ?></span>

            <?php
            if ($request_casting->rowCount() > 0) {
                ?>
                <span>Il y a un total de <?= $request_casting->rowCount() ?> acteurs dans ce film :</span>
                <?php
                foreach ($request_casting->fetchAll() as $casting) {
                    ?>
                    <span> - <a href="index.php?action=detailsActeur&id=<?= $casting['id_acteur'] ?>"><?= $casting["prenom"] . " " . $casting["nom"] ?></a> dans le role de <?= $casting["role_name"] ?></span>
                    <?php
                }
            } else {
                ?>
                <span class="error">Aucun acteurs ajoutés à ce film.</span>
                <?php
            }
            ?>

            <img class="image-film-xl" src="<?= $film["url_img"] ?>" alt="affiche <?= $film["titre_film"] ?>">
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
