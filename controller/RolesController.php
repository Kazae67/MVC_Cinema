<?php

namespace Controller;

use Model\Connect;

class RolesController {

    // Liste des ROLES
    public function listRoles()
    {
        $pdo = Connect::connectToDb();
        
        $request = $pdo->query("
            SELECT id_role, role_name, path_img_role
            FROM role
        ");

        require "view/role/listRoles.php";
    }

    // infos ROLE
    public function infosRole($id)
    {
        $pdo = Connect::connectToDb();
    
        $request_role = $pdo->prepare("
        SELECT r.role_name, r.description, GROUP_CONCAT(f.titre_film SEPARATOR ', ') AS films
        FROM role r
        INNER JOIN casting c ON r.id_role = c.role_id
        INNER JOIN film f ON c.film_id = f.id_film
        WHERE r.id_role = :id
    ");
    $request_role->execute(["id" => $id]);
    $role = $request_role->fetch();
    
        $request_acteur = $pdo->prepare("
            SELECT a.prenom, a.nom
            FROM acteur a
            INNER JOIN casting c ON a.id_acteur = c.acteur_id
            WHERE c.role_id = :id
        ");
        $request_acteur->execute(["id" => $id]);
        $acteur = $request_acteur->fetch();
    
        require "view/role/infosRole.php";
    }
}
?>
