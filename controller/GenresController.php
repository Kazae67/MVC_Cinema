<?php

namespace Controller;

use Model\Connect;

class GenresController {
    
    /* Liste des GENRES */
    public function listGenres() {
        $pdo = Connect::Connexion();

        $query = "
            SELECT genre_name, id_genre, path_img_genre
            FROM genre 
        ";

        $request = $pdo->query($query);

        // Affiche la vue listGenres.php
        require "view/genre/listGenres.php"; 
    }

    /* Infos du GENRE */
    public function infosGenre($id_genre) {
        $pdo = Connect::Connexion();

        $query_genre_infos = "
            SELECT genre_name, id_genre, path_img_genre
            FROM genre
            WHERE id_genre = :id_genre
        ";
        // Récupère les informations du genre
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
        // Récupère la liste des films appartenant au genre
        $request_genre_list_films = $pdo->prepare($query_genre_list_films);
        $request_genre_list_films->execute(["id_genre" => $id_genre]);

        
        // Affiche la vue infosGenre.php 
        require "view/genre/infosGenre.php"; 
    }
}