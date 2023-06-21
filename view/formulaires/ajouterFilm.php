<?php ob_start(); ?>

<!-- Ajouter FILM -->
<form action="index.php?action=ajouterFilm" method="post" enctype="multipart/form-data">

    <!-- TITRE -->
    <label for="titre_film">Titre :</label>
    <input type="text" name="titre_film" id="titre_film" required>

    <!-- GENRE -->
    <label for="genre_id">Genre :</label>
    <select name="genre_id" id="genre_id">
        <?php foreach ($genres as $genre) : ?>
            <option value="<?php echo $genre['id_genre']; ?>"><?php echo $genre['genre_name']; ?></option>
        <?php endforeach; ?>
    </select>

    <!-- REALISATEUR -->
    <label for="realisateur_id">Réalisateur :</label>
    <select name="realisateur_id" id="realisateur_id">
        <?php foreach ($realisateurs as $realisateur) : ?>
            <option value="<?php echo $realisateur['id_realisateur']; ?>"><?php echo $realisateur['prenom'] . ' ' . $realisateur['nom']; ?></option>
        <?php endforeach; ?>
    </select>

    <!-- DATE DE SORTIE -->
    <label for="date_sortie">Date de sortie :</label>
    <input type="text" name="date_sortie" id="date_sortie" pattern="\year{4}" placeholder="Année de sortie" required>

    <!-- NOTE -->
    <label for="note">Note :</label>
    <input type="number" name="note" id="note" min="0" max="5" required>

    <!-- DURÉE -->
    <label for="duree">Durée (en minutes) :</label>
    <input type="number" name="duree" id="duree" min="0" required>

    <!-- SYNOPSIS -->
    <label for="synopsis">Synopsis :</label>
    <textarea name="synopsis" id="synopsis" rows="5" required></textarea>

    <!-- IMAGE -->
    <label for="image">Image :</label>
    <input type="file" name="image" id="image" accept="image/*" required>

    <!-- BOUTON -->
    <input type="submit" value="Ajouter">
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
