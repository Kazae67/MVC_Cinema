<?php
ob_start();
?>

<form action="index.php?action=ajouterCasting" method="post">


</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
