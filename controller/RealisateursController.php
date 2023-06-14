<?php

namespace Controller;

use Model\Connect;

class RealisateursController {
    // Liste realisateurs 
	public function listRealisateurs()
	{
		$pdo = Connect::connectToDb();
		$request = $pdo->query("
        SELECT prenom, nom, sexe, birthdate, id_realisateur, path_img_realisateur
        FROM realisateur
        ");

		require "view/realisateur/listRealisateurs.php";
	}


    // Infos REALISATEUR
    public function infosRealisateur($id_realisateur)
	{
		$pdo = Connect::connectToDb();

		$request_realisateur_infos = $pdo->prepare("
			SELECT DISTINCT r.id_realisateur, r.prenom, r.nom, r.birthdate, r.path_img_realisateur
			FROM realisateur r
			WHERE r.id_realisateur = :id_realisateur
		");

		$request_realisateur_infos->execute(["id_realisateur" =>$id_realisateur]);

		$request_realisateur_list_films = $pdo->prepare("
			SELECT f.titre_film, f.date_sortie, f.duree, f.path_img_film, id_film
			FROM realisateur r
			INNER JOIN film f ON f.realisateur_id = r.id_realisateur
			WHERE r.id_realisateur = :id_realisateur
		");

		$request_realisateur_list_films->execute(["id_realisateur" => $id_realisateur]);

		require "view/realisateur/infosRealisateur.php";
	}
}
