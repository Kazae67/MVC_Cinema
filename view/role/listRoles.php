
<?php ob_start(); ?>


<?php $liste = "Nombre de Rôle".($request->rowCount() > 1 ? "s" : "")." disponible".($request->rowCount() > 1 ? "s" : ""); ?>
<p class="row-count-list"> Un total de <?= $request->rowCount() ?> rôle<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

<!-- LISTE DES RÔLES -->
<div class="role-card-list">
    <?php foreach ($request->fetchAll() as $role): ?>
        <a href="index.php?action=infosRole&id=<?= $role["id_role"] ?>">
            <div class="role-card">
                <div class="role-card-infos">
                    <span><?= "Role : ".$role["role_name"] ?></span>
                </div>
                <!-- IMAGE -->
                <?php
                $imagePath = "public/images/imgRoles/";
                $imageFileName = $role["path_img_role"];
                $imageUrl = $imagePath . $imageFileName;
                ?>
                <img class="image-role" src="<?= $imageUrl ?>" alt="photo du role <?= ucfirst($role["role_name"]) ?>">
            </div>
        </a>
    <?php endforeach; ?>
</div>

<?php
$content = ob_get_clean();
$cssLink = '<link rel="stylesheet" href="public/css/role/listRoles.css">';
require "view/template.php";
?>
