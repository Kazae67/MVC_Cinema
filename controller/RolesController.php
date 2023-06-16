<?php

namespace Controller;

use Model\Connect;

class RolesController {

    public function listRoles() {
        $pdo = Connect::seConnecter();
        
        $query = "
            SELECT r.id_role, r.role_name, r.path_img_role
            FROM role r
        ";

        $request = $pdo->query($query);

        require "view/role/listRoles.php";
    }

    public function infosRole($id) {
        $pdo = Connect::seConnecter();

        $query_role = "
            SELECT r.role_name, r.description, GROUP_CONCAT(f.titre_film SEPARATOR ', ') AS films
            FROM role r
            INNER JOIN casting c ON r.id_role = c.role_id
            INNER JOIN film f ON c.film_id = f.id_film
            WHERE r.id_role = :id
        ";

        $request_role = $pdo->prepare($query_role);
        $request_role->execute(["id" => $id]);
        $role = $request_role->fetch();

        $query_acteur = "
            SELECT a.id_acteur, a.prenom, a.nom
            FROM acteur a
            INNER JOIN casting c ON a.id_acteur = c.acteur_id
            WHERE c.role_id = :id
        ";

        $request_acteur = $pdo->prepare($query_acteur);
        $request_acteur->execute(["id" => $id]);
        $acteur = $request_acteur->fetch();

        // Récupération des informations sur les films du rôle
        $query_films = "
            SELECT f.titre_film, f.path_img_film, f.id_film
            FROM film f
            INNER JOIN casting c ON f.id_film = c.film_id
            WHERE c.role_id = :id
        ";

        $request_films = $pdo->prepare($query_films);
        $request_films->execute(["id" => $id]);
        $films = $request_films->fetchAll();

        require "view/role/infosRole.php";
    }
}
