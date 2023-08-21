<?php


require ('PHPMailer/PHPMailer.php');
require ('PHPMailer/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;

$nombre = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$about = $_POST['about'];
$interests = $_POST['check_list'];
//$fecha = $_POST['fecha'];
$message = $_POST['message'];

print_r($_POST);

for ($i=0;$i<count($about);$i++)    
{     
 $about2 = $about[$i];   
} 

$interestsSelect = implode(", ", $interests);

$body = <<<HTML
    <h2>Datos de contacto</h2>
    <p>Nombre: $nombre <br>Email: $email<br>Teléfono: $phone<br>About: $about2<br>Intereses: $interestsSelect</p>
    <h2>Mensaje</h2>
    $message
HTML;

$mailer = new PHPMailer();
$mailer->setFrom($email, "$nombre");
$mailer-> addAddress('contacto@vivacsdelplata.com','Sitio');
$mailer->Subject = "Mensaje de: $nombre";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';
$rta = $mailer->send();

var_dump($rta);

if($rta = true){
    header("location: page4.html");
}

?>
