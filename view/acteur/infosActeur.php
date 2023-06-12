<?php
ob_start(); 
?>
<p class="row-count-list">Cet acteur a joué un total de : <?= $request_acteur_list_films->rowCount() ?> film<?= ($request_acteur_list_films->rowCount() > 1) ? "s" : "" ?></p>
<div class="film-card-list">
	<div class="film-card-detail">
		<?php 
			if(isset($request_acteur_infos)){
				$acteur_infos = $request_acteur_infos->fetch();?>
				<span><?=
                "Prenom : ".$acteur_infos["prenom"]." ".
                "Nom : ".$acteur_infos["nom"]." ". 
                "Né le : ".$acteur_infos["birthdate"]
                ?></span>

				<span>Film<?= ($request_acteur_list_films->rowCount() > 1) ? "s" : "" ?> joué<?= ($request_acteur_list_films->rowCount() > 1) ? "s" : "" ?> : </span>
				<?php } ?>
				
				<?php 
			if($request_acteur_list_films->rowCount()>0){
				foreach($request_acteur_list_films->fetchAll() as $acteur_film){ ?>
				<span><a href="index.php?action=infosFilm&id=<?=$acteur_film['id_film']?>">
                <?= $acteur_film["titre_film"]."</a>". " Date : " .$acteur_film["date_sortie"]." Role : ".$acteur_film["role_name"]?></span>
			<?php

            }

            }else{ ?>
				<span class="error">Cet acteur a joué dans aucun film.</span>
				<?php
			} 
			?>
	</div>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
 ?>