<?php

ob_start(); 
?>
	<div class="film-card-list">
		
		<div class="film-card-info">
		<?php 
			if(isset($request_realisateur_infos)){
				$realisateur_infos = $request_realisateur_infos->fetch();
			?>
			<span><?=$realisateur_infos["prenom"]." ".$realisateur_infos["nom"]." est né le ".$realisateur_infos["birthdate"]?><br></span>
			<span>a réalisé les films : <br><br></span>
				<?php } ?>
			<?php 
			if($request_realisateur_list_films->rowCount()>0){
				foreach($request_realisateur_list_films->fetchAll() as $realisateur_film){ ?>
				<span> - <a href="index.php?action=infosFilm&id=<?=$realisateur_film['id_film']?>"><?= $realisateur_film["titre_film"]." (". $realisateur_film["date_sortie"].")</a> 
				 "?><br> </span>
			<?php }}
			else{ ?>
				<span class="error">Cet réalisateur n'as produit aucuns films.</span>
				<?php
			} ?>
			</div>
			</div>
<?php

$content = ob_get_clean();
require "view/template.php";