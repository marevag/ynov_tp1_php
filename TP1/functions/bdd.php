<?php

function getPdo(): PDO
{
  try {
    // integration de la bdd
    $pdo = new PDO(
      "mysql:host=localhost;dbname=tp1php",
      "b1",
      "ynovb1"
    );
    return $pdo;
  } catch(PDOException $ex) {
    exit("Erreur lors de la connexion à la base de données");
  }
}