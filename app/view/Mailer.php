<!-- <?php

// include("dashboard.php");

// //$remetente = filter_input(INPUT_POST, "email");
// $assunto = filter_input(INPUT_POST, "subject");
// $mensagem = filter_input(INPUT_POST, "message");

// define('GUSER', 'samuel.alan.58@gmail.com');	// <-- Insira aqui o seu GMail
// define('GPWD', 'mlvpjzcpehrinhan');		// <-- Insira aqui a senha do seu GMail

// require_once ('phpmailer/class.phpmailer.php');

// function smtpmailer($para, $de, $assunto, $corpo) { 
// 	global $error;
// 	$mail = new PHPMailer();
// 	$mail->IsSMTP();		// Ativar SMTP
// 	$mail->SMTPDebug = 2;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
// 	$mail->SMTPAuth = true;		// Autenticação ativada
// 	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
// 	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
// 	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
// 	$mail->Username = GUSER;
// 	$mail->Password = GPWD;
// 	$mail->SetFrom($de);
// 	$mail->Subject = $assunto;
// 	$mail->Body = $corpo;
// 	$mail->AddAddress($para);
// 	$mail->Send();
// }


// smtpmailer('samuel.alan.58@gmail.com', 'samuel.alan.58@gmail.com', $assunto, $mensagem);

//Header("location:https://localhost/sites/email.php");

?> -->

<?php

include("dashboard.php");

$Nome		= filter_input(INPUT_POST, "Nome");	
$Fone		= filter_input(INPUT_POST, "Fone");	
$Email		= filter_input(INPUT_POST, "Email");	
$Mensagem	= filter_input(INPUT_POST, "Mensagem");	


$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nMensagem: $Mensagem\n";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'samuel.alan.58@gmail.com');
define('GPWD', 'mlvpjzcpehrinhan');		

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
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
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	$mail->Send();

}

 if (smtpmailer('samuel.alan.58@gmail.com', 'samuel.alan.58@gmail.com', 'Samuel', 'Teste', $Vai)) {

	 Header("location:https://localhost/site/dashboard.php");

}
?>