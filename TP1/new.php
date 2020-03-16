<?php
$title = "Ajout d'une voiture";
require_once 'layout/header.php';
?>

<div class="container mt-4">
  <h1>Ajouter votre voiture</h1>
  <form action="contact_process.php" method="POST">
    <div class="form-group">
      <label for="marque">Marque</label>
      <input type="text" class="form-control" id="marque" name="marque" aria-describedby="marqueHelp">
      <small id="marqueHelp" class="form-text text-muted">Audi</small>
    </div>
    <div class="form-group">
      <label for="annee">Année</label>
      <input type="text" class="form-control" id="annee" name="annee" aria-describedby="anneeHelp">
      <small id="anneeHelp" class="form-text text-muted">2015</small>
    </div>
    <div class="form-group">
      <label for="nbkm">Nombre de kilometre</label>
      <input type="nbkm" class="form-control" id="nbkm" name="nbkm" aria-describedby="nbkmHelp">
      <small id="nbkmHelp" class="form-text text-muted">200000</small>
    </div>
    <div class="form-group">
      <label for="prix">Prix</label>
      <input type="prix" class="form-control" id="prix" name="prix" aria-describedby="prixHelp">
      <small id="prixHelp" class="form-text text-muted">25000</small>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>


<?php require_once 'layout/footer.php'; ?>