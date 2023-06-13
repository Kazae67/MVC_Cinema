<?php

namespace Controller;

use DateTime;
use Model\Connect;

class CinemaController
{

    /****** FILMS ******/
    /* Liste des FILMS */
    public function listFilms()
    {
        $pdo = Connect::connectToDb();

        $request = $pdo->query("
            SELECT id_film, titre_film, date_sortie, genre_name, duree, film_url_img
            FROM film
            INNER JOIN genre ON genre.id_genre = film.genre_id
            ORDER BY date_sortie DESC
        ");

        require "view/film/listFilms.php";
    }

    /* Infos du FILM */
    public function infosFilm($id_film)
    {
        $pdo = Connect::connectToDb();
        $titre_film = "$id_film";
        
        $request_film = $pdo->prepare("
            SELECT titre_film, date_sortie, duree, synopsis, genre_name, d.prenom AS rea_prenom, d.nom AS rea_nom, note, film_url_img, id_realisateur
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

        require "view/film/infosFilm.php";
    }

    /****** ACTEURS ******/
    /* liste des ACTEURS */
        public function listActeurs()
        {

            $pdo = Connect::connectToDb();
            $request = $pdo->query("
        SELECT prenom, nom, sexe, DATE_FORMAT(birthdate, '%d-%m-%Y') AS birthdate, id_acteur, acteur_url_img
        FROM acteur 
        ");

            require "view/acteur/listActeurs.php";
    }

    /* Infos de l'ACTEUR */
    public function infosActeur($id_acteur)
    {
        $pdo = Connect::connectToDb();
    
        $acteur_name = "$id_acteur";
    
        $request_acteur_infos = $pdo->prepare("
            SELECT a.id_acteur, a.prenom, a.nom, a.sexe, DATE_FORMAT(a.birthdate, '%d/%m/%Y') AS birthdate
            FROM acteur a 
            WHERE a.id_acteur = :id_acteur
        ");
        $request_acteur_infos->execute(["id_acteur" => $id_acteur]);
    
    
        $pdo = Connect::connectToDb();
    
        $acteur_name = "$id_acteur";
    
        $request_acteur_list_films = $pdo->prepare("
            SELECT a.id_acteur, f.titre_film, f.date_sortie, r.role_name, f.id_film, f.film_url_img
            FROM acteur a
            INNER JOIN casting c ON c.acteur_id = a.id_acteur
            INNER JOIN film f ON f.id_film = c.film_id
            INNER JOIN role r ON r.id_role = c.role_id
            WHERE a.id_acteur = :id_acteur
        ");
    
        $request_acteur_list_films->execute(["id_acteur" => $id_acteur]);
    
    
        require "view/acteur/infosActeur.php";
    }
}
