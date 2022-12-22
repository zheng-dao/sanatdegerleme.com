<?php require_once "header.php" ?>
<?php 
error_reporting(0);
$kariyer=$db->prepare("SELECT * from submenu where SPN=:SPN");
$kariyer->execute(array(
	"SPN" => $_GET["kariyer"]
));
$kariyercek=$kariyer->fetch(PDO::FETCH_ASSOC);
$menuid=$kariyercek["MenuID"];
$spnad=$kariyercek["Ad"];
$menuidbul=$db->prepare("SELECT * from menu where MenuID=:MenuID");
$menuidbul->execute(array(
	"MenuID" => $menuid
));
$menuidbulcek=$menuidbul->fetch(PDO::FETCH_ASSOC);
$ad=$menuidbulcek["Ad"];
$spn=$menuidbulcek["SPN"];
$icerik=$db->prepare("SELECT * from icerik where SPN=:SPN");
$icerik->execute(array(
	"SPN" => $_GET["kariyer"]
));
$icerikcek=$icerik->fetch(PDO::FETCH_ASSOC);
$img=$icerikcek["Img"];
$icerikad=$icerikcek["Ad"];
$baslik=$icerikcek["Baslik"];
$kisaaciklama=$icerikcek["KisaAciklama"];
$aciklama=$icerikcek["Aciklama"];
if ($_GET["kariyer"]=="snasilcalisiriz") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/kariyer/".$img ?>">
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
if ($_GET["kariyer"]=="sogrencilervemezunlar") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/kariyer/".$img ?>">
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
if ($_GET["kariyer"]=="stecrubeliuzmanlar") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/kariyer/".$img ?>">
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
if ($_GET["kariyer"]=="scesitlilikvekapsayicilik") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/kariyer/".$img ?>">
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
if ($_GET["kariyer"]==""){?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> Kariyer</p>
		</div>
	</div>
	<?php 

	$kariyer2=$db->prepare("SELECT * from menu where SPN=:SPN");
	$kariyer2->execute(array(
		"SPN" => "kariyer"
	));
	$kariyer2cek=$kariyer2->fetch(PDO::FETCH_ASSOC);
	$menuid2=$kariyer2cek["MenuID"];
	$spnad2=$kariyer2cek["Ad"];
	$icerik2=$db->prepare("SELECT * from icerik where SPN=:SPN");
	$icerik2->execute(array(
		"SPN" => "kariyer"
	));
	$icerikcek2=$icerik2->fetch(PDO::FETCH_ASSOC);
	$img2=$icerikcek2["Img"];
	$icerikad2=$icerikcek2["Ad"];
	$baslik2=$icerikcek2["Baslik"];
	$kisaaciklama2=$icerikcek2["KisaAciklama"];
	$aciklama2=$icerikcek2["Aciklama"];

	?>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/kariyer/".$img2 ?>">
				<h4><?php echo $icerikad2 ?></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hakkimizdadivtext">
			<h1><?php echo $baslik2 ?></h1>
			<p><?php echo $kisaaciklama2 ?></p>
			<p><?php echo $aciklama2 ?></p>
			<?php 
			$menu2=$db->prepare("SELECT * from submenu where MenuID=:MenuID");
			$menu2->execute(array(
				"MenuID" => 9
			));
			while ($menucek2=$menu2->fetch(PDO::FETCH_ASSOC)) {
				$menuad=$menucek2["Ad"];
				$menuspn=$menucek2["SPN"];
				if ($menuspn=="shakkimizda") {?>
					<p><span><i class="fas fa-chevron-right"></i></span><a href="hakkimizda"><?php echo $menuad ?></a></p>
				<?php }
				else { ?>
					<p><span><i class="fas fa-chevron-right"></i></span><a href="<?php echo "kariyer?kariyer=".$menuspn ?>"><?php echo $menuad ?></a></p>
				<?php } ?>
				
			<?php }
			?>
		</div>
	</div>
<?php }
?>

<?php require_once "footer.php" ?>
