<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= is_array($films) ? count($films) : 0 ?> films</p>

<div class="uk-grid uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid>
    <?php foreach($films as $film) { ?>
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img src="<?= $film['affiche'] ?>" alt="<?= $film['titre'] ?>">
                </div>
                <div class="uk-card-body">
                    <h3 class="uk-card-title"><?= $film['titre'] ?></h3>
                    <p>Date: <?= $film['date'] ?></p>
                    <p>Durée: <?= $film['duree'] ?> minutes</p>
                    <p>Synopsis: <?= $film['synopsis'] ?></p>
                    <p>Note: <?= $film['note'] ?>/10</p>
                    <p>Réalisateur: <?= $film['id_realisateur'] ?></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php

$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();