<?php
$title = "Admin";
require_once 'layout/header.php';
?>

<div class="container">
    <h2>Liste des voitures</h2>
    <form methode="post">
    <div>
        <label for="choose">Afficher les voitures</label>
        <select>
            <option value="1">Toutes les voitures<br>
            <option value="2">Voitures visibles<br>
            <option value="3">Voitures non visibles<br>
        </select>
    </div>
    <div>
    <input type="submit" name="submit" value="Mettre à jour"><br>
    </div>
    </form>
</div>

<?php require_once 'layout/footer.php'; ?>