<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<div class="container">
	<div class="headerinfo">
		<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <?php echo "Fotoğraf ve Belgeleri Yükleyin" ?></p>
	</div>
</div>
<div class="container-fluid">
	<div class="hakkimizdadiv">
		<div class="hakkimizdadivimg">
			<img src="<?php echo "image/fvby/fvby.jpg"?>">
			<h4>Fotoğraf ve Belgeleri Yükleyin</h4>
		</div>
	</div>
</div>
<div class="fotografyukle">
	<div class="container-fluid">
		<input type="text" name="ad" placeholder="İsminiz :">
		<input type="mail" name="mail" placeholder="Mail Adresiniz :">
		<p>* En fazla 25 adet foroğraf yükleyin.</p>
		<form class="dropzone" action="islem.php" id="loadfile" method="POST" enctype="multipart/form-data">

		</form>
		<textarea placeholder="Mesajınız :"></textarea>
		<p><button id="gndr" class="gndr">GÖNDER</button></p>
	</div>
</div>
<?php require_once "footer.php" ?>