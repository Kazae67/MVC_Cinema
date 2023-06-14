<?php

namespace Controller;

use Model\Connect;

class RealisateursController {
    // Liste realisateurs 
	public function listRealisateurs()
	{
		$pdo = Connect::connectToDb();
		$request = $pdo->query("
        SELECT prenom, nom, sexe, birthdate, id_realisateur
        FROM realisateur
        ");

		require "view/realisateur/listRealisateurs.php";
	}


    // Infos REALISATEUR
    public function infosRealisateur($id_realisateur)
	{
		$pdo = Connect::connectToDb();

		$request_realisateur_infos = $pdo->prepare("
			SELECT DISTINCT d.id_realisateur, d.prenom, d.nom, d.birthdate
			FROM realisateur d
			WHERE d.id_realisateur = :id_realisateur
		");

		$request_realisateur_infos->execute(["id_realisateur" =>$id_realisateur]);

		$request_realisateur_list_films = $pdo->prepare("
			SELECT m.titre_film, m.date_sortie, m.duree, id_film
			FROM realisateur d
			INNER JOIN film m ON m.realisateur_id = d.id_realisateur
			WHERE d.id_realisateur = :id_realisateur
		");

		$request_realisateur_list_films->execute(["id_realisateur" => $id_realisateur]);

		require "view/realisateur/infosRealisateur.php";
	}
}
