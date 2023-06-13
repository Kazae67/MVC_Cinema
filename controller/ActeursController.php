<?php

namespace Controller;

use Model\Connect;

class ActeursController {

    // Liste des ACTEURS
    public function listActeurs()
    {
        $pdo = Connect::connectToDb();

        $request = $pdo->query("
            SELECT prenom, nom, sexe, DATE_FORMAT(birthdate, '%d-%m-%Y') AS birthdate, id_acteur, acteur_url_img
            FROM acteur 
        ");

        require "view/acteur/listActeurs.php";
    }

    // Infos de l'ACTEUR 
    public function infosActeur($id_acteur)
    {
        $pdo = Connect::connectToDb();

        $request_acteur_infos = $pdo->prepare("
            SELECT a.id_acteur, a.prenom, a.nom, a.sexe, DATE_FORMAT(a.birthdate, '%d/%m/%Y') AS birthdate
            FROM acteur a 
            WHERE a.id_acteur = :id_acteur
        ");
        $request_acteur_infos->execute(["id_acteur" => $id_acteur]);

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
?>
