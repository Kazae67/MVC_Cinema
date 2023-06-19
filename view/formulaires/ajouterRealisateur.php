<?php
ob_start();
?>

<!-- Ajouter Realisateur -->
<form action="index.php?action=ajouterRealisateur" method="post" enctype="multipart/form-data">

    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>
    
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" required>
    
    <label for="sexe">Sexe :</label>
    <select name="sexe" required>
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select>

    <label>Date de naissance :</label>
    <input type="date" name="birthdate" id="birthdate">

    <label>Biographie :</label>
    <textarea name="biographie" rows="5" required></textarea>

    <label>Image :</label>
    <input type="file" name="image" required accept="image/*">

    <input type="submit" name="submit" value="Ajouter le réalisateur">
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
