<?php require_once "header.php" ?>
<?php 
error_reporting(0);
?>
<?php
if ($_GET["sanatci"]) {
	$menu=$db->prepare("SELECT * from submenu where SPN=:SPN");
	$menu->execute(array(
		"SPN" => $_GET["sanatci"]
	));
	$menucek=$menu->fetch(PDO::FETCH_ASSOC);
	$menuid=$menucek["MenuID"];
	$spnad=$menucek["Ad"];
	$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
	$menuidbul->execute(array(
		"MenuID" => $menuid
	));
	$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
	$ad=$menuidbulcek["Ad"];
	$spn=$menuidbulcek["SPN"];
	?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="sanatcidiv">
	</div>
	<div class="sanatcidivtext">
		<?php 
		$sanatci=$db->prepare("SELECT * from icerik where SPN=:SPN");
		$sanatci->execute(array(
			"SPN" => $_GET["sanatci"]
		));
		$sanatcicek=$sanatci->fetch(PDO::FETCH_ASSOC);
		$baslik=$sanatcicek["Baslik"];
		$aciklama=$sanatcicek["Aciklama"];
		?>
		<?php echo $baslik ?>
		<div class="container text">
			<?php echo $aciklama ?>
		</div>
	</div>
<?php } 
elseif($_GET["harf"]){
	$harf=$_GET["harf"];
	$menu=$db->prepare("SELECT * from submenu where MenuID=:MenuID");
	$menu->execute(array(
		"MenuID" => 6
	));
	$menucek=$menu->fetch(PDO::FETCH_ASSOC);
	$menuid=$menucek["MenuID"];
	$spnad=$menucek["Ad"];
	$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
	$menuidbul->execute(array(
		"MenuID" => $menuid
	));
	$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
	$ad=$menuidbulcek["Ad"];
	$spn=$menuidbulcek["SPN"];
	?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $ad ?></p>
		</div>
	</div>
	<div class="sanatcidiv">
	</div>
	<div class="sanatcidivtext">
		<h2>Sanatçılarımız</h2>
		<?php 
		$icerik=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like '$harf%'");
		$icerik->execute(array(
			"Tur" => "Ressam"
		));?>
		<div class="container sanatcilist">
			<?php while ($icerikcek=$icerik->fetch(PDO::FETCH_ASSOC)) {
				$ad=$icerikcek["Ad"];
				$spn=$icerikcek["SPN"];?>

				<ul>
					<li><a href="<?php echo "sanatcilar?sanatci=".$spn ?>"><span><i class="fas fa-chevron-right"></i></span><?php echo $ad ?></a></li>
				</ul>

			<?php }
			?>
		</div>
	</div>
	<div class="container">
		<div id="owl" class="owl-carousel owl-theme">

			<div class="item"><a href="islem?ata=a">A</a></div>
			<div class="item"><a href="islem?ata=b">B</a></div>
			<div class="item"><a href="islem?ata=c">C</a></div>
			<div class="item"><a href="islem?ata=ç">Ç</a></div>
			<div class="item"><a href="islem?ata=d">D</a></div>
			<div class="item"><a href="islem?ata=e">E</a></div>
			<div class="item"><a href="islem?ata=f">F</a></div>
			<div class="item"><a href="islem?ata=g">G</a></div>
			<div class="item"><a href="islem?ata=h">H</a></div>
			<div class="item"><a href="islem?ata=ı">I</a></div>
			<div class="item"><a href="islem?ata=i">İ</a></div>
			<div class="item"><a href="islem?ata=j">J</a></div>
			<div class="item"><a href="islem?ata=k">K</a></div>
			<div class="item"><a href="islem?ata=l">L</a></div>
			<div class="item"><a href="islem?ata=m">M</a></div>
			<div class="item"><a href="islem?ata=n">N</a></div>
			<div class="item"><a href="islem?ata=o">O</a></div>
			<div class="item"><a href="islem?ata=ö">Ö</a></div>
			<div class="item"><a href="islem?ata=p">P</a></div>
			<div class="item"><a href="islem?ata=q">Q</a></div>
			<div class="item"><a href="islem?ata=r">R</a></div>
			<div class="item"><a href="islem?ata=s">S</a></div>
			<div class="item"><a href="islem?ata=ş">Ş</a></div>
			<div class="item"><a href="islem?ata=t">T</a></div>
			<div class="item"><a href="islem?ata=u">U</a></div>
			<div class="item"><a href="islem?ata=ü">Ü</a></div>
			<div class="item"><a href="islem?ata=v">V</a></div>
			<div class="item"><a href="islem?ata=w">W</a></div>
			<div class="item"><a href="islem?ata=x">X</a></div>
			<div class="item"><a href="islem?ata=y">Y</a></div>
			<div class="item"><a href="islem?ata=z">Z</a></div>
		</div>
	</div>
<?php }
else{
	$menu=$db->prepare("SELECT * from submenu where MenuID=:MenuID");
	$menu->execute(array(
		"MenuID" => 6
	));
	$menucek=$menu->fetch(PDO::FETCH_ASSOC);
	$menuid=$menucek["MenuID"];
	$spnad=$menucek["Ad"];
	$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
	$menuidbul->execute(array(
		"MenuID" => $menuid
	));
	$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
	$ad=$menuidbulcek["Ad"];
	$spn=$menuidbulcek["SPN"];
	?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $ad ?></p>
		</div>
	</div>
	<div class="sanatcidiv">
	</div>
	<div class="sanatcidivtext">
		<h2>Sanatçılarımız</h2>
		<?php 
		$icerik=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'a%'");
		$icerik->execute(array(
			"Tur" => "Ressam"
		));?>
		<div class="container sanatcilist">
			<?php while ($icerikcek=$icerik->fetch(PDO::FETCH_ASSOC)) {
				$ad=$icerikcek["Ad"];
				$spn=$icerikcek["SPN"];?>

				<ul>
					<li><a href="<?php echo "sanatcilar?sanatci=".$spn ?>"><span><i class="fas fa-chevron-right"></i></span><?php echo $ad ?></a></li>
				</ul>

			<?php }
			?>
		</div>
	</div>
	<div class="container">
		<div id="owl" class="owl-carousel owl-theme">
			<div class="item"><a href="islem?ata=a">A</a></div>
			<div class="item"><a href="islem?ata=b">B</a></div>
			<div class="item"><a href="islem?ata=c">C</a></div>
			<div class="item"><a href="islem?ata=ç">Ç</a></div>
			<div class="item"><a href="islem?ata=d">D</a></div>
			<div class="item"><a href="islem?ata=e">E</a></div>
			<div class="item"><a href="islem?ata=f">F</a></div>
			<div class="item"><a href="islem?ata=g">G</a></div>
			<div class="item"><a href="islem?ata=h">H</a></div>
			<div class="item"><a href="islem?ata=ı">I</a></div>
			<div class="item"><a href="islem?ata=i">İ</a></div>
			<div class="item"><a href="islem?ata=j">J</a></div>
			<div class="item"><a href="islem?ata=k">K</a></div>
			<div class="item"><a href="islem?ata=l">L</a></div>
			<div class="item"><a href="islem?ata=m">M</a></div>
			<div class="item"><a href="islem?ata=n">N</a></div>
			<div class="item"><a href="islem?ata=o">O</a></div>
			<div class="item"><a href="islem?ata=ö">Ö</a></div>
			<div class="item"><a href="islem?ata=p">P</a></div>
			<div class="item"><a href="islem?ata=q">Q</a></div>
			<div class="item"><a href="islem?ata=r">R</a></div>
			<div class="item"><a href="islem?ata=s">S</a></div>
			<div class="item"><a href="islem?ata=ş">Ş</a></div>
			<div class="item"><a href="islem?ata=t">T</a></div>
			<div class="item"><a href="islem?ata=u">U</a></div>
			<div class="item"><a href="islem?ata=ü">Ü</a></div>
			<div class="item"><a href="islem?ata=v">V</a></div>
			<div class="item"><a href="islem?ata=w">W</a></div>
			<div class="item"><a href="islem?ata=x">X</a></div>
			<div class="item"><a href="islem?ata=y">Y</a></div>
			<div class="item"><a href="islem?ata=z">Z</a></div>
		</div>
	</div>
<?php }
?>
<?php require_once "footer.php" ?>
