<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$telefono = $_POST['subject'];
$empresa = $_POST['message'];

$header = 'from: '.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version:1.0 \r\n";
$header .= "content-Type:text/plain";

$message = "este message fue enviado por: ".$nombre."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .= "Telefono: ".$subject."\r\n";
$message .= "message: ".$_POST['message']."\r\n";
$message .= "enviado el: ".date('d/m/Y',time());


$para = 'innovamundo00@gmail.com';
$asunto = 'Mensaje de mi web';

mail($para,$asunto,utf8_decode($message), $header);

echo "<script type='text/javascript'>alert('Tu message ha sido enviado exitosamente');</script>";

header("Location:index.html");

?>

