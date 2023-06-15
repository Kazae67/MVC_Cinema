
<?php

    ob_start();
    ?>
<?php $liste = "Les genres disponibles" . (($request->rowCount() > 1) ? "s" : ""); ?>
<p class="row-count-list">Un total de <?= $request->rowCount() ?> genre<?= ($request->rowCount() > 1) ? "s" : "" ?> disponible<?= ($request->rowCount() > 1) ? "s" : "" ?></p>

    <div class="genre-card-list">
            <?php
            foreach ($request->fetchAll() as $genre) { ?>
			        <a href="index.php?action=infosGenre&id=<?= $genre["id_genre"] ?>">
                        <div class="genre-card">
                            <span><?= ucfirst($genre["genre_name"]) ?></span>
                        </div>
			        </a>
            <?php } ?>
    </div>
<?php

$content = ob_get_clean();
require "view/template.php"; ?>