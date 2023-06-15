<?php

namespace Controller;

use Model\Connect;

class GenresController {
    public function listGenres()
	{

	$pdo = Connect::connectToDb();
    
	$request = $pdo->query("
    SELECT genre_name, id_genre
    FROM genre 
    ");

		require "view/listGenres.php";
	}
}