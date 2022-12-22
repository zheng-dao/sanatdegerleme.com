<?php require_once "header.php" ?>
<?php 
error_reporting(0);
$basin=$db->prepare("SELECT * from submenu where SPN=:SPN");
$basin->execute(array(
	"SPN" => $_GET["basin"]
));
$basincek=$basin->fetch(PDO::FETCH_ASSOC);
$menuid=$basincek["MenuID"];
$spnad=$basincek["Ad"];
$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
$menuidbul->execute(array(
	"MenuID" => $menuid
));
$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
$ad=$menuidbulcek["Ad"];
$spn=$menuidbulcek["SPN"];
$icerik=$db->prepare("SELECT * from icerik where SPN=:SPN");
$icerik->execute(array(
	"SPN" => $_GET["basin"]
));
$icerikcek=$icerik->fetch(PDO::FETCH_ASSOC);
$img=$icerikcek["Img"];
$icerikad=$icerikcek["Ad"];
$baslik=$icerikcek["Baslik"];
$kisaaciklama=$icerikcek["KisaAciklama"];
$aciklama=$icerikcek["Aciklama"];
if ($_GET["basin"]=="syazilitalebi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<p>Röportaj için istenilen tarih :</p>
				<input type="date" name="tarih">
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]=="sradyotalebi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<p>Röportaj için istenilen tarih :</p>
				<input type="date" name="tarih">
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]=="stelevizyontalebi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<p>Röportaj için istenilen tarih :</p>
				<input type="date" name="tarih">
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]=="sbaskadildetalebi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<p>Röportaj için dil tercihinizi seçiniz :</p>
				<select>
					<option>Türkçe</option>
					<option>İngilizce</option>
					<option>Arapça</option>
					<option>Fransızca</option>
				</select>
				<p>Röportaj için istenilen tarih :</p>
				<input type="date" name="tarih">
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]=="smedyaicintalebi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<p>Röportaj için istenilen tarih :</p>
				<input type="date" name="tarih">
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]=="smedyaicineser") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<div class="dropzone" id="dropzone" action="islem" method="POST"></div>
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]=="smedyabaglantisi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
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
	<div class="basin">
		<div class="container">
			<form action="mtc" method="POST">
				<h4><?php echo $baslik." :" ?></h4>
				<input type="text" name="ad" placeholder="Adınız :">
				<input type="email" name="email" placeholder="Mail Adresiniz :">
				<input type="phone" name="telefon" placeholder="Telefon :">
				<p>Röportaj için istenilen tarih :</p>
				<input type="date" name="tarih">
				<textarea placeholder="Mesajınız :"></textarea>
				<p><button name="gndr">GÖNDER</button></p>
			</form>
		</div>
	</div>
<?php }
if ($_GET["basin"]==""){?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span>Basın</p>
		</div>
	</div>
	<?php 

	$basin2=$db->prepare("SELECT * from menu where SPN=:SPN");
	$basin2->execute(array(
		"SPN" => "basin"
	));
	$basin2cek=$basin2->fetch(PDO::FETCH_ASSOC);
	$menuid2=$basin2cek["MenuID"];
	$spnad2=$basin2cek["Ad"];
	$icerik2=$db->prepare("SELECT * from icerik where SPN=:SPN");
	$icerik2->execute(array(
		"SPN" => "basin"
	));
	$icerik2cek=$icerik2->fetch(PDO::FETCH_ASSOC);
	$img2=$icerik2cek["Img"];
	$icerikad2=$icerik2cek["Ad"];
	$baslik2=$icerik2cek["Baslik"];
	$kisaaciklama2=$icerik2cek["KisaAciklama"];
	$aciklama2=$icerik2cek["Aciklama"];

	?>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/basin/".$img2 ?>">
				<h4><?php echo $icerikad2 ?></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hakkimizdadivtext">
			<h1><?php echo $baslik2 ?></h1>
			<p><?php echo $kisaaciklama2 ?></p>
			<p><?php echo $aciklama2."<br><br>" ?></p>
			<?php 
			$menu2=$db->prepare("SELECT * from submenu where MenuID=:MenuID");
			$menu2->execute(array(
				"MenuID" => 10
			));
			while ($menucek2=$menu2->fetch(PDO::FETCH_ASSOC)) {
				$menuad=$menucek2["Ad"];
				$menuspn=$menucek2["SPN"];?>
				<p><span><i class="fas fa-chevron-right"></i></span><a href="<?php echo "basin?basin=".$menuspn ?>"><?php echo $menuad ?></a></p>
			<?php }
			?>
		</div>
	</div>
<?php }
?>
<?php require_once "footer.php" ?>