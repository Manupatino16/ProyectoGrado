<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if ($_POST) {

$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];


require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';
require 'PHPMailer\Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'manuelabeta38@gmail.com';                     //SMTP username
    $mail->Password   = 'dosparauno34';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('manuelabeta38@gmail.com', $nombre);
    $mail->addAddress('manuelabeta38@gmail.com');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mensaje patitas sonrientes';
    $mail->Body    = $mensaje;
    $mail->send();


} catch (Exception $e) {
    echo "El mensaje no pudo enviarse. Mailer Error: {$mail->ErrorInfo}";

}
}
?>
