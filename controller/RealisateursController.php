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
}