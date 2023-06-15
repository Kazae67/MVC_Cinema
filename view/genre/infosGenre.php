<?php
ob_start(); 
?>
	<div class="film-card-list">

		<div class="film-card-detail">
		<?php 
			if(isset($request_genre_infos)){ 
				$genre_infos = $request_genre_infos->fetch();
			}?>
				<span>Dans ce genre, il y a un total de : </span>
		<?php
			if($request_genre_list_films->rowCount()>0){
				foreach($request_genre_list_films->fetchAll() as $genre_list_films){ ?>
				<span> - <a href="index.php?action=infosFilm&id=<?=$genre_list_films['id_film']?>"><?=$genre_list_films["titre_film"]." ". $genre_list_films["date_sortie"]."</a> "."Durée :".$genre_list_films["duree"]?></span>
				
			<?php
                }
                }else{ ?>
                    <span class="error">Aucun films dans ce genre</span>
            <?php
            } ?>
        </div>	
    </div>
<?php				
$content = ob_get_clean();

require "view/template.php";?>