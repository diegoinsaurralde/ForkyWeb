<?php 

$destinatario = 'diego.insaurralde@hotmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$header = "Enviado desde la pagina de Forky";
$mensajeCompleto = "\nMensaje: " . $message . "\r\n" . "\nTelefono: " . $tel . "\nEmail: " . $email . "\nAtentament: " . $name;

mail($destinatario, $name, $mensajeCompleto, $header);

echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";


?>