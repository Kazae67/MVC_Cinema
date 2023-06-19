<?php
ob_start();
?>

<form action="index.php?action=ajouterGenre" method="post">
    <label>Nom du genre :</label>
    <input type="textarea" name="genre_name" id="genre_name">
    <input type="submit" name="submit" value="Ajouter le genre">
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
