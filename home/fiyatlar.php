<?php require_once "header.php" ?>
<style type="text/css">
	.succesdiv{
		position: fixed;
		left: 35%;
		top: 20%;
		width: 30%;
		background: white;
		border: 0.5px solid green;
		padding: 3%;
		border-radius: 15px;
		z-index: 999;
	}
	.succesdiv h1,h2{
		color: green;
		font-family: "Big Caslon";
	}
	.succesdiv p{
		font-family: "Big Caslon";
		font-size: 18px;
		font-weight: 400;
	}
	.succesdiv button{
		position: absolute;
		background: transparent;
		color: red;
		font-size: 18px;
		right: 10;
		top: 10;
		border: none;
	}
	.kapla{
		width: 100%;
		position: fixed;
		height: 100%;
		left: 0;
		top: 0;
		background: #000;
		opacity: 0.5;
	}
</style>
<?php 
error_reporting(0);
$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
$menuidbul->execute(array(
	"MenuID" => 12
));
$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
$ad=$menuidbulcek["Ad"];
$spn=$menuidbulcek["SPN"];
$icerik=$db->prepare("SELECT * from icerik where SPN=:SPN");
$icerik->execute(array(
	"SPN" => "fiyatlar"
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
		<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> Fiyatlar</p>
	</div>
</div>
<div class="container-fluid">
	<div class="hakkimizdadiv">
		<div class="hakkimizdadivimg">
			<img src="<?php echo "image/fiyatlar/".$img ?>">
			<h4>Fiyatlar</h4>
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
<?php 	

if ($_GET["succes"]=="succes") {?>
	<div class="kapla"></div>
	<div class="succesdiv">
		<div class="center">
			<button class="kapa"><i class="fa-solid fa-xmark"></i></button>
			<h1><i class="fa-solid fa-face-smile"></i></h1>
			<h2>Ödeme Başarılı</h2>
			<p>Ödemeniz başarılı bir şekilde yapılmıştır. Kontroller sağlanıp sizinle iletişime geçilecektir.</p>
		</div>
	</div>
<?php }

?>
<script type="text/javascript">
	let kapa = document.querySelector(".kapa");
	let kapla = document.querySelector(".kapla");
	let succesdiv = document.querySelector(".succesdiv");
	kapa.onclick = function(){
		kapla.style.display  ="none";
		succesdiv.style.display = "none";
	}
</script>
<?php include "indexstripe.php";?>
<?php require_once "footer.php" ?>