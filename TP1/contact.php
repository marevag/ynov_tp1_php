<?php
$title = "Contact";
require_once 'layout/header.php';
?>

<div class="container mt-4">
  <h1>Contactez-nous</h1>
  <form action="contact_process.php" method="POST">
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nomHelp">
      <small id="nomHelp" class="form-text text-muted">Tallit</small>
    </div>
    <div class="form-group">
      <label for="prenom">Prénom</label>
      <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenomHelp">
      <small id="prenomHelp" class="form-text text-muted">Lola</small>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
      <small id="emailHelp" class="form-text text-muted">adresse@mail.com</small>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</div>


<?php require_once 'layout/footer.php'; ?>