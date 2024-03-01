<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validar datos (puedes agregar más validaciones según tus necesidades)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill in all fields.";
    exit;
  }

  // Configurar el destinatario del correo electrónico
  $to = "fipizarro@hotmail.com";
  $subject = "Nuevo mensaje de contacto";

  // Construir el cuerpo del correo
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message:\n$message";

  // Enviar el correo electrónico
  $success = mail($to, $subject, $body);

  if ($success) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message. Please try again later.";
  }
} else {
  // Si alguien intenta acceder directamente a process.php sin enviar un formulario, redirigirlos a la página de inicio.
  header("Location: index.html");
  exit;
}

?>