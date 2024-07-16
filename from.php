<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get data from form 
  $name = $_POST['name'];
  $company = $_POST['company'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  
  $to = "ulyssesalvarez.mx@gmail.com";
  $subject = "Form landing lleva tu tag Televía";
  
  // The following text will be sent
  $txt ="Nombre: ". $name . 
        "\r\nEmpresa: " . $company . 
        "\r\nTeléfono: " . $phone .
        "\r\nEmail: " . $email; 
  
  $headers = "From: ulyssesalvarez.mx@gmail.com";

  if (mail($to, $subject, $txt, $headers)) {
    echo '<div class="message-popup-success">¡Mensaje enviado con éxito! Gracias por contactarnos.</div>';
  } else {
    echo '<div class="message-popup-error">Error al enviar el mensaje. Por favor, inténtalo más tarde.</div>';
  }
} 
?>