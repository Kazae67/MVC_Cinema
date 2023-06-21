<?php

namespace Controller;

use Model\Connect;

class FormulairesController {
    // Ajouter ACTEUR
    public function ajouterActeur() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupération des données du formulaire
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_SPECIAL_CHARS);
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_SPECIAL_CHARS);
            $birthdate = filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_SPECIAL_CHARS);
            $biographie = filter_input(INPUT_POST, "biographie", FILTER_SANITIZE_SPECIAL_CHARS);

            // Vérification de la présence de l'image
            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterActeur&error=Veuillez sélectionner une image");
                exit;
            }

            // Traitement de l'image
            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newImageFileName = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgActeurs/";
            $destinationFile = $destinationPath . $newImageFileName;

             // Erreur / Déplacement de l'image vers le dossier de destination
            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=ajouterActeur&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            // Insertion des données dans la base de données
            $pdo = Connect::Connexion();
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

            // Redirection vers la liste des acteurs
            header("Location: index.php?action=listActeurs");
            exit;
        } else {
            // Affiche ajouterActeur.php
            require "view/formulaires/ajouterActeur.php";
        }
    }

    // Ajouter ROLE
    public function ajouterRole() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupération des données du formulaire
            $role_name = filter_input(INPUT_POST, "role_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($role_name) {
                $pdo = Connect::Connexion();

                // Traitement de l'image
                $file = $_FILES["image"];
                $filename = $file["name"];
                $filePathTemporaire = $file["tmp_name"];

                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $newImageFileName = uniqid() . "." . $extension;

                $destinationPath = "public/images/imgRoles/";
                $destinationFile = $destinationPath . $newImageFileName;

                 // Erreur / Déplacement de l'image vers le dossier de destination
                if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                    header("Location: index.php?action=ajouterRole&error=Une erreur s'est produite lors du téléchargement de l'image");
                    exit;
                }

                // Insertion des données dans la base de données
                $insertRoleStatement = $pdo->prepare("
                    INSERT INTO role (role_name, description, path_img_role)
                    VALUES (:role_name, :description, :path_img_role)
                ");

                $insertRoleStatement->execute([
                    "role_name" => $role_name,
                    "description" => $description,
                    "path_img_role" => $newImageFileName
                ]);

                // Redirection vers la liste des rôles
                header('Location: index.php?action=listRoles');
                exit;
            }
        }

        // Affiche ajouterRole.php
        require "view/formulaires/ajouterRole.php";
    }

    // Ajouter GENRE 
    public function ajouterGenre() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupération des données du formulaire
            $genre_name = filter_input(INPUT_POST, "genre_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            if ($genre_name) {
                $pdo = Connect::Connexion();

                // Traitement de l'image
                $file = $_FILES["image"];
                $filename = $file["name"];
                $image_temp_path = $file["tmp_name"];

                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $newImageFileName = uniqid() . "." . $extension;

                $destinationPath = "public/images/imgGenres/";
                $destinationFile = $destinationPath . $newImageFileName;

                // Erreur / Déplacement de l'image vers le dossier de destination
                if (!move_uploaded_file($image_temp_path, $destinationFile)) {
                    header("Location: index.php?action=ajouterGenre&error=Une erreur s'est produite lors du téléchargement de l'image");
                    exit;
                }

                // Insertion des données dans la base de données
                $insertGenreStatement = $pdo->prepare("
                    INSERT INTO genre (genre_name, path_img_genre)
                    VALUES (:genre_name, :path_img_genre)
                ");

                // Redirection vers la liste des genres
                $insertGenreStatement->execute([
                    "genre_name" => $genre_name,
                    "path_img_genre" => $newImageFileName
                ]);

                header('Location: index.php?action=listGenres');
                exit;
            }
        }

        // Affiche ajouterGenre
        require "view/formulaires/ajouterGenre.php";
    }

    // Ajouter REALISATEUR
    public function ajouterRealisateur() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupération des données du formulaire
            $prenom = filter_input(INPUT_POST, "prenom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $sexe = filter_input(INPUT_POST, "sexe", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $birthdate = filter_input(INPUT_POST, "birthdate", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $biographie = filter_input(INPUT_POST, "biographie", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            // Vérification de la présence de l'image
            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterRealisateur&error=Veuillez sélectionner une image");
                exit;
            }

            // Traitement de l'image
            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newImageFileName = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgRealisateurs/";
            $destinationFile = $destinationPath . $newImageFileName;

            // Erreur / Déplacement de l'image vers le dossier de destination
            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=ajouterRealisateur&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            $pdo = Connect::Connexion();
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

            // Redirection vers la liste des réalisateurs
            header("Location: index.php?action=listRealisateurs");
            exit;
        } else {
            // Affiche ajouterRealisateur.php
            require "view/formulaires/ajouterRealisateur.php";
        }
    }

    // Ajouter FILM
    public function ajouterFilm() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Récupération des données du formulaire
            $titre_film = filter_input(INPUT_POST, "titre_film", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $genre_id = filter_input(INPUT_POST, "genre_id", FILTER_SANITIZE_NUMBER_INT);
            $realisateur_id = filter_input(INPUT_POST, "realisateur_id", FILTER_SANITIZE_NUMBER_INT);
            $date_sortie = date("Y", strtotime(filter_input(INPUT_POST, "date_sortie", FILTER_SANITIZE_FULL_SPECIAL_CHARS)));
            $note = filter_input(INPUT_POST, "note", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $duree = filter_input(INPUT_POST, "duree", FILTER_SANITIZE_NUMBER_INT);
            $synopsis = filter_input(INPUT_POST, "synopsis", FILTER_SANITIZE_SPECIAL_CHARS);

            // Vérification de la présence de l'image
            if (!isset($_FILES['image']) || $_FILES['image']['error'] === UPLOAD_ERR_NO_FILE) {
                header("Location: index.php?action=ajouterFilm&error=Veuillez sélectionner une image");
                exit;
            }

            // Traitement de l'image
            $file = $_FILES["image"];
            $filename = $file["name"];
            $filePathTemporaire = $file["tmp_name"];

            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newImageFileName = uniqid() . "." . $extension;

            $destinationPath = "public/images/imgFilms/";
            $destinationFile = $destinationPath . $newImageFileName;

            // Erreur / Déplacement de l'image vers le dossier de destination
            if (!move_uploaded_file($filePathTemporaire, $destinationFile)) {
                header("Location: index.php?action=ajouterFilm&error=Une erreur s'est produite lors du téléchargement de l'image");
                exit;
            }

            $pdo = Connect::Connexion();
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

            // Redirection vers la liste des films 
            header("Location: index.php?action=listFilms");
            exit;
        } else {
            $pdo = Connect::Connexion();
            $selectGenresStatement = $pdo->query("SELECT * FROM genre");
            $genres = $selectGenresStatement->fetchAll();

            $selectRealisateursStatement = $pdo->query("SELECT * FROM realisateur");
            $realisateurs = $selectRealisateursStatement->fetchAll();

            // Afficher ajouterFilm
            require "view/formulaires/ajouterFilm.php";
        }
    }

    public function ajouterCasting()
    {
        $pdo = Connect::Connexion();
    
        // Requête pour ACTEUR
        $requestActeur = $pdo->query("
            SELECT CONCAT(prenom, ' ', nom) AS acteurNomComplet, id_acteur
            FROM acteur
        ");
    
        // Requête pour FILM
        $requestFilm = $pdo->query("
            SELECT id_film, titre_film
            FROM Film
        ");
    
        // Requête pour RÔLE
        $requestRole = $pdo->query("
            SELECT id_role, role_name
            FROM role
        ");
    
        if (isset($_POST['submit'])) {
            // Filtrer pour éviter les failles XSS, puis associer à une variable
            $acteur_id = filter_input(INPUT_POST, "acteur_id", FILTER_SANITIZE_SPECIAL_CHARS);
            $film_id = filter_input(INPUT_POST, "film_id", FILTER_SANITIZE_SPECIAL_CHARS);
            $role_id = filter_input(INPUT_POST, "role_id", FILTER_SANITIZE_SPECIAL_CHARS);
    
            // Vérification
            if ($acteur_id && $film_id && $role_id) {
                $pdo = Connect::Connexion();
    
                $insertCastingsStatement = $pdo->prepare("
                    INSERT INTO casting (acteur_id, film_id, role_id )
                    VALUES (:acteur_id, :film_id, :role_id)
                ");
    
                $insertCastingsStatement->execute(["acteur_id" => $acteur_id, "film_id" => $film_id, "role_id" => $role_id]);
    
                // Redirection vers la liste des castings 
                header('Location: index.php?action=listCastings');
                exit();
            }
        }
    
        // Afficher ajouterCasting.php
        require "view/formulaires/ajouterCasting.php";
    }
}
