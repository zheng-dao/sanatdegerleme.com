<?php 
include 'mydb.php';
$fullname=$_POST["fullname"];
$email=$_POST["email"];
$adress=$_POST["adress"];
$tutar=$_POST["tutar"];
$tutar = str_replace(",",".",$tutar);
$date=date('Y.m.d');
$odemekayit=$db->prepare("INSERT INTO odeme SET
	fullname=:fullname,
	email=:email,
	adress=:adress,
	datet=:datet,
	tutar=:tutar
	");
$insert=$odemekayit->execute(array(
	"fullname" => $fullname,
	"email" => $email,
	"adress" => $adress,
	"datet" => $date,
	"tutar" => $tutar
));
if ($insert) {
	echo "Başarılı";
}
else{
	echo "hata";
}

?>