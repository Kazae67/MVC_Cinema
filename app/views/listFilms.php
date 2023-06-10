<?php ob_start(); ?>

<p class="uk-label uk-label-warning"> Il y a <?= isset($films) ? count($films) : 0 ?> films</p>

<?php if(isset($films) && is_array($films) && count($films) > 0): ?>
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
<?php else: ?>
    <p>Aucun film trouvé.</p>
<?php endif; ?>

<?php
$films = $ctrlCinema->listFilms();
$titre = "Liste des films";
$titre_secondaire = "Liste des films";
$contenu = ob_get_clean();
?>
