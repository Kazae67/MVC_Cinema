
<?php

    ob_start();
    ?>
    <p class="row-count-list"> Nous possédons un total de <?= $request->rowCount() ?> roles</p>

<div class="film-card-list">
    <?php foreach ($request->fetchAll() as $role) { ?>
        <div class="film-card">
            <span><?= $role["role_name"] ?></span>
        </div>
    <?php } ?>
</div>
<?php

$content = ob_get_clean();


require "view/template.php"; ?>