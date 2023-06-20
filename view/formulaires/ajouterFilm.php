<?php
ob_start();
?>

<!-- Ajouter FILM -->


<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
