<?php
ob_start();

$imagePath = 'public/images/imgFilms/';
?>

<div class="container">
    <div class="content">
        <div class="role-card-list">
            <div class="role-card-infos">
                <div class="role-card-detail">
                    <?php if ($acteur && isset($acteur["prenom"]) && isset($acteur["nom"])): ?>
                        <span class="film-info"><b>Acteur :</b> <?= $acteur["prenom"] . " " . $acteur["nom"] ?></span>
                    <?php else: ?>
                        <span class="film-info"><b>Acteur :</b> Aucun acteur trouvé</span>
                    <?php endif; ?>

                    <?php if ($role && isset($role["description"])): ?>
                        <span class="film-info"><b>Description :</b> <?= $role["description"] ?></span>
                    <?php endif; ?>

                    <?php if ($role && isset($role["films"])): ?>
                        <span><b>Films :</b></span>
                        <div class="film-list">
                            <?php foreach ($films as $film): ?>
                                <div class="film-item">
                                    <div class="film-container">
                                        <img src="<?= $imagePath . $film['path_img_film'] ?>" alt="<?= $film['titre_film'] ?>" class="film-image">
                                        <span class="film-title"><?= $film['titre_film'] ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

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
