<?php

namespace Controller;

use DateTime;
use Model\Connect;

class CinemaController
{
    public function listFilms()
    {
        $pdo = Connect::connectToDb();

        $request = $pdo->query("
            SELECT id_film, titre_film, date_sortie, genre_name, duree, url_img
            FROM film
            INNER JOIN genre ON genre.id_genre = film.genre_id
            ORDER BY date_sortie DESC
        ");

        require "view/listFilms.php";
    }

    public function detailsFilm($id_film)
    {
        $pdo = Connect::connectToDb();
        $titre_film = "$id_film";
        
        $request_film = $pdo->prepare("
            SELECT titre_film, date_sortie, duree, synopsis, genre_name, d.prenom AS rea_prenom, d.nom AS rea_nom, note, url_img, id_realisateur
            FROM film f
            INNER JOIN realisateur d ON f.realisateur_id = d.id_realisateur
            INNER JOIN genre g ON g.id_genre = f.genre_id
            WHERE  f.id_film = :id_film
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

        require "view/detailsFilm.php";
    }
}
