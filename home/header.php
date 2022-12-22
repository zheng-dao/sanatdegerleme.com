<?php 
ob_start();
session_start();
require_once "baglan.php";
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
<title>Sanat Değerleme | Sanat Uzmanları</title>
<meta name="description" content="Sanat değerleme uzmanları, Resimler, çizimler, baskılar, heykeller, sanat eserleri, sertifikalar, araştırma, analiz, görüşler, bilimsel ve adli testler." />
<meta name="keywords" content="Sanat değerleme, Resimler, çizimler, baskılar, heykeller, sanat eserleri, sertifikalar, araştırma, analiz, görüşler, bilimsel ve adli testler."/>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="css/dropzone.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.css">
<link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="fontawesome/js/all.js">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="shortcut icon" href="image/s.png" />
<link rel="stylesheet" href="css/jquery.ui.theme.css" type="text/css" />
<link rel="stylesheet" href="css/jquery.ui.accordion.css" type="text/css" />
<link rel="stylesheet" href="css/jquery.Jcrop.css" type="text/css" />
<link rel="stylesheet" href="css/jcrop_main.css" type="text/css" />
<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R4PKRVKHQF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R4PKRVKHQF');
</script>


<script src="https://kit.fontawesome.com/2c040fda8f.js" crossorigin="anonymous"></script>
<div class="header">
	<i class="fa-solid fa-bars" id="btn"></i>
	<div class="search-box">
		<form action="search" method="POST">
			<button name="search" class="btn-search"><i class="fa-solid fa-magnifying-glass"></i></button>
			<input name="searchtext" type="text" class="input-search" placeholder="Search...">
		</form>
	</div>
	<div id="logo">
		<a href="index"><label>SANAT DEĞERLEME</label></a>
	</div>
