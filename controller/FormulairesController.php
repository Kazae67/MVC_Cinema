<?php

namespace Controller;

use Model\Connect;

class FormulairesController {

    // ajouter Acteur
    public function ajouterActeur() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $prenom = $_POST["prenom"];
            $nom = $_POST["nom"];
            $sexe = $_POST["sexe"];
            $birthdate = $_POST["birthdate"];
            $biographie = $_POST["biographie"];

            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterActeur&error=Veuillez sélectionner une image");
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
                header("Location: index.php?action=ajouterActeur&error=Une erreur s'est produite lors du téléchargement de l'image");
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
            require "view/formulaires/ajouterActeur.php";
        }
    }

    // Ajouter Role
 public function ajouterRole()
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $role_name = filter_input(INPUT_POST, "role_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if ($role_name) {
            $pdo = Connect::seConnecter();

            $image = $_FILES["image"];
            $image_filename = $image["name"];
            $image_temp_path = $image["tmp_name"];

            $extension = pathinfo($image_filename, PATHINFO_EXTENSION);
            $new_image_filename = uniqid() . "." . $extension;

            $destination_path = "public/images/imgRoles/";
            $destination_file = $destination_path . $new_image_filename;

            if (!move_uploaded_file($image_temp_path, $destination_file)) {
                header("Location: index.php?action=ajouterRole&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            $insertRoleStatement = $pdo->prepare("
                INSERT INTO role (role_name, description, path_img_role)
                VALUES (:role_name, :description, :path_img_role)
            ");

            $insertRoleStatement->execute([
                "role_name" => $role_name,
                "description" => $description,
                "path_img_role" => $new_image_filename
            ]);

            header('Location: index.php?action=listRoles');
            exit;
        }
    }

            require "view/formulaires/ajouterRole.php";
    }


    public function ajouterGenre()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $genre_name = filter_input(INPUT_POST, "genre_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
            if ($genre_name) {
                $pdo = Connect::seConnecter();
    
                $image = $_FILES["image"];
                $image_filename = $image["name"];
                $image_temp_path = $image["tmp_name"];
    
                $extension = pathinfo($image_filename, PATHINFO_EXTENSION);
                $new_image_filename = uniqid() . "." . $extension;
    
                $destination_path = "public/images/imgGenres/";
                $destination_file = $destination_path . $new_image_filename;
    
                if (!move_uploaded_file($image_temp_path, $destination_file)) {
                    header("Location: index.php?action=ajouterGenre&error=Une erreur s'est produite lors du téléchargement de l'image");
                    exit;
                }
    
                $insertGenreStatement = $pdo->prepare("
                    INSERT INTO genre (genre_name, path_img_genre)
                    VALUES (:genre_name, :path_img_genre)
                ");
    
                $insertGenreStatement->execute([
                    "genre_name" => $genre_name,
                    "path_img_genre" => $new_image_filename
                ]);
    
                header('Location: index.php?action=listGenres');
                exit;
            }
        }
    
        require "view/formulaires/ajouterGenre.php";
    }

	public function ajouterRealisateur()
	{

		if (isset($_POST["submit"])) {

			$prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_SPECIAL_CHARS);
			$nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
			$sexe= filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_SPECIAL_CHARS);
			$birthdate= filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_SPECIAL_CHARS);

			if ($prenom && $nom && $sexe && $birthdate) {

				$pdo = Connect::seConnecter();

				$stmt = $pdo->prepare("
				INSERT INTO realisateur (prenom, nom, sexe, birthdate)
				VALUES (:prenom, :nom, :sexe, :birthdate)
				");

				$stmt->execute(["prenom" => $prenom, "nom" => $nom, "sexe" => $sexe, "birthdate" => $birthdate]);

				header('location:index.php?action=listRealisateurs');
				die();
			}
		}

		require "view/formulaires/ajouterRealisateur.php";
	}
}
?>
