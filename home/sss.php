<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<div class="container">
	<div class="headerinfo">
		<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <?php echo "S.S.S." ?></p>
	</div>
</div>
<div class="container-fluid">
	<div class="hakkimizdadiv">
		<div class="hakkimizdadivimg">
			<img src="<?php echo "image/sss/sss.jpg"?>">
			<h2>S.S.S</h2>
		</div>
	</div>
</div>
<div class="sssdiv">
	<div class="container">
		<?php 
		if ($_GET["page"]==1) {
			$soru=$db->prepare("SELECT * from icerik where Tur=:Tur LIMIT 0,10");
			$soru->execute(array(
				"Tur" => "Soru"
			));
			while ($sorucek=$soru->fetch(PDO::FETCH_ASSOC)) {
				$sorular=$sorucek["Baslik"];
				$cevap=$sorucek["Aciklama"];?>
				<div class="sssdivtext">
					<h4><?php echo $sorular ?></h4>
					<p><?php echo $cevap ?></p>
				</div>
			<?php }	
		}
		else if ($_GET["page"]==2) {
			$soru=$db->prepare("SELECT * from icerik where Tur=:Tur LIMIT 10,20");
			$soru->execute(array(
				"Tur" => "Soru"
			));
			while ($sorucek=$soru->fetch(PDO::FETCH_ASSOC)) {
				$sorular=$sorucek["Baslik"];
				$cevap=$sorucek["Aciklama"];?>
				<div class="sssdivtext">
					<h4><?php echo $sorular ?></h4>
					<p><?php echo $cevap ?></p>
				</div>
			<?php }	 }
			else {
				$soru=$db->prepare("SELECT * from icerik where Tur=:Tur LIMIT 0,10");
				$soru->execute(array(
					"Tur" => "Soru"
				));
				while ($sorucek=$soru->fetch(PDO::FETCH_ASSOC)) {
					$sorular=$sorucek["Baslik"];
					$cevap=$sorucek["Aciklama"];?>
					<div class="sssdivtext">
						<h4><?php echo $sorular ?></h4>
						<p><?php echo $cevap ?></p>
					</div>
				<?php }	 }
				?>
			</div>
			<div class="nextprev">
				<?php 

				if ($_GET["page"]==1) {?>
					<a href="sss?page=1" id="prev"><i class="fas fa-chevron-left"></i></a>
					<label id="start"></label>
					<label id="middle">1</label>
					<label id="end">2</label>
					<a href="sss?page=2" id="next"><i class="fas fa-chevron-right"></i></a>
				<?php }
				elseif ($_GET["page"]==2) {?>
					<a href="sss?page=1" id="prev"><i class="fas fa-chevron-left"></i></a>
					<label id="start">1</label>
					<label id="middle">2</label>
					<label id="end"></label>
					<a href="sss?page=2" id="next"><i class="fas fa-chevron-right"></i></a>
				<?php }
				else{?>
					<a href="sss?page=1" id="prev"><i class="fas fa-chevron-left"></i></a>
					<label id="start"></label>
					<label id="middle">1</label>
					<label id="end">2</label>
					<a href="sss?page=2" id="next"><i class="fas fa-chevron-right"></i></a>
				<?php }
				?>
			</div>
		</div>

		<?php require_once "footer.php" ?>