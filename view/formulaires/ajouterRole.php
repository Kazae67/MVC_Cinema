<?php
ob_start();
?>

<!-- Ajouter RÔLE -->
<form action="index.php?action=ajouterRole" method="post" enctype="multipart/form-data">
    <label>Rôle :</label>
    <input type="textarea" name="role_name" id="role_nom" required>

    <!-- DESCRIPTION -->
    <label>Description :</label>
    <textarea name="description" rows="5" required></textarea>

    <!-- IMAGE -->
    <label>Image :</label>
    <input type="file" name="image" accept="image/*" required>

    <!-- BOUTON -->
    <input type="submit" name="submit" value="Ajouter le rôle">
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
