<?php

namespace Controller;

use Model\Connect;

class GenresController {
    
    // Liste des GENRES
    public function listGenres() {
        $pdo = Connect::seConnecter();

        $query = "
            SELECT genre_name, id_genre, path_img_genre
            FROM genre 
        ";

        $request = $pdo->query($query);

        require "view/genre/listGenres.php";
    }

    // Infos du GENRE
    public function infosGenre($id_genre) {
        $pdo = Connect::seConnecter();

        $query_genre_infos = "
            SELECT genre_name, id_genre, path_img_genre
            FROM genre
            WHERE id_genre = :id_genre
        ";

        $request_genre_infos = $pdo->prepare($query_genre_infos);
        $request_genre_infos->execute(["id_genre" => $id_genre]);

        $genre_infos = $request_genre_infos->fetch();

        $query_genre_list_films = "
            SELECT f.titre_film, f.date_sortie, f.duree, f.genre_id, g.genre_name, f.id_film, f.path_img_film
            FROM film f 
            INNER JOIN genre g ON g.id_genre = f.genre_id
            WHERE g.id_genre = :id_genre
            ORDER BY date_sortie DESC
        ";

        $request_genre_list_films = $pdo->prepare($query_genre_list_films);
        $request_genre_list_films->execute(["id_genre" => $id_genre]);

        require "view/genre/infosGenre.php";
    }
}
