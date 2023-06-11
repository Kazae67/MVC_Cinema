<?php ob_start(); ?>
<p class="row-count-list">Il y a <?= $request->rowCount() ?> films</p>

<div class="film-card-list">
	<?php foreach ($request->fetchAll() as $film): ?>
		<a href="index.php?action=detailsFilm&id=<?= $film["id_film"] ?>">
			<div class="film-card">
				<div class="film-card-infos">
					<span><?= $film["titre_film"] ?></span>
					<span class="dateSortie"><?= $film["date_sortie"] ?></span>
					<span><?= ucfirst($film["genre_name"]) ?></span>
					<?php 
					$minutes = $film["duree"];
					$duree = date('H:i', mktime(0, $minutes)); 
					?>
					<span><?= $duree ?></span>
				</div>
				<img class="image-film" src="<?= $film["url_img"] ?>" alt="affiche du film <?= $film["titre_film"] ?>">
			</div>
		</a>
	<?php endforeach; ?>
</div>

<?php
$liste = "Liste des films";
$content = ob_get_clean();
require "view/template.php";
?>
