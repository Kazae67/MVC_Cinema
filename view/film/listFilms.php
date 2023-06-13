<?php
ob_start();

// Chemin des images des films
$imagePath = 'public/images/imgFilms/';

// LISTE DE FILMS + INFOS
?>
<!-- TOTAL FILMS -->
<?php $liste = "Les films disponible".(($request->rowCount() > 1) ? "s" : ""); ?>
<p class="row-count-list">Un total de <?= $request->rowCount() ?> film<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES FILMS -->
<div class="film-card-list">
	<?php foreach ($request->fetchAll() as $film): ?>
		<a href="index.php?action=infosFilm&id=<?= $film["id_film"] ?>&image=<?= $film["id_film"] ?>">


			<div class="film-card">
				<div class="film-card-infos">
					<span><?= "Titre : ".$film["titre_film"] ?></span>
					<span class="dateSortie"><?="Année : ".$film["date_sortie"] ?></span>
					<span><?= "Genre : ".ucfirst($film["genre_name"]) ?></span>
					<?php 
					$minutes = $film["duree"];
					$duree = date('H:i', mktime(0, $minutes)); 
					?>
					<span><?= "Durée : ".$duree ?></span>
				</div>
	
				<!-- IMAGE -->
				<img class="image-film" src="<?= $imagePath . $film["id_film"] . '.jpg' ?>" alt="affiche du film <?= $film["titre_film"] ?>">
			</div>
		</a>
	<?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
