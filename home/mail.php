<?php 
session_start();
if (!empty($_FILES)) {
	$name=$_POST["session"];
	$tmp_name = $_FILES["file"]["tmp_name"];
	$resimAdi = $_FILES["file"]["name"];
	$date = date("d.m.Y");
	$klasor=$date.$name;
	$_SESSION["klasor"]=$klasor;
	if (file_exists("image/".$klasor)) {
		$dizin="image/".$klasor."/";
		move_uploaded_file($tmp_name, $dizin.$resimAdi);
	}
	else{
		mkdir("image/".$klasor);
		$dizin="image/".$klasor."/";
		move_uploaded_file($tmp_name, $dizin.$resimAdi);
	}
}
if (isset($_POST["gndr"])) {
	$_DIR = opendir("image/".$_SESSION['klasor']);
	$email= "info@artexpertswebsite.com";
	$captcha=$_POST['g-recaptcha-response'];
	$secretKey = "6LdeKuohAAAAADUSAh9OQAy5kbnIIi4rXGXtvGxF";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        
	$eposta=$_POST["eposta"];
	$ad=$_POST["ad"];
	$mesaj=$_POST["mesaj"];
	if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>Spam? ! Tekrar kontrol etmelisin.</h2>';
        } else {
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
	$mail->Subject = 'Contact Form Sanat Değerleme';
	$content = 
	"
	<b> Ad <b> : <b>$ad</b> <br>
	<b> E-Mail <b>: $eposta <br>
	<b> Mesaj <b> : <b>$mesaj</b> <br> <hr>
	";
	$mail->MsgHTML($content);
	while (($_DIRFILE = readdir($_DIR)) !== false){
		if(!is_dir($_DIRFILE)){ 
			$mail->addAttachment("image/".$_SESSION["klasor"]."/".$_DIRFILE);
		}
	}
	if($mail->Send()) 
	{
		closedir($_DIR);
		session_destroy();
		header("Location:index?mail=ok");
	}
	else{
		echo $mail->ErrorInfo;
	}
        }
	
	
}
?>