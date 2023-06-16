<?php

namespace Controller;

use Model\Connect;

class CastingsController {
    public function listCastings()
	{
		$pdo = Connect::connectToDb();
		$request = $pdo->query("
		
			SELECT prenom, nom, role_name, titre_film, id_film, id_role, id_acteur
			FROM film
			INNER JOIN casting ON casting.film_id = film.id_film
			INNER JOIN role ON casting.role_id = role.id_role
			INNER JOIN acteur ON casting.acteur_id = acteur.id_acteur
    ");

		require "view/casting/listCastings.php";
	}

}