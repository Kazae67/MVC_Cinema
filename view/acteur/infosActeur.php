<?php
ob_start();
?>


<div class="film-acteur-card-list">
	<div class="film-acteur-card-detail">
		<?php if (isset($request_acteur_infos)) {
			$acteur_infos = $request_acteur_infos->fetch(); ?>
            <h2><?= $acteur_infos["prenom"] . " " . $acteur_infos["nom"] ?></h2>
			
			<p class="row-count-list">
				Cet acteur a joué un total de : <?= $request_acteur_list_films->rowCount() ?> film<?= ($request_acteur_list_films->rowCount() > 1) ? "s" : "" ?>
			</p>
            <span>Né le : <?= $acteur_infos["birthdate"] ?></span>

            <span>
                Film<?= ($request_acteur_list_films->rowCount() > 1) ? "s" : "" ?> joué<?= ($request_acteur_list_films->rowCount() > 1) ? "s" : "" ?> :
            </span>
        <?php } ?>

        <?php if ($request_acteur_list_films->rowCount() > 0) { ?>
            <div class="film-acteur-card-horizontal">
                <?php foreach ($request_acteur_list_films->fetchAll() as $acteur_film) { ?>
                    <div class="film-container">
                        <a href="index.php?action=infosFilm&id=<?= $acteur_film['id_film'] ?>">
                            <div class="film-acteur-card">
                                <img class="image-acteur-film" src="<?= $acteur_film['film_url_img'] ?>" alt="affiche du film <?= $acteur_film['titre_film'] ?>">
                                <div class="film-info">
                                    <span class="film-title"><?= $acteur_film['titre_film'] ?></span>
                                    <span class="film-role">Rôle : <?= $acteur_film['role_name'] ?></span>
                                    <span class="film-date">Date : <?= $acteur_film['date_sortie'] ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <span class="error">Cet acteur n'a joué dans aucun film.</span>
        <?php } ?>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
