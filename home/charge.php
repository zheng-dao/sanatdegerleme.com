<?php 
require "stripe-php/init.php";
$tutar = $_POST["tutar"];
$tutar = str_replace(",",".",$tutar);
$cents = (int)($tutar * 100);
$tutar = $cents;
\Stripe\Stripe::setApiKey("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");
$token = $_POST["stripeToken"];
$charge = \Stripe\Charge::create([
	"amount" => $tutar,
	"currency" => "usd",
	"description" => "Payment Received from Sanat Değerleme",
	"source" => $token,
]);

if ($charge) {
	$email=$_POST["email"];
	include 'class.phpmailer.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Host = 'mail.artexpertswebsite.com';
	$mail->Port = 587;
	$mail->Username = 'send@sanatdegerleme.com';
	$mail->Password = '9%0xH&C&gy7C';
	$mail->AddAddress($email);
	$mail->SetFrom($mail->Username, 'Sanat Değerleme');
	$mail->CharSet = 'UTF-8';
	$mail->Subject = 'Sanat Değerleme';
	$content = 
	"
	<b> Ödemeniz başarılı bir şekilde alınmıştır. Kontroller sağlanıp sizinle iletişime Geçilecektir.</b> <br>
	Teşekkürler. <br>
	<b>Sanat Değerleme</b> <br> <hr>
	";
	$mail->MsgHTML($content);
	if($mail->Send()) 
	{
		header("Location:succes.php?transaction=success");
		exit;
	}
	else{
		echo $mail->ErrorInfo;
	}	
}
else{
	header("Location:error.html?transaction=failed");
	exit;
}

?>
