<?php

// Recuperar los datos del formulario
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configurar el correo electrónico
$to = 'Baesp2023@gmail.com';
$subject = 'Formulario de contacto';
$body = "Nombre: $name \n\n Email: $email \n\n Mensaje: $message";

// Enviar el correo electrónico
if(mail($to, $subject, $body)) {
  echo 'Mensaje enviado correctamente';
} else {
  echo 'Error al enviar el mensaje';
}

?>