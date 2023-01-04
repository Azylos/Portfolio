<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "tomabarret@ymail.com";
  $subject = "Nouveau message de contact";
  $headers = "From: $email\n";
  $headers .= "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $body = "<p>Nouveau message de contact</p>
           <p>Nom: $name</p>
           <p>Email: $email</p>
           <p>Message:</p>
           <p>$message</p>";
  if (mail($to, $subject, $body, $headers)) {
    echo "Le message a été envoyé avec succès.";
  } else {
    echo "Une erreur est survenue lors de l'envoi du message.";
  }
  ?>