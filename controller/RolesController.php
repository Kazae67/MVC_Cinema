<?php

namespace Controller;

use Model\Connect;

class RolesController {
    public function listRoles()
    {
        $pdo = Connect::connectToDb();
        $request = $pdo->query("
            SELECT role_name
            FROM role
        ");
    
        require "view/role/listRoles.php";
    }
}