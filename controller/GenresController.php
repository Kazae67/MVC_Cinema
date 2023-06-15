<?php

namespace Controller;

use Model\Connect;

class GenresController {
    // Liste des GENRES
    public function listGenres(){

	$pdo = Connect::connectToDb();

	$request = $pdo->query("
    SELECT genre_name, id_genre, path_img_genre
    FROM genre 
    ");

	require "view/genre/listGenres.php";

	}
	public function infosGenre($id_genre){
 
    $pdo = Connect::connectToDb();
    $genre_name = "$id_genre";
    $request_genre_infos = $pdo->prepare("
        SELECT genre_name, id_genre
        FROM genre
        WHERE id_genre = :id_genre
    ");
  

    $request_genre_infos->execute(["id_genre" => $id_genre]);

    $pdo = Connect::connectToDb();
    $genre_name = "$id_genre";
    $request_genre_list_films = $pdo->prepare("
        SELECT f.titre_film, f.date_sortie, f.duree, f.genre_id, genre_name, f.id_film
        FROM film f 
        INNER JOIN genre g ON g.id_genre = f.genre_id
        WHERE g.id_genre = :id_genre
        ORDER BY date_sortie DESC
    ");
    $request_genre_list_films->execute(["id_genre" => $id_genre]);

    require "view/genre/infosGenre.php";
}
}