<?php
ob_start();
?>

<form action="index.php?action=formulaires" method="POST" enctype="multipart/form-data">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>

    <label for="sexe">Sexe :</label>
    <select name="sexe" required>
        <option value="M">Masculin</option>
        <option value="F">Féminin</option>
    </select>

    <label for="birthdate">Date de naissance :</label>
    <input type="date" name="birthdate" required>

    <label for="biographie">Biographie :</label>
    <textarea name="biographie" rows="4"></textarea>

    <label for="image">Image :</label>
    <input type="file" name="image" accept="image/*">

    <button type="submit">Ajouter</button>
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
