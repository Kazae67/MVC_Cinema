<?php
ob_start();
?>

<div class="container">
    <div class="content">
        <div class="role-card-list">
            <div class="role-card-infos">
                <div class="role-card-detail">
                    <?php if ($acteur && isset($acteur["prenom"]) && isset($acteur["nom"])): ?>
                        <span><b>Acteur :</b> <?= $acteur["prenom"] . " " . $acteur["nom"] ?></span>
                    <?php else: ?>
                        <span><b>Acteur :</b> Aucun acteur trouvé</span>
                    <?php endif; ?>
                    <?php if ($role && isset($role["description"])): ?>
                        <span><b>Description :</b> <?= $role["description"] ?></span>
                    <?php endif; ?>
                    <?php if ($role && isset($role["films"])): ?>
                        <span><b>Films :</b> <?= $role["films"] ?></span>
                    <?php endif; ?>
                    <?php if ($role && isset($role["titre_film"])): ?>
                        <span><b>Film :</b> <?= $role["titre_film"] ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/role/infoRole.css">';
require "view/template.php";
?>
