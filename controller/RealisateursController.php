<?php

namespace Controller;

use Model\Connect;

class RealisateursController {
    
    /* Liste des REALISATEURS */
    public function listRealisateurs() {
        $pdo = Connect::Connexion();
        
        $query = "
            SELECT prenom, nom, sexe, birthdate, id_realisateur, path_img_realisateur
            FROM realisateur
        ";

        $request = $pdo->query($query);

        // Affiche la vue listRealisateurs.php
        require "view/realisateur/listRealisateurs.php"; 
    }

    /* Infos du REALISATEUR */
    public function infosRealisateur($id_realisateur) {
        $pdo = Connect::Connexion();

        $query_realisateur_infos = "
            SELECT DISTINCT rea.id_realisateur, rea.prenom, rea.nom, rea.birthdate, rea.path_img_realisateur, rea.biographie
            FROM realisateur rea
            WHERE rea.id_realisateur = :id_realisateur
        ";
        
        // Récupère les informations du réalisateur
        $request_realisateur_infos = $pdo->prepare($query_realisateur_infos);
        $request_realisateur_infos->execute(["id_realisateur" => $id_realisateur]);

    
        $query_realisateur_list_films = "
            SELECT f.titre_film, f.date_sortie, f.duree, f.path_img_film, id_film
            FROM realisateur rea
            INNER JOIN film f ON f.realisateur_id = rea.id_realisateur
            WHERE rea.id_realisateur = :id_realisateur
        ";
        // Récupère la liste des films réalisés
        $request_realisateur_list_films = $pdo->prepare($query_realisateur_list_films);
        $request_realisateur_list_films->execute(["id_realisateur" => $id_realisateur]);

        
        // Affiche la vue infosRealisateur.php
        require "view/realisateur/infosRealisateur.php"; 
    }
}
