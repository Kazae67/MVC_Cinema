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

            if (isset($_FILES["image"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                $file = $_FILES["image"];
                $filename = $file["name"];
                $destinationFileTemporaire = $file["tmp_name"];

                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $newFilename = uniqid() . "." . $extension;

                $destinationPath = "public/images/imgActeurs/";
                $destinationFile = $destinationPath . $newFilename;
                move_uploaded_file($destinationFileTemporaire, $destinationFile);

                $imagePath = $newFilename;
            } else {
                $imagePath = "default.jpg";
            }

            $pdo = Connect::seConnecter();
            $query = "INSERT INTO acteur (prenom, nom, sexe, birthdate, biographie, path_img_acteur) VALUES (:prenom, :nom, :sexe, :birthdate, :biographie, :image)";
            $statement = $pdo->prepare($query);
            $statement->execute([
                "prenom" => $prenom,
                "nom" => $nom,
                "sexe" => $sexe,
                "birthdate" => $birthdate,
                "biographie" => $biographie,
                "image" => $imagePath
            ]);

            header("Location: index.php?action=listActeurs");
            exit;
        } else {

            require "view/formulaires/formulaires.php";
        }
    }
}
