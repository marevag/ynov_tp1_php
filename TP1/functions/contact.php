<?php

require_once __DIR__ . '/db.php';

function insertContact(
  string $nom,
  string $prenom,
  string $email,
  string $message
) {
  $pdo = getPdo();

  $query = "INSERT INTO contact (nom, prenom, email, message) VALUES (:nom, :prenom, :email, :message)";

  $stmt = $pdo->prepare($query);

  return $stmt->execute([
    'nom' => $nom,
    'prenom' => $prenom,
    'email' => $email,
    'message' => $message
  ]);
}