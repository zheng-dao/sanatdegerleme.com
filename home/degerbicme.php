<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<?php 
$icerik=$db->prepare("SELECT * from icerik where SPN=:SPN");
$icerik->execute(array(
	"SPN" => "degerbicme"
));
$icerikcek=$icerik->fetch(PDO::FETCH_ASSOC);
$img=$icerikcek["Img"];
$icerikad=$icerikcek["Ad"];
$baslik=$icerikcek["Baslik"];
$kisaaciklama=$icerikcek["KisaAciklama"];
$aciklama=$icerikcek["Aciklama"];

 ?>
<div class="container">
	<div class="headerinfo">
		<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <?php echo "Değer Biçme" ?></p>
	</div>
</div>
<div class="container-fluid">
	<div class="hakkimizdadiv">
		<div class="hakkimizdadivimg">
			<img src="<?php echo "image/degerbicme/degerbicme.png"?>">
			<h4>Değer Biçme</h4>
		</div>
	</div>
</div>
<div class="container">
	<div class="hakkimizdadivtext">
		<h1><?php echo $baslik ?></h1>
		<p><?php echo $kisaaciklama ?></p>
		<p><?php echo $aciklama ?></p>
	</div>
</div>
<?php require_once "footer.php" ?>