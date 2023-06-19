<?php
ob_start();
?>

<!-- Ajouter Realisateur -->
<form action="index.php?action=addRealisateur" method="post">

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

    <input type="submit" name="submit" value="Ajouter le réalisateur">

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>