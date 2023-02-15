<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.php">
	<title>Document</title>
</head>
<body>
	
</body>

<footer>
<?php
$de		= filter_input(INPUT_POST, "email");
$assunto		= filter_input(INPUT_POST, "subject");
$mensagem	= filter_input(INPUT_POST, "message");

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'samuel.alan.58@gmail.com');
define('GPWD', 'mlvpjzcpehrinhan');


function smtpmailer($para, $de, $assunto, $corpo)
{
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 2;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	$mail->Send();
}

(smtpmailer('samuel.alan.58@gmail.com', $de, $assunto , $mensagem)) 

?>
</footer>

</html>