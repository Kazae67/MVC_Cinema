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

            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=formulaires&error=Veuillez sélectionner une image");
                exit;
            }

            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newFilename = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgActeurs/";
            $destinationFile = $destinationPath . $newFilename;

            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=formulaires&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
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
                "image" => $newFilename
            ]);

            header("Location: index.php?action=listActeurs");
            exit;
        } else {
            require "view/formulaires/formulaires.php";
        }
    }
}
