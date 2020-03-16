<?php
$title = "Accueil";
require_once 'layout/header.php';
?>

<div class="jumbotron">
  <h1>TP1</h1>
  <p>Accueil</p>
</div>

<?php 
$query = "SELECT * FROM voiture WHERE visible = 1";
?>
<?php require_once 'admin.php'; ?>
<?php require_once 'layout/footer.php'; ?>
