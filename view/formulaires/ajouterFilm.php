<?php
ob_start();
?>

<!-- Ajouter FILM -->
<form action="index.php?action=ajouterFilm" method="post">

    <label for="titre_film">Film :</label>
    <input type="textarea" name="titre_film" id="titre_film">

    <label>Genre :</label>
    <input type="textarea" name="genre_name" id="genre_name" required>

    <label for="date_sortie">Année :</label>
    <input type="number" name="date_sortie" id="date_sortie">

    <label for="note">Note (0-5) :</label>
    <input type="number" min="0" max="5" name="note" id="note">

    <label for="duree">Durée :</label>
    <input type="number" name="duree" id="duree">

    <label for="synopsis">Synopsis :</label>
    <textarea name="synopsis" rows="5" required></textarea>

    <label>Image :</label>
    <input type="file" name="image" required accept="image/*">

    <input type="submit" name="submit" value="Ajouter le réalisateur">

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
