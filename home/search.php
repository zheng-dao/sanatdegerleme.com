<?php require_once "header.php";?>
<?php 
if (isset($_POST["search"])) { 
	$text=$_POST["searchtext"];
	$_SESSION["text"]=$text;
	$menuara=$db->prepare("SELECT * from menu where Ad like '%$text%'");
	$menuara->execute();
	$submenuara=$db->prepare("SELECT * from submenu where Ad like '%$text%'");
	$submenuara->execute();
	$subsubmenuara=$db->prepare("SELECT * from subsub where Ad like '%$text%'");
	$subsubmenuara->execute();
	$icerikara=$db->prepare("SELECT * from icerik where Ad or Baslik or Aciklama like '%$text%'");
	$icerikara->execute();
	$sonucsayisi=$menuara->rowCount()+$submenuara->rowCount()+$subsubmenuara->rowCount()+$icerikara->rowCount();
	?>
	<div class="searchanadiv">
		<div class="container">
			<h4>Aranan Kelime : <?php echo $text ?></h4>
			<p>Toplamda <?php echo $sonucsayisi ?> adet sonuç bulundu.</p>
		</div>
		<?php ?>
		<div class="searchdiv">
			<?php while ($icerikaracek=$icerikara->fetch(PDO::FETCH_ASSOC)) {
				$icerikad=$icerikaracek["Ad"];
				$icerikadspn=$icerikaracek["SPN"];
				$aciklama=$icerikaracek["Aciklama"];
				$tur=$icerikaracek["Tur"];?>
				<div class="searchdivtext">
					<?php 
					if ($tur=="Ressam") {?>
						<p><a href="<?php echo "sanatcilar?sanatci=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Hakkımızda") {?>
						<p><a href="<?php echo "hakkimizda?hakkimizda=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Soru") {?>
						<p><a href="<?php echo $icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Basın") {?>
						<p><a href="<?php echo $icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Kariyer") {?>
						<p><a href="<?php echo $icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Satış") {?>
						<p><a href="satis"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Bilimsel v") {?>
						<p><a href="<?php echo "bilimselveadli?bilimselveadli=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Tarihleme") {?>
						<p><a href="tarihleme"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Adli") {?>
						<p><a href="adli"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Tasdikleme") {?>
						<p><a href="<?php echo "tasdikleme?tasdikleme=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Araştırma") {?>
						<p><a href="<?php echo "arastirma?arastirma=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					?>
				</div>
			<?php }?>
			<?php while ($menuaracek=$menuara->fetch(PDO::FETCH_ASSOC)) {
				$ad=$menuaracek["Ad"];
				$spn=$menuaracek["SPN"];?>
				<div class="searchdivtext">
					<p><a href="<?php echo $spn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $ad ?></label></a></p>
				</div>
			<?php }?>
			<?php while ($submenuaracek=$submenuara->fetch(PDO::FETCH_ASSOC)) {
				$subad=$submenuaracek["Ad"];
				$subspn=$submenuaracek["SPN"];
				$menuid=$submenuaracek["MenuID"];
				if ($menuid==2) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "tasdikleme?tasdikleme=".$subspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				elseif ($menuid==4) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "bilimselveadli?bilimselveadli=".$subspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				elseif ($menuid==5) {?>
					<div class="searchdivtext">
						<p><a href="satis"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				elseif ($menuid==7) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "hakkimizda?hakkimizda=".$subspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				?>
			<?php }?>
			<?php while ($subsubmenuaracek=$subsubmenuara->fetch(PDO::FETCH_ASSOC)) {
				$subsubad=$subsubmenuaracek["Ad"];
				$sunsunspn=$subsubmenuaracek["SPN"];
				$submenuid=$subsubmenuaracek["SubMenuID"];
				if ($submenuid==4) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "arastirma?arastirma=".$sunsunspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subsubad ?></label></a></p>
					</div>
				<?php }
				elseif ($submenuid==9) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "tarihleme?tarihleme=".$sunsunspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subsubad ?></label></a></p>
					</div>
				<?php }
				elseif ($submenuid==10) {?>
					<div class="searchdivtext">
						<p><a href="adli"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subsubad ?></label></a></p>
					</div>
				<?php }
				?>
			<?php }?>
		</div>
	<?php }
	else{
		$text=$_SESSION["text"];
		$menuara=$db->prepare("SELECT * from menu where Ad like '%$text%'");
		$menuara->execute();
		$submenuara=$db->prepare("SELECT * from submenu where Ad like '%$text%'");
		$submenuara->execute();
		$subsubmenuara=$db->prepare("SELECT * from subsub where Ad like '%$text%'");
		$subsubmenuara->execute();
		$icerikara=$db->prepare("SELECT * from icerik where Ad or Baslik or Aciklama like '%$text%'");
		$icerikara->execute();
		$sonucsayisi=$menuara->rowCount()+$submenuara->rowCount()+$subsubmenuara->rowCount()+$icerikara->rowCount();
		?>
		<div class="searchanadiv">
			<div class="container">
				<h4>Aranan Kelime : <?php echo $text ?></h4>
				<p>Toplamda <?php echo $sonucsayisi ?> adet sonuç bulundu.</p>
			</div>
			<div class="searchdiv">
				
			<?php while ($icerikaracek=$icerikara->fetch(PDO::FETCH_ASSOC)) {
				$icerikad=$icerikaracek["Ad"];
				$icerikadspn=$icerikaracek["SPN"];
				$aciklama=$icerikaracek["Aciklama"];
				$tur=$icerikaracek["Tur"];?>
				<div class="searchdivtext">
					<?php 
					if ($tur=="Ressam") {?>
						<p><a href="<?php echo "sanatcilar?sanatci=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Hakkımızda") {?>
						<p><a href="<?php echo "hakkimizda?hakkimizda=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Soru") {?>
						<p><a href="<?php echo $icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Basın") {?>
						<p><a href="<?php echo $icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Kariyer") {?>
						<p><a href="<?php echo $icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Satış") {?>
						<p><a href="satis"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Bilimsel v") {?>
						<p><a href="<?php echo "bilimselveadli?bilimselveadli=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Tarihleme") {?>
						<p><a href="tarihleme"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Adli") {?>
						<p><a href="adli"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Tasdikleme") {?>
						<p><a href="<?php echo "tasdikleme?tasdikleme=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					elseif ($tur=="Araştırma") {?>
						<p><a href="<?php echo "arastirma?arastirma=".$icerikadspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $icerikad ?></label></a></p>
						<p><?php echo substr($aciklama,0,300)."..." ?></p>
					<?php }
					?>
				</div>
			<?php }?>
			<?php while ($menuaracek=$menuara->fetch(PDO::FETCH_ASSOC)) {
				$ad=$menuaracek["Ad"];
				$spn=$menuaracek["SPN"];?>
				<div class="searchdivtext">
					<p><a href="<?php echo $spn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $ad ?></label></a></p>
				</div>
			<?php }?>
			<?php while ($submenuaracek=$submenuara->fetch(PDO::FETCH_ASSOC)) {
				$subad=$submenuaracek["Ad"];
				$subspn=$submenuaracek["SPN"];
				$menuid=$submenuaracek["MenuID"];
				if ($menuid==2) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "tasdikleme?tasdikleme=".$subspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				elseif ($menuid==4) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "bilimselveadli?bilimselveadli=".$subspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				elseif ($menuid==5) {?>
					<div class="searchdivtext">
						<p><a href="satis"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				elseif ($menuid==7) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "hakkimizda?hakkimizda=".$subspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subad ?></label></a></p>
					</div>
				<?php }
				?>
			<?php }?>
			<?php while ($subsubmenuaracek=$subsubmenuara->fetch(PDO::FETCH_ASSOC)) {
				$subsubad=$subsubmenuaracek["Ad"];
				$sunsunspn=$subsubmenuaracek["SPN"];
				$submenuid=$subsubmenuaracek["SubMenuID"];
				if ($submenuid==4) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "arastirma?arastirma=".$sunsunspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subsubad ?></label></a></p>
					</div>
				<?php }
				elseif ($submenuid==9) {?>
					<div class="searchdivtext">
						<p><a href="<?php echo "tarihleme?tarihleme=".$sunsunspn ?>"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subsubad ?></label></a></p>
					</div>
				<?php }
				elseif ($submenuid==10) {?>
					<div class="searchdivtext">
						<p><a href="adli"><span><i class="fas fa-chevron-right"></i></span><label><?php echo $subsubad ?></label></a></p>
					</div>
				<?php }
				?>
			<?php }?>
			</div>
			<?php
		}?>
	</div>
	<?php require_once "footer.php" ?>
	<script>
		if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
		}
	</script>
<!--$_SESSION["kullanici_mail"]=$email;-->