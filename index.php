<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
	
<script src='https://www.google.com/recaptcha/api.js'></script>
<body>
	<div class="imageindex">
		<img src="image/artmuseum.jpg">
		<div class="imageindextext">
			<label>
				Sanat eseri tastikleme hizmetlerinde dünya'nın en büyük gruplarından biriyiz.
			</label>
		</div>
	</div>
	<div class="indextext">
		<div class="center">
			<label>
				Sanat tasdikleme ve değerleme uzmanlarından oluşan, dünya genelinde 30 ülkeye yayılmış 70 kişilik yetenekli ekibimizle beraber, değer üretiyoruz. Sanat dünyasının kapılarını muhteşem fiyatlarla müşterilerimize açıyoruz ve müşterilerimizin servetlerini büyütüyoruz.
			</label>
		</div>
	</div>
	<div class="sayac">
		<div class="row">
			<div class="col-sm-3" style="border-right: 0.1px solid #1c4483;">
				<div class="center">
					<h2>14.000 <span>+</span></h2>
					<label>Degerlendirme</label>
				</div>
			</div>
			<div class="col-sm-3" style="border-right: 0.1px solid #1c4483;">
				<div class="center">
					<h2>70.000 <span>+</span></h2>
					<label>Doğrulama</label>
				</div>
			</div>
			<div class="col-sm-3" style="border-right: 0.1px solid #1c4483;">
				<div class="center">
					<h2>10.000 <span>+</span></h2>
					<label>Güvenilir Müşteri</label>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="center">
					<h2>20. <span>yıl</span></h2>
					<label>2002'den beri</label>
				</div>
			</div>
		</div>
	</div>
	<div class="basarilar center">
		<h2>Başarılarımız</h2>
	</div>
	<div class="sliderdiv"></div>
	<div class="swipe" id="swipe">
		<div class="panel current" id="panel">
			<img src="image/slider3.jpg">
			<div class="swipetext">
				<h4>Son Haberler</h4>
				<p>
					Rufino Tamayo’nun bir tablosuna 7.000.000$ değer biçildi.
				</p>
				<label><span><i class="fas fa-chevron-right"></i></span>Devamını Oku</label>
			</div>
		</div>
		<div class="panel" id="panel">
			<img src="image/slider2.jpg">
			<div class="swipetext">
				<h4>Son Haberler</h4>
				<p>
					Leonardo Da Vinci’ye 65.000.000$ değer biçildi.
				</p>
				<label><span><i class="fas fa-chevron-right"></i></span>Devamını Oku</label>
			</div>	
		</div>
		<div class="panel" id="panel">
			<img src="image/slider1.jpg">
			<div class="swipetext">
				<h4>Son Haberler</h4>
				<p>
					Claude Monet tablosu Art Experts müşterisine satıldı.
				</p>
				<label><span><i class="fas fa-chevron-right"></i></span>Devamını Oku</label>
			</div>	
		</div>
	</div>
	<button id="next" class="button-next"> <i class="fas fa-chevron-right"></i></button>
	<label id="slidercount" class="slidercount"> 1 / 3 </label>
	<button id="prev" class="button-back"> <i class="fas fa-chevron-left"></i></button>
	<div class="container">
		<div class="bigcard">
			<div class="card">
				<div class="cardimage">
					<img src="image/card1.jpg">
				</div>
				<div class="bigcardtext">
					<h4>Sanat Tasdiklemesi</h4>
					<label>Birinci sınıf sanat eserlerinin tasdiklenmesinde dünyanın her yanından müşteriler ile en yüksek başarı oranları.</label>
				</div>
			</div>
			<div class="card">
				<div class="cardimage">
					<img src="image/adam.jpg">
				</div>
				<div class="bigcardtext">
					<h4>Sanat Değerlemesi</h4>
					<label>Dünyanın her yanından müşterilere en mantıklı değerlemeler ile en yüksek değerleri sağlıyoruz.</label>
				</div>
			</div>
			<div class="card">
				<div class="cardimage">
					<img src="image/card2.jpg">
				</div>
				<div class="bigcardtext">
					<h4>Eser satışları</h4>
					<label>Özel teklifler ile müşterilerimiz için en yüksek satış fiyatları elde edildi.</label>
				</div>
			</div>
			<div class="card">
				<div class="cardimage">
					<img src="image/card3.jpg">
				</div>
				<div class="bigcardtext">
					<h4>Sanat  Bilimi</h4>
					<label>Sanat eserlerini tasdiklemek amacıyla yapay zekadan algoritmalara tüm adli teknikleri müşterilerimizin hizmetine sunuyoruz..</label>
				</div>
			</div>
		</div>
	</div>
	<div class="contactdiv" id="contact">
		<img src="image/contact.jpg">
	</div>
	<div class="contactdivtext">
		<div class="contactleft">
			<div class="contactlefttext">
				<h4>Bize Ulaşın</h4>
				<p>* En fazla 25 adet foroğraf yükleyin.</p>
				<form class="dropzone" action="mail.php" enctype="multipart/form-data">
					<?php 
					$str= "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPUQRSTUVWXYZ";
					$dosya=substr(str_shuffle($str),0,8);
					?>
					<input style="display: none;" type="text" name="session" value="<?php echo $dosya ?>">
				</form>
				<br>
				<form action="mail" method="POST">
					<input required type="text" name="ad" placeholder="İsminiz :">
					<input required type="email" name="eposta" placeholder="Mail Adresiniz :">
					<textarea required name="mesaj" placeholder="Mesajınız :"></textarea>
                    <div class="g-recaptcha" data-sitekey="6LdeKuohAAAAABng72iXkg-RM5DuX3tVLjQnEmHV"></div>
					<button name="gndr" id="gndr" class="gndr">GÖNDER</button>
				</form>
			</div>
		</div>
	</div>
	<div class="fixeddiv">
		<div class="fixeddivtext">
			<h4>Neler Yapıyoruz</h4>
			<p>Uzmanlarımız dünyanın her yerine sanat eserlerini ve koleksiyonları incelemek üzere seyahat eder. Art Experts; güvenilir, kapsamlı ve derinlemesine araştırma ve analiz yapar. Müşterilerimiz arasında federal kurumlar, bankalar, büyük sigorta şirketleri, birçok müzayede evi, hukuk firmaları, kraliyet üyeleri ve ünlüler bulunmaktadır.</p>
			<label><a style="text-decoration: none; color: 1c4483;" href="hakkimizda"><span><i class="fas fa-chevron-right"></i></span>Devamını Oku</a></label>
		</div>
	</div>
	<div class="aboutdiv">
		<img src="image/about.jpg">
	</div>
	<div class="aboutdivtext">
		<h4>Hakkımızda</h4>
		<p>Art Experts 2002'de kurulan bir amerikan sanat tasdikleme ve değerleme kuruluşudur.
		Firma ABD, Kanada, İngiltere, Avrupa ve Asyada bulunan iyi eğitimli sanat tarihçileri ve sanat değerleme uzmanlarından oluşmaktadır.</p>
		<label><a style="text-decoration: none; color: 1c4483;" href="hakkimizda"><span><i class="fas fa-chevron-right"></i></span>Devamını Oku</a></label>
	</div>
	<!--<div class="smallcarddiv">
		<div class="container-fluid">
			<div class="smallcard current">
				<h4>News and Insights</h4>
				<p>Visit the Newsroom for our latest News, Insights and other publications.Visit the Newsroom for our latest News, .</p>
				<label><span><i class="fas fa-chevron-right"></i></span>Read More</label>
			</div>
			<div class="smallcard">
				<h4>News and Insights</h4>
				<p>Visit the Newsroom for our latest News, Insights and other publications.Visit the Newsroom for our latest News, Insights and other publications.Visit the Newsroom for our latest News, .</p>
				<label><span><i class="fas fa-chevron-right"></i></span>Read More</label>
			</div>
			<div class="smallcard">
				<h4>News and Insights</h4>
				<p>Visit the Newsroom for our latest News, Insights and other publications.Visit the Newsroom for our latest News,
				.</p>
				<label><span><i class="fas fa-chevron-right"></i></span>Read More</label>
			</div>
		</div>
	</div>-->
	<!--<div class="contactmessagediv" id="contact">
		<div class="contactleft">
			<div class="contactlefttext">
				<input type="text" name="ad" placeholder="İsminiz :">
				<input type="mail" name="mail" placeholder="Mail Adresiniz :">
				<p>* En fazla 25 adet foroğraf yükleyin.</p>
				<form class="dropzone" action="islem.php" id="loadfile" method="POST" enctype="multipart/form-data">

				</form>
				<textarea placeholder="Mesajınız :"></textarea>
				<button id="gndr" class="gndr">GÖNDER</button>
			</div>
		</div>
		<div class="contactright">
			<div class="contactrighttext">
				<h4>Bize Ulaşın</h4>
				<h6>Adres : </h6>
				<p>1345 6th Avenue 33rd Floor New York, NY 10105</p>
				<h6>Email : </h6>
				<p>info@sanatdegerleme.com</p>
				<h6>Telefon :</h6>
				<p>+1-212-658-0466</p>
				<a href=""><img src="image/sosyal/ffacebook.png"></a>
				<a href=""><img src="image/sosyal/ftwitter.png"></a>
				<a href=""><img src="image/sosyal/linkedin.png"></a>
				<a href=""><img src="image/sosyal/finstagram.png"></a>
			</div>
		</div>
	</div>-->
	<?php 
	if ($_GET["mail"]=="ok") {?>
		<div class="mailkapsa"></div>
		<div class="mailmessage">
			<button class="maildivkapa">X</button>
			<div class="center">
				<i class="fa-solid fa-face-smile"></i>
			</div>
			<p>Mail bize ulaşmıştır. En kısa sürede size geri dönüş yapacağınız.
				Herhangi bir sorunuz olursa lütfen <b>info@sanatdegerleme.com</b> adresinden bize ulaşın.</p>
			</div>
		<?php } ?>
</body>
<script type="text/javascript">
		let maildivkapa = document.querySelector(".maildivkapa");
		let mailmessage = document.querySelector(".mailmessage");
		let mailkapsa = document.querySelector(".mailkapsa");
		maildivkapa.onclick = function(){
			mailmessage.style.display = "none";
			mailkapsa.style.display = "none";
		}
	</script>
<?php require_once "footer.php" ?>
