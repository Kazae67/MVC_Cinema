<?php

namespace Controller;
use Model\Connect;

class CinemaController {

    /**
     * Lister les films
     */
    public function listFilms() {
        $pdo = Connect::seConnecter();
        $requete = $pdo->query("
        SELECT titre, date, affiche, duree, synopsis, note, id_realisateur
        FROM film
        ");
        
        // Récupérer les résultats de la requête
        $films = $requete->fetchAll();

        require "app/views/listFilms.php";
    }
}
?>