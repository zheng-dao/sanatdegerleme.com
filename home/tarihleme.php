<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<?php 
$hakkimizda=$db->prepare("SELECT * from subsub where SPN=:SPN");
$hakkimizda->execute(array(
	"SPN" => $_GET["tarihleme"]
));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);
$menuid=$hakkimizdacek["SubMenuID"];
$spnad=$hakkimizdacek["Ad"];
$menuidbul=$db->prepare("SELECT * from submenu where SubMenuID=:SubMenuID");
$menuidbul->execute(array(
	"SubMenuID" => $menuid
));
$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
$ad=$menuidbulcek["Ad"];
$spn=$menuidbulcek["SPN"];
$icerik=$db->prepare("SELECT * from icerik where SPN=:SPN");
$icerik->execute(array(
	"SPN" => $_GET["tarihleme"]
));
$icerikcek=$icerik->fetch(PDO::FETCH_ASSOC);
$img=$icerikcek["Img"];
$icerikad=$icerikcek["Ad"];
$baslik=$icerikcek["Baslik"];
$kisaaciklama=$icerikcek["KisaAciklama"];
$aciklama=$icerikcek["Aciklama"];
?>
<?php 
if ($_GET["tarihleme"]=="sskarbonyasibelirleme") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span> <a href="tarihleme"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
elseif ($_GET["tarihleme"]=="ssdendrokronoloji") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span> <a href="tarihleme"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
elseif ($_GET["tarihleme"]=="sstermo") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span> <a href="tarihleme"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
elseif ($_GET["tarihleme"]=="sspigmentanalizi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span> <a href="tarihleme"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
elseif ($_GET["tarihleme"]=="ssmetalyasibelirleme") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span> <a href="tarihleme"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
elseif ($_GET["tarihleme"]=="sskagitanalizi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span> <a href="tarihleme"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
			<p><a href="bilimselveadli">Bilimsel ve Adli</a> <span><i class="fas fa-chevron-right"></i></span>Tarihleme</p>
		</div>
	</div>
	<?php 
	$hakkimizda2=$db->prepare("SELECT * from icerik where SPN=:SPN");
	$hakkimizda2->execute(array(
		"SPN" => "tarihleme"
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
				<img src="<?php echo "image/tarihleme/".$img ?>">
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
			$menu2=$db->prepare("SELECT * from subsub where SubMenuID=:SubMenuID and SPN!=''");
			$menu2->execute(array(
				"SubMenuID" => 9
			));
			while ($menucek2=$menu2->fetch(PDO::FETCH_ASSOC)) {
				$menuad=$menucek2["Ad"];
				$menuspn=$menucek2["SPN"];?>
				<p><a href="<?php echo "tarihleme?tarihleme=".$menuspn ?>"><span><i class="fas fa-chevron-right"></i></span><?php echo $menuad ?></a></p>
				
			<?php }
			?>
		</div>
	</div>
<?php }
?>
<?php require_once "footer.php" ?>