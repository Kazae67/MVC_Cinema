<?php

namespace Controller;

use Model\Connect;

class FormulairesController {
    public function formulaires() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $sexe = $_POST["sexe"];
            $birthdate = $_POST["birthdate"];
            $biographie = $_POST["biographie"];

            $pdo = Connect::seConnecter();
            $query = "INSERT INTO acteur (prenom, nom, sexe, birthdate, biographie) VALUES (:prenom, :nom, :sexe, :birthdate, :biographie)";
            $statement = $pdo->prepare($query);
            $statement->execute([
                "prenom" => $prenom,
                "nom" => $nom,
                "sexe" => $sexe,
                "birthdate" => $birthdate,
                "biographie" => $biographie
            ]);

            header("Location: index.php?action=listActeurs");
            exit;
        } else {

            require "view/formulaires/formulaires.php";
        }
    }
}
