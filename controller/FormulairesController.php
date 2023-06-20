<?php

namespace Controller;

use Model\Connect;

class FormulairesController {
    // Ajouter ACTEUR
    public function ajouterActeur() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_SPECIAL_CHARS);
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_SPECIAL_CHARS);
            $birthdate = filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_SPECIAL_CHARS);
            $biographie = filter_input(INPUT_POST, "biographie", FILTER_SANITIZE_SPECIAL_CHARS);

            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterActeur&error=Veuillez sélectionner une image");
                exit;
            }

            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newImageFileName = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgActeurs/";
            $destinationFile = $destinationPath . $newImageFileName;

            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=ajouterActeur&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            $pdo = Connect::seConnecter();
            $query = "INSERT INTO acteur (prenom, nom, sexe, birthdate, biographie, path_img_acteur) VALUES (:prenom, :nom, :sexe, :birthdate, :biographie, :image)";
            $insertActeurStatement = $pdo->prepare($query);
            $insertActeurStatement->execute([
                "prenom" => $prenom,
                "nom" => $nom,
                "sexe" => $sexe,
                "birthdate" => $birthdate,
                "biographie" => $biographie,
                "image" => $newImageFileName
            ]);

            header("Location: index.php?action=listActeurs");
            exit;
        } else {
            require "view/formulaires/ajouterActeur.php";
        }
    }

    // Ajouter ROLE
    public function ajouterRole() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $role_name = filter_input(INPUT_POST, "role_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($role_name) {
                $pdo = Connect::seConnecter();

                $file = $_FILES["image"];
                $filename = $file["name"];
                $filePathTemporaire = $file["tmp_name"];

                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $newImageFileName = uniqid() . "." . $extension;

                $destinationPath = "public/images/imgRoles/";
                $destinationFile = $destinationPath . $newImageFileName;

                if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
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
                    "path_img_role" => $newImageFileName
                ]);

                header('Location: index.php?action=listRoles');
                exit;
            }
        }

        require "view/formulaires/ajouterRole.php";
    }

    // Ajouter GENRE 
    public function ajouterGenre() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $genre_name = filter_input(INPUT_POST, "genre_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($genre_name) {
                $pdo = Connect::seConnecter();

                $file = $_FILES["image"];
                $filename = $file["name"];
                $image_temp_path = $file["tmp_name"];

                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $newImageFileName = uniqid() . "." . $extension;

                $destinationPath = "public/images/imgGenres/";
                $destinationFile = $destinationPath . $newImageFileName;

                if (!move_uploaded_file($image_temp_path, $destinationFile)) {
                    header("Location: index.php?action=ajouterGenre&error=Une erreur s'est produite lors du téléchargement de l'image");
                    exit;
                }

                $insertGenreStatement = $pdo->prepare("
                    INSERT INTO genre (genre_name, path_img_genre)
                    VALUES (:genre_name, :path_img_genre)
                ");

                $insertGenreStatement->execute([
                    "genre_name" => $genre_name,
                    "path_img_genre" => $newImageFileName
                ]);

                header('Location: index.php?action=listGenres');
                exit;
            }
        }

        require "view/formulaires/ajouterGenre.php";
    }

    // Ajouter REALISATEUR
    public function ajouterRealisateur() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $birthdate = filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $biographie = filter_input(INPUT_POST, "biographie", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterRealisateur&error=Veuillez sélectionner une image");
                exit;
            }

            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newImageFileName = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgRealisateurs/";
            $destinationFile = $destinationPath . $newImageFileName;

            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=ajouterRealisateur&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            $pdo = Connect::seConnecter();
            $query = "INSERT INTO realisateur (prenom, nom, sexe, birthdate, biographie, path_img_realisateur) VALUES (:prenom, :nom, :sexe, :birthdate, :biographie, :image)";
            $insertRealisateurStatement = $pdo->prepare($query);
            $insertRealisateurStatement->execute([
                "prenom" => $prenom,
                "nom" => $nom,
                "sexe" => $sexe,
                "birthdate" => $birthdate,
                "biographie" => $biographie,
                "image" => $newImageFileName
            ]);

            header("Location: index.php?action=listRealisateurs");
            exit;
        } else {
            require "view/formulaires/ajouterRealisateur.php";
        }
    }

    // Ajouter FILM
    public function ajouterFilm() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $titre_film = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $genre_id = filter_input(INPUT_POST, "genre_id", FILTER_SANITIZE_NUMBER_INT);
            $realisateur_id = filter_input(INPUT_POST, "realisateur_id", FILTER_SANITIZE_NUMBER_INT);
            $date_sortie = date("Y", strtotime(filter_input(INPUT_POST, "date_sortie", FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
            $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_NUMBER_INT);
            $synopsis = filter_input(INPUT_POST, "synopsis", FILTER_SANITIZE_SPECIAL_CHARS);

            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterFilm&error=Veuillez sélectionner une image");
                exit;
            }

            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newImageFileName = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgFilms/";
            $destinationFile = $destinationPath . $newImageFileName;

            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=ajouterFilm&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            $pdo = Connect::seConnecter();
            $query = "INSERT INTO film (titre_film, genre_id, realisateur_id, date_sortie, note, duree, synopsis, path_img_film)
                      VALUES (:titre_film, :genre_id, :realisateur_id, :date_sortie, :note, :duree, :synopsis, :image)";
            $insertFilmStatement = $pdo->prepare($query);
            $insertFilmStatement->execute([
                "titre_film" => $titre_film,
                "genre_id" => $genre_id,
                "realisateur_id" => $realisateur_id,
                "date_sortie" => $date_sortie,
                "note" => $note,
                "duree" => $duree,
                "synopsis" => $synopsis,
                "image" => $newImageFileName
            ]);

            header("Location: index.php?action=listFilms");
            exit;
        } else {
            $pdo = Connect::seConnecter();
            $selectGenresStatement = $pdo->query("SELECT * FROM genre");
            $genres = $selectGenresStatement->fetchAll();

            $selectRealisateursStatement = $pdo->query("SELECT * FROM realisateur");
            $realisateurs = $selectRealisateursStatement->fetchAll();

            require "view/formulaires/ajouterFilm.php";
        }
    }

    // ajouter CASTING
    public function ajouterCasting(){
        require "view/formulaires/ajouterCasting.php";
    }
}
