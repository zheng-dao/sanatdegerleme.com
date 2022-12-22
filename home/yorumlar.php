<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<div class="container">
	<div class="headerinfo">
		<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <?php echo "Yorumlar" ?></p>
	</div>
</div>
<div class="container-fluid">
	<div class="hakkimizdadiv">
		<div class="hakkimizdadivimg">
			<img src="<?php echo "image/yorumlar/yorumlar.png"?>">
			<h4>Yorumlar</h4>
		</div>
	</div>
</div>
<div class="sssdiv">
	<div class="container">
		<?php 
		if ($_GET["page"]==1) {
			$yorum=$db->prepare("SELECT * from icerik where Tur=:Tur LIMIT 0,10");
			$yorum->execute(array(
				"Tur" => "Yorum"
			));
			while ($yorumcek=$yorum->fetch(PDO::FETCH_ASSOC)) {
				$kisi=substr($yorumcek["Baslik"],0,12);
				$yorumlar=$yorumcek["Aciklama"];?>
				<div class="sssdivtext">
					<h4><?php echo $kisi."." ?></h4>
					<p><?php echo $yorumlar ?></p>
				</div>
			<?php }	
		}
		else if ($_GET["page"]==2) {
			$yorum=$db->prepare("SELECT * from icerik where Tur=:Tur LIMIT 10,20");
			$yorum->execute(array(
				"Tur" => "Yorum"
			));
			while ($yorumcek=$yorum->fetch(PDO::FETCH_ASSOC)) {
				$kisi=$yorumcek["Baslik"];
				$yorumlar=$yorumcek["Aciklama"];
				$kisi=substr($yorumcek["Baslik"],0,12);?>
				<div class="sssdivtext">
					<h4><?php echo $kisi."." ?></h4>
					<p><?php echo $yorumlar ?></p>
				</div>
			<?php }	 }
			else{
				$yorum=$db->prepare("SELECT * from icerik where Tur=:Tur LIMIT 0,10");
				$yorum->execute(array(
					"Tur" => "Yorum"
				));
				while ($yorumcek=$yorum->fetch(PDO::FETCH_ASSOC)) {
					$kisi=$yorumcek["Baslik"];
					$yorumlar=$yorumcek["Aciklama"];
					$kisi=substr($yorumcek["Baslik"],0,12);?>
					<div class="sssdivtext">
						<h4><?php echo $kisi."" ?></h4>
						<p><?php echo $yorumlar ?></p>
					</div>
				<?php }	 }
				?>
			</div>
			<div class="nextprev">
				<?php 

				if ($_GET["page"]==1) {?>
					
					<label id="start"></label>
					<label id="middle">1</label>
					
					
				<?php }
				elseif ($_GET["page"]==2) {?>
					
					<label id="start">1</label>
				
					<label id="end"></label>
					
				<?php }
				else{?>
					
					<label id="start"></label>
					<label id="middle">1</label>
					
					
				<?php }
				?>
			</div>
		</div>

		<?php require_once "footer.php" ?>