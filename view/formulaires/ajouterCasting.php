<?php
ob_start();
?>

<form action="index.php?action=ajouterCasting" method="post">
  <div class="form-group">
    <label for="acteur_id">Acteur</label>
    <select name="acteur_id" id="acteur_id" class="form-control">
      <?php while ($acteur = $requestActeur->fetch(PDO::FETCH_ASSOC)) : ?>
        <option value="<?= $acteur['id_acteur'] ?>"><?= $acteur['acteurNomComplet'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="film_id">Film</label>
    <select name="film_id" id="film_id" class="form-control">
      <?php while ($film = $requestFilm->fetch(PDO::FETCH_ASSOC)) : ?>
        <option value="<?= $film['id_film'] ?>"><?= $film['titre_film'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="role_id">Rôle</label>
    <select name="role_id" id="role_id" class="form-control">
      <?php while ($role = $requestRole->fetch(PDO::FETCH_ASSOC)) : ?>
        <option value="<?= $role['id_role'] ?>"><?= $role['role_name'] ?></option>
      <?php endwhile; ?>
    </select>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Ajouter le casting</button>
</form>

<?php
$cssLink = '<link rel="stylesheet" href="public/css/formulaires/formulaires.css">';
$content = ob_get_clean();
require "view/template.php";
?>
