<?php
ob_start();
?>

<!-- Ajouter GENRE -->
<form action="index.php?action=ajouterGenre" method="post" enctype="multipart/form-data">

    <!-- GENRE -->
    <label>Genre :</label>
    <input type="textarea" name="genre_name" id="genre_name" required>

    <!-- IMAGE -->
    <label>Image :</label>
    <input type="file" name="image" id="image" required>

    <!-- BOUTON -->
    <input type="submit" name="submit" value="Ajouter le genre">
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>