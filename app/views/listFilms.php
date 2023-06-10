<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= count($films) ?> films</p>

<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>TITRE</th>
            <th>ANNEE SORTIE</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($films as $film) { ?>
            <tr>
                <td><?= $film["titre"] ?></td>
                <td><?= $film["date"] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php

$films = $ctrlCinema->getFilms();
$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
