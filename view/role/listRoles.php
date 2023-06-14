<?php
ob_start();

// LISTE DE RÔLES + INFOS
?>
<!-- TOTAL RÔLES -->
<?php $liste = "Les rôles disponibles" . (($request->rowCount() > 1) ? "s" : ""); ?>
<p class="row-count-list">Un total de <?= $request->rowCount() ?> rôle<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES RÔLES -->
<div class="role-card-list">
<?php foreach ($request->fetchAll() as $role): ?>
    <a href="index.php?action=infosRole&id=<?= $role["id_role"] ?>">
        <div class="role-card">
            <div class="role-card-infos">
                <span><?= "Nom : ".$role["role_name"] ?></span>
            </div>
        </div>
    </a>
<?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
require "view/template.php";
?>
