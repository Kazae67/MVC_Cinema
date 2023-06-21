<?php
ob_start();
$imagePath = 'public/images/imgFilms/';
?>

<div class="container">
    <div class="content">
        <div class="role-card-list">
            <div class="role-card-infos">
                <div class="role-card-detail">
                    
                    <!-- PRENOM | NOM -->
                    <!-- Vérifie si l'acteur existe et si les valeurs 'prenom' et 'nom' sont définies -->
                    <?php if ($acteur && isset($acteur["prenom"]) && isset($acteur["nom"])): ?>
                        <span class="film-info"><b>Acteur :</b> 
                            <a href="index.php?action=infosActeur&id=<?= $acteur['id_acteur'] ?>">
                                <?= $acteur["prenom"] . " " . $acteur["nom"] ?>
                            </a>
                        </span>
                        <!-- Si l'acteur n'est pas trouvé, affiche un message d'erreur -->
                    <?php else: ?>
                        <span class="film-info"><b>Acteur :</b> Aucun acteur trouvé</span>
                    <?php endif; ?>

                    <!-- DESCRIPTION -->
                    <!-- Vérifie si le rôle existe et si la valeur 'description' est définie -->
                    <?php if ($role && isset($role["description"])): ?>
                        <span class="film-info"><b>Description :</b> <?= $role["description"] ?></span>
                    <?php endif; ?>

                    <!-- FILMS -->
                    <!-- Vérifie si le rôle existe et si la valeur 'films' est définie -->
                    <?php if ($role && isset($role["films"])): ?>
                        <span><b>Films :</b></span>
                        <div class="film-list">
                            <!-- Parcourt la liste des films -->
                            <?php foreach ($films as $film): ?>
                                <div class="film-item">
                                    <div class="film-container">
                                        <!-- Affiche l'image du film avec le lien vers les informations du film -->
                                        <a href="index.php?action=infosFilm&id=<?= $film['id_film'] ?>">
                                            <img src="<?= $imagePath . $film['path_img_film'] ?>" alt="<?= $film['titre_film'] ?>" class="film-image">
                                        </a>
                                        <h3><span class="film-title"><?= $film['titre_film'] ?></span></h3>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <!-- Vérifie si le rôle existe et si la valeur 'titre_film' est définie -->
                    <?php if ($role && isset($role["titre_film"])): ?>
                        <span class="film-info"><b>Film :</b> <?= $role["titre_film"] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/role/infosRole.css">';
require "view/template.php";
?>
