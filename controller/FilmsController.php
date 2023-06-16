<?php

namespace Controller;

use Model\Connect;

class FilmsController {

    // Liste des FILMS
    public function listFilms()
    {
        $pdo = Connect::connectToDb();

        $request = $pdo->query("
            SELECT id_film, titre_film, date_sortie, genre_name, duree, path_img_film
            FROM film
            INNER JOIN genre ON genre.id_genre = film.genre_id
            ORDER BY date_sortie DESC
        ");

        require "view/film/listFilms.php";
    }

    // Infos du FILM 
    public function infosFilm($id_film)
    {
        $pdo = Connect::connectToDb();

        $request_film = $pdo->prepare("
            SELECT titre_film, date_sortie, duree, synopsis, genre_name, rea.prenom AS rea_prenom, rea.nom AS rea_nom, note, path_img_film, id_realisateur
            FROM film f
            INNER JOIN realisateur rea ON f.realisateur_id = rea.id_realisateur
            INNER JOIN genre g ON g.id_genre = f.genre_id
            WHERE f.id_film = :id_film
        ");

        $request_film->execute(["id_film" => $id_film]);

        $request_casting = $pdo->prepare("
            SELECT prenom, nom, role_name, a.id_acteur
            FROM acteur a
            INNER JOIN casting c ON c.acteur_id = a.id_acteur
            INNER JOIN role r ON r.id_role = c.role_id
            INNER JOIN film f ON f.id_film = c.film_id
            WHERE c.film_id = :id_film
        ");

        $request_casting->execute(["id_film" => $id_film]);

        require "view/film/infosFilm.php";
    }
}
?>