</div>
<div class="bar">
	<div class="menu">
		<ul>
			<?php 
			$menu=$db->prepare("SELECT * from menu where SPN!='' order by sira ASC");
			$menu->execute();
			while ($menucek=$menu->fetch(PDO::FETCH_ASSOC)) {
				$menuadi=$menucek["Ad"];
				$spn=$menucek["SPN"];
				$menuid=$menucek["MenuID"];
				$span=$db->prepare("SELECT * from submenu where MenuID=:MenuID");
				$span->execute(array(
					"MenuID" => $menuid
				));
				if ($span->rowCount()) {?>
					<li><button id="<?php echo $spn ?>"><?php echo $menuadi ?><span><i class="fas fa-chevron-right"></i></span></button></li>
				<?php }
				else{ ?>
					<li><a href="<?php echo "islem?ata=".$spn ?>"><button><?php echo $menuadi ?></button></a></li>
				<?php }
				?>
				
			<?php }	?>
		</ul>
	</div>
	<?php 
	$menu=$db->prepare("SELECT * from menu where SPN!='' order by sira ASC");
	$menu->execute();
	while ($menucek=$menu->fetch(PDO::FETCH_ASSOC)) {
		$menuadi=$menucek["Ad"];
		$spn=$menucek["SPN"];
		$menuid=$menucek["MenuID"];
		$span=$db->prepare("SELECT * from submenu where MenuID=:MenuID and SPN!='' ");
		$span->execute(array(
			"MenuID" => $menuid
		));
		$span2=$db->prepare("SELECT * from submenu where MenuID=:MenuID LIMIT 0,14");
		$span2->execute(array(
			"MenuID" => $menuid
		));
		
		if ($span->rowCount()) {?>
			<div class="menu61">
				<ul>
					<button style="color: white; background:transparent; border:none" class="backmenugeri" id="<?php echo "backmenugeri10" ?>"> <i class="fas fa-chevron-left"></i> Geri </button>
					<button style=" color: gray; border:none; background:transparent;" disabled class="backmenuileri" id="<?php echo "backmenuileri11" ?>"> İleri <i class="fas fa-chevron-right"></i> </button>
					<li><button class="sanatcisubo">&nbsp;&nbsp;&nbsp;&nbsp;O</button></li>
					<li><button class="sanatcisuboo">&nbsp;&nbsp;&nbsp;&nbsp;Ö</button></li>
					<li><button class="sanatcisubp">&nbsp;&nbsp;&nbsp;&nbsp;P</button></li>
					<li><button class="sanatcisubq">&nbsp;&nbsp;&nbsp;&nbsp;Q</button></li>
					<li><button class="sanatcisubr">&nbsp;&nbsp;&nbsp;&nbsp;R</button></li>
					<li><button class="sanatcisubs">&nbsp;&nbsp;&nbsp;&nbsp;S</button></li>
					<li><button class="sanatcisubss">&nbsp;&nbsp;&nbsp;&nbsp;Ş</button></li>
					<li><button class="sanatcisubt">&nbsp;&nbsp;&nbsp;&nbsp;T</button></li>
					<li><button class="sanatcisubu">&nbsp;&nbsp;&nbsp;&nbsp;U</button></li>
					<li><button class="sanatcisubuu">&nbsp;&nbsp;&nbsp;&nbsp;Ü</button></li>
					<li><button class="sanatcisubv">&nbsp;&nbsp;&nbsp;&nbsp;V</button></li>
					<li><button class="sanatcisubw">&nbsp;&nbsp;&nbsp;&nbsp;W</button></li>
					<li><button class="sanatcisubx">&nbsp;&nbsp;&nbsp;&nbsp;X</button></li>
					<li><button class="sanatcisuby">&nbsp;&nbsp;&nbsp;&nbsp;Y</button></li>
					<li><button class="sanatcisubz">&nbsp;&nbsp;&nbsp;&nbsp;Z</button></li>
				</ul>
			</div>
			<div class="<?php echo "menu".$menuid ?>">
				<ul>
					<?php 

					if ($menuid==6) {?>
						<button disabled style="color: gray; border:none; background: transparent;" class="backmenugeri" id="<?php echo "backmenugeri" ?>"> <i class="fas fa-chevron-left"></i> Geri </button>
						<button style="color: white; background:transparent; border:none" class="backmenuileri" id="<?php echo "backmenuileri10" ?>"> İleri <i class="fas fa-chevron-right"></i> </button>
					<?php }
					?>
					<li><button class="backmenu" id="<?php echo "backmenu".$menuid ?>"> < Geri</button></li>
					<li><a href="<?php echo $spn ?>"><button style="margin-bottom: 10px; color: white; margin-left: -20px; border-bottom: 0.2px solid white;"><?php echo $menuadi ?></button></a></li>
					<?php 
					while ($spancek=$span->fetch(PDO::FETCH_ASSOC)) {
						$subad=$spancek["Ad"];
						$submenuid=$spancek["SubMenuID"];
						$subspn=$spancek["SPN"];
						$subsub=$db->prepare("SELECT * from subsub where SubMenuID=:SubMenuID");
						$subsub->execute(array(
							"SubMenuID" => $submenuid
						));
						if ($subsub->rowCount()) {?>
							<li><button id="<?php echo $subspn ?>"><?php echo $subad ?><span><i class="fas fa-chevron-right"></i></span></button></li>
						<?php }
						else {
							if ($menuid==6) {?>
								
							<?php } 
							else{?>
								<li><a href="<?php echo "islem?ata=".$subspn ?>"><button><?php echo $subad ?></button></a></li>
							<?php  }
							?>
							
						<?php } ?>
						
					<?php } 
					if ($menuid==6) {?>
						<li><button class="sanatcisuba">&nbsp;&nbsp;&nbsp;&nbsp;A</button></li>
						<li><button class="sanatcisubb">&nbsp;&nbsp;&nbsp;&nbsp;B</button></li>
						<li><button class="sanatcisubc">&nbsp;&nbsp;&nbsp;&nbsp;C</button></li>
						<li><button class="sanatcisubcc">&nbsp;&nbsp;&nbsp;&nbsp;Ç</button></li>
						<li><button class="sanatcisubd">&nbsp;&nbsp;&nbsp;&nbsp;D</button></li>
						<li><button class="sanatcisube">&nbsp;&nbsp;&nbsp;&nbsp;E</button></li>
						<li><button class="sanatcisubf">&nbsp;&nbsp;&nbsp;&nbsp;F</button></li>
						<li><button class="sanatcisubg">&nbsp;&nbsp;&nbsp;&nbsp;G</button></li>
						<li><button class="sanatcisubh">&nbsp;&nbsp;&nbsp;&nbsp;H</button></li>
						<li><button class="sanatcisubi">&nbsp;&nbsp;&nbsp;&nbsp;I</button></li>
						<li><button class="sanatcisubii">&nbsp;&nbsp;&nbsp;&nbsp;İ</button></li>
						<li><button class="sanatcisubj">&nbsp;&nbsp;&nbsp;&nbsp;J</button></li>
						<li><button class="sanatcisubk">&nbsp;&nbsp;&nbsp;&nbsp;K</button></li>
						<li><button class="sanatcisubl">&nbsp;&nbsp;&nbsp;&nbsp;L</button></li>
						<li><button class="sanatcisubm">&nbsp;&nbsp;&nbsp;&nbsp;M</button></li>
						<li><button class="sanatcisubn">&nbsp;&nbsp;&nbsp;&nbsp;N</button></li>
					<?php }?>
				</ul>
			</div>
		<?php } }
		?>

		<?php 
		$menu=$db->prepare("SELECT * from menu where SPN!='' ");
		$menu->execute();
		while ($menucek=$menu->fetch(PDO::FETCH_ASSOC)) {
			$menuadi=$menucek["Ad"];
			$spn=$menucek["SPN"];
			$menuid=$menucek["MenuID"];
			$span=$db->prepare("SELECT * from submenu where MenuID=:MenuID");
			$span->execute(array(
				"MenuID" => $menuid
			));
			if ($span->rowCount()) {

				while ($spancek=$span->fetch(PDO::FETCH_ASSOC)) {
					$subad=$spancek["Ad"];
					$submenuid=$spancek["SubMenuID"];
					$subspn=$spancek["SPN"];
					$subsub=$db->prepare("SELECT * from subsub where SubMenuID=:SubMenuID");
					$subsub->execute(array(
						"SubMenuID" => $submenuid
					));
					if ($subsub->rowCount()) {?>
						<div class="<?php echo "menu3".$submenuid ?>">
							<ul>
								<li><button class="backmenu" id="<?php echo "backmenu3".$submenuid ?>"> < Geri</button></li>
								<li><a href="<?php echo "islem?ata=".$subspn ?>"><button style="margin-bottom: 10px; color: white; margin-left: -20px; border-bottom: 0.2px solid white;"><?php echo $subad ?></button></a></li>
								<?php 

								while ($subsubcek=$subsub->fetch(PDO::FETCH_ASSOC)) {
									$subsubad=$subsubcek["Ad"];
									$subsubspn=$subsubcek["SPN"];?>
									<li><a href="<?php echo "islem?ata=".$subsubspn ?>"><button><?php echo $subsubad ?></button></a></li>
								<?php }
								?>
							</ul>
						</div>
					<?php } ?>
				<?php }
			}
		} ?>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'a%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdiva">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenua" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'b%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivb">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenub" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'c%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivc">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuc" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'ç%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivcc">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenucc" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'd%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivd">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenud" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'e%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdive">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenue" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'f%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivf">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuf" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'g%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivg">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenug" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'h%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivh">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuh" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'ı%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivi">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenui" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'i%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivii">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuii" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'j%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivj">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuj" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'k%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivk">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuk" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'l%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivl">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenul" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'm%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivm">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenum" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'n%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivn">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenun" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'o%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivo">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuo" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'ö%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivoo">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuoo" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'p%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivp">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenup" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'r%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivr">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenur" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'q%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivq">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuq" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 's%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivs">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenus" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'ş%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivss">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuss" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 't%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivt">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenut" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'u%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivu">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuu" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'ü%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivuu">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuuu" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'v%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivv">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuv" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'w%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivw">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuw" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'x%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivx">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenux" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'y%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivy">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuy" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
		<?php 
		$sanatcisub=$db->prepare("SELECT * from icerik where Tur=:Tur and Ad like 'z%' limit 15");
		$sanatcisub->execute(array(
			"Tur" => "Ressam"
		));
		?>
		<div class="sanatcisubdivz">
			<ul>
				<li><button class="backmenu" id="<?php echo "backmenuz" ?>"> < Geri</button></li>
				<?php while ($sanatcisubcek=$sanatcisub->fetch(PDO::FETCH_ASSOC)) {
					$ad=$sanatcisubcek["Ad"];
					$sanatcispn=$sanatcisubcek["SPN"];
					?>
					<li><a href="sanatcilar?sanatci=<?php echo $sanatcispn ?>"><button><?php echo $ad ?></button></a></li>
				<?php  } ?>	
			</ul>
		</div>
	</div>
</div>
<div class="contactheader">
	<a href="index#contact">Bize Ulaşın</a>
</div>
<script type="text/javascript">
	new WOW().init();
</script>
