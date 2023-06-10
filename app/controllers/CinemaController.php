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
        SELECT titre, annee_sortie
        FROM film
        ");
        
        // Récupérer les résultats de la requête
        $films = $requete->fetchAll();

        require "view/listFilms.php";
    }
}
?>