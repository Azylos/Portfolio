<?php
  // Vérifie que la méthode utilisée pour envoyer le formulaire est bien "GET"
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Récupère les données du formulaire
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    // Affiche les données du formulaire
    echo "Nom : $name";
    echo "<br>";
    echo "Adresse e-mail : $email";
    echo "<br>";
    echo "Message : $message";
  }
?>
