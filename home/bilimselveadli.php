<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<?php 
$hakkimizda=$db->prepare("SELECT * from submenu where SPN=:SPN");
$hakkimizda->execute(array(
	"SPN" => $_GET["bilimselveadli"]
));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);
$menuid=$hakkimizdacek["MenuID"];
$spnad=$hakkimizdacek["Ad"];
$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
$menuidbul->execute(array(
	"MenuID" => $menuid
));
$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
$ad=$menuidbulcek["Ad"];
$spn=$menuidbulcek["SPN"];
$icerik=$db->prepare("SELECT * from icerik where SPN=:SPN");
$icerik->execute(array(
	"SPN" => $_GET["bilimselveadli"]
));
$icerikcek=$icerik->fetch(PDO::FETCH_ASSOC);
$img=$icerikcek["Img"];
$icerikad=$icerikcek["Ad"];
$baslik=$icerikcek["Baslik"];
$kisaaciklama=$icerikcek["KisaAciklama"];
$aciklama=$icerikcek["Aciklama"];
?>
<?php 
if ($_GET["bilimselveadli"]=="sbilimsel") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/bilimselveadli/".$img ?>">
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
<?php }
elseif($_GET["bilimselveadli"]=="sadli") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/bilimselveadli/".$img ?>">
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
<?php }
elseif($_GET["bilimselveadli"]=="sozelfotograflama") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/bilimselveadli/".$img ?>">
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
<?php }
elseif($_GET["bilimselveadli"]=="srontgenler") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/bilimselveadli/".$img ?>">
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
<?php }
else{?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span>Bilimsel ve Adli</p>
		</div>
	</div>
	<?php 
	$hakkimizda2=$db->prepare("SELECT * from icerik where SPN=:SPN");
	$hakkimizda2->execute(array(
		"SPN" => "bilimselveadli"
	));
	$hakkimizda2cek=$hakkimizda2->fetch(PDO::FETCH_ASSOC);
	$icerikad=$hakkimizda2cek["Ad"];
	$img=$hakkimizda2cek["Img"];
	$baslik=$hakkimizda2cek["Baslik"];
	$kisaaciklama=$hakkimizda2cek["KisaAciklama"];
	$aciklama=$hakkimizda2cek["Aciklama"];
	?>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/bilimselveadli/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hakkimizdadivtext">
			<h1><?php echo $baslik ?></h1>
			<p><?php echo $kisaaciklama ?></p>
			<p><?php echo $aciklama."<br><br>" ?></p>
			<?php 
			$menu2=$db->prepare("SELECT * from submenu where MenuID=:MenuID and SPN!=''");
			$menu2->execute(array(
				"MenuID" => 4
			));
			while ($menucek2=$menu2->fetch(PDO::FETCH_ASSOC)) {
				$menuad=$menucek2["Ad"];
				$menuspn=$menucek2["SPN"];
				if ($menuspn=="starihleme") {?>
					<p><span><i class="fas fa-chevron-right"></i></span><a href="tarihleme"><?php echo $menuad ?></a></p>
				<?php }
				elseif ($menuspn=="sadli") {?>
					<p><span><i class="fas fa-chevron-right"></i></span><a href="adli"><?php echo $menuad ?></a></p>
				<?php }
				else {?>
					<p><span><i class="fas fa-chevron-right"></i></span><a href="<?php echo "bilimselveadli?bilimselveadli=".$menuspn ?>"><?php echo $menuad ?></a></p>
				<?php }?>
				
			<?php }
			?>
		</div>
	</div>
<?php }
?>
<?php require_once "footer.php" ?>