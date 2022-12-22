<?php require_once "header.php" ?>
<?php error_reporting(0); ?>
<?php 
$hakkimizda=$db->prepare("SELECT * from submenu where SPN=:SPN");
$hakkimizda->execute(array(
	"SPN" => $_GET["hakkimizda"]
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
	"SPN" => $_GET["hakkimizda"]
));
$icerikcek=$icerik->fetch(PDO::FETCH_ASSOC);
$img=$icerikcek["Img"];
$icerikad=$icerikcek["Ad"];
$baslik=$icerikcek["Baslik"];
$kisaaciklama=$icerikcek["KisaAciklama"];
$aciklama=$icerikcek["Aciklama"];

if ($_GET["hakkimizda"]=="shikayemiz") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
elseif ($_GET["hakkimizda"]=="sadresler") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hakkimizdadivtext">
			<h1><?php echo $baslik ?></h1>
			<p><?php echo $aciklama ?></p>
		</div>
	</div>
	<div class="adres">
		<div class="container">
			<div class="adreslerdiv">
				<h4>New York</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Washington DC</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Los Angeles</h4>
			</div>
			<div class="adreslerdiv">
				<h4>London</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Paris</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Milan</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Rome</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Brussels</h4>
			</div>
			<div class="adreslerdiv">
				<h4>Mexico City</h4>
			</div>
		</div>
	</div>
<?php }
elseif($_GET["hakkimizda"]=="sdiller"){?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
elseif ($_GET["hakkimizda"]=="sarastirmakaynaklari") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
elseif($_GET["hakkimizda"]=="suzmanlarimizinegitimbilgileri"){?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
elseif($_GET["hakkimizda"]=="sseyehatveinceleme"){?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
elseif($_GET["hakkimizda"]=="smusteriler"){?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
				<h4><?php echo $icerikad ?></h4>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hakkimizdadivtext">
			<p>Neden sayısı her gün büyüyen memnuniyetli müşterilerimiz arasına katılmalısınız? Basit. Uzmanlığımız güvenilir ve saygındır. Hizmetlerimiz çabuk ve nezaketlidir. Aradığınız cevapları bulabilmeniz için sahip olduğumuz tüm kaynakları kullanıyoruz.</p>
			<div class="center" style="margin-top: 50px"><h4>SANAT GALERİLERİ ;</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>ADAMSON DUVANNES GALERILERI <br><span><i class="fas fa-location-dot"></i></span> Los Angeles, Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ALSKOM GALERİLERİ <br><span><i class="fas fa-location-dot"></i></span> New York, NY</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ASAHI GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Tokyo</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JAPAN AUSTIN GALERİLERİ<br><span><i class="fas fa-location-dot"></i></span>Teksas</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ARMONDI SANAT GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Brescia, İtalya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>LA COMETA GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Bogotá, Kolombiya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HILARIO GALGUERA GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>México City, Meksika</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HYUNDAI GALERİ<br><span><i class="fas fa-location-dot"></i></span>Seul, Güney Kore</p>
				<p><span><i class="fas fa-chevron-right"></i></span>PETER PAPPOT GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Amsterdam, Hollanda</p>
				<p><span><i class="fas fa-chevron-right"></i></span>IL PONTE CASA D'ASTE<br><span><i class="fas fa-location-dot"></i></span>Milano, İtalya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JANTINA'NIN ANTİKA  DÜNYASI<br><span><i class="fas fa-location-dot"></i></span>Napoli</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KURT SVENSSONS SANAT TİCARETİ<br><span><i class="fas fa-location-dot"></i></span>Stokholm, İsveç</p>
				<p><span><i class="fas fa-chevron-right"></i></span>LABIN ART EXPRESS<br><span><i class="fas fa-location-dot"></i></span>Hırvatistan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MODUS SANAT GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ROBERT REESE ANTİKA<br><span><i class="fas fa-location-dot"></i></span>Atlanta, Georgia</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ANTONINA DAL 1890<br><span><i class="fas fa-location-dot"></i></span>Roma, İtalya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VAMP ŞİRKETİ<br><span><i class="fas fa-location-dot"></i></span>Miami</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VAMP ŞİRKETİ<br><span><i class="fas fa-location-dot"></i></span>Miami</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>AÇIK ARTTIRMA ;</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>ST. AUGUSTINE GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ARTCURIAL<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ARTMARK MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Romanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>AUCTIONATA<br><span><i class="fas fa-location-dot"></i></span>New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BAYER MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Konstanz, Almanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BABUINO CASA D'ASTE<br><span><i class="fas fa-location-dot"></i></span>Roma, İtalya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BAYEUX MÜZAYEDECİLİK<br><span><i class="fas fa-location-dot"></i></span>Bayeux, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BLOOMSBURY MÜZAYEDECİLİK<br><span><i class="fas fa-location-dot"></i></span>Londra, İngiltere</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BONHAMS<br><span><i class="fas fa-location-dot"></i></span>New York, ABD</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BUKOWSKI MÜZAYEDECİLİK<br><span><i class="fas fa-location-dot"></i></span>İsveç</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BASSENGE SANAT MÜZAYEDELERİ<br><span><i class="fas fa-location-dot"></i></span>Berlin, Almanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DEMATTEO GÜZEL SANATLAR<br><span><i class="fas fa-location-dot"></i></span>Connecticut, ABD</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DJ'S AÇIK ARTIRMA GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Myrtle Beach, Güney Karolina</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DOROTHEUM<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>EVE– MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>IM KINSKY KUNST MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KAMINSKI MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span> Massachusetts</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KENO MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KOLLER MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Zürih ve Genevre, Isviçre</p>
				<p><span><i class="fas fa-chevron-right"></i></span>SCHLOSSER SANAT MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Almanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MANITOU MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Cheyenne, Wyoming</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MENZIES<br><span><i class="fas fa-location-dot"></i></span>Kensington, Avustralya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MROCZEK BROTHERS<br><span><i class="fas fa-location-dot"></i></span>Seattle, WA</p>
				<p><span><i class="fas fa-chevron-right"></i></span>NEW ORLEANS MÜZAYEDE EVİ /ST. CHARLES GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Louisiana</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POOK AND POOK MÜZAYEDECİLİK<br><span><i class="fas fa-location-dot"></i></span>Pennsylvania</p>
				<p><span><i class="fas fa-chevron-right"></i></span>SLOANS & KENYON<br><span><i class="fas fa-location-dot"></i></span>Chevy Chase, Maryland</p>
				<p><span><i class="fas fa-chevron-right"></i></span>TAJAN<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KOLLER GALERİSİ<br><span><i class="fas fa-location-dot"></i></span>Budapeşte, Macaristan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VEILINGHUIS MÜZAYEDECİLİK<br><span><i class="fas fa-location-dot"></i></span>Breda, Hollanda</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WHITE'S MÜZAYEDE EVİ<br><span><i class="fas fa-location-dot"></i></span>Massachusets</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>SİGORTA ŞİRKETLERİ</h4></div>
			
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>AIG INSURANCE</p>
				<p><span><i class="fas fa-chevron-right"></i></span>AMERİKAN MODERN INSURANCE GROUP</p>
				<p><span><i class="fas fa-chevron-right"></i></span>FIREMAN'S FUND INSURANCE</p>
				<p><span><i class="fas fa-chevron-right"></i></span>GENERAL CASUALTY INSURANCE<br><span><i class="fas fa-location-dot"></i></span>Wisconsin</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HARTFORD INSURANCE<br><span><i class="fas fa-location-dot"></i></span>Connecticut</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JOHNS EASTERN CO.<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KEMPER INSURANCE<br><span><i class="fas fa-location-dot"></i></span>Syracuse, New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>LA LATINOMAERICANA<br><span><i class="fas fa-location-dot"></i></span>Seguros SA, Mexico City, Mexico</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MBIA INSURANCE CORP<br><span><i class="fas fa-location-dot"></i></span>New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WHEELER, DEFUSCO & ASSOC.<br><span><i class="fas fa-location-dot"></i></span>New York</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>HUKUK FİRMALARI</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>COBB COLE<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DLA PIPER<br><span><i class="fas fa-location-dot"></i></span>Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JAROSLAV HREBICEK ESQ.<br><span><i class="fas fa-location-dot"></i></span>Prag, Çek Cumhuriyeti</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DANN L. HUKUK OFİSİ<br><span><i class="fas fa-location-dot"></i></span>Duncan, Batı Covina, Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>NOREEN T. FONTAINE HUKUK OFİSİ<br><span><i class="fas fa-location-dot"></i></span>Corona, Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>AVUKAT MARY GRISBA-KING<br><span><i class="fas fa-location-dot"></i></span>Houston, Teksas</p>
				<p><span><i class="fas fa-chevron-right"></i></span>PAUL HOFMANN ESQ.<br><span><i class="fas fa-location-dot"></i></span>Prag, Çek Cumhuriyeti</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POWERS, MCNALIS, TORRES & TEEBAGY<br><span><i class="fas fa-location-dot"></i></span>Batı Palm Sahili</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>DEVLET KURUMLARI</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>FBI, FEDERAL SORUŞTURMA BÜROSU</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MİLLİ GÜVENLİK KURUMU. GÖÇ ve GÜMRÜK İDARESİ. (ABD)</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POSTA DENETLEME MERKEZİ (ABD)</p>
				<p><span><i class="fas fa-chevron-right"></i></span>US MARSHALS</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>TV</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>BBC<br><span><i class="fas fa-location-dot"></i></span>Londra, Birleşik Krallık</p>
				<p><span><i class="fas fa-chevron-right"></i></span>CNBC HAZİNE DEDEKTİFLERİ<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DISCOVERY CHANNEL</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HIGH NOON ENTERTAINMENT<br><span><i class="fas fa-location-dot"></i></span>Santa Monica, CA</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HISTORY CHANNEL<br><span><i class="fas fa-location-dot"></i></span>New York and Los Angeles</p>
				<p><span><i class="fas fa-chevron-right"></i></span>TWOFOUR YAPIM<br><span><i class="fas fa-location-dot"></i></span>Londra, Birleşik Krallık</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>BASIN</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>ASSOCIATED PRESS</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DANİMARKA ULUSAL HABER AJANSI</p>
				<p><span><i class="fas fa-chevron-right"></i></span>RADYO YENİ ZELANDA</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WORLD PİCTURE PRESS<br><span><i class="fas fa-location-dot"></i></span>Hollanda</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>ÜNİVERSİTELER</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>BETHUNE-COOKMAN ÜNİVERSİTESİ</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BURGMANN KOLEJİ</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JUNIATA KOLEJİ SANAT MÜZESİ<br><span><i class="fas fa-location-dot"></i></span>Huntingdon, Pennsylvania</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KENNESAW STATE ÜNİVERSİTESİ<br><span><i class="fas fa-location-dot"></i></span>Georgia</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>KURUMSAL MÜŞTERİLER</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>CONTINENTAL FUND ADVISORY NV<br><span><i class="fas fa-location-dot"></i></span>Brüksel, Belçika</p>
				<p><span><i class="fas fa-chevron-right"></i></span>CSX CORPORATION<br><span><i class="fas fa-location-dot"></i></span>İtalya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>GORİZYA SANAYİCİLERİ BİRLİĞİ<br><span><i class="fas fa-location-dot"></i></span>İtalya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VİOLA DA GAMBA Topluluğu<br><span><i class="fas fa-location-dot"></i></span>İsviçre, Almanya, Avusturya</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>CEMAATLER/TOPLULUKLAR</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>PEDER JOSE LUIS MENENDEZ CEMAATİ</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MIAMI PRESBİTERYEN KİLİSESİ</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>MÜZELER</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>FAIRVIEW SANAT TARİHİ MÜZESİ</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MASHANTUCKET PEQUOT MÜZE & ARAŞTIRMA MERKEZİ<br><span><i class="fas fa-location-dot"></i></span>Mashantucket, CT</p>
				<p><span><i class="fas fa-chevron-right"></i></span>FLORİDA BİLİM VE SANAT MÜZESİ<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POMPIDOU CENTRE<br><span><i class="fas fa-location-dot"></i></span>Paris</p>
				<p><span><i class="fas fa-chevron-right"></i></span>GRAND RAPIDS KAMU MÜZESİ<br><span><i class="fas fa-location-dot"></i></span>Michigan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WORCESTER MÜZESİ<br><span><i class="fas fa-location-dot"></i></span>Worcester, Massachusetts</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>KOLEKSİYONCULAR</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>JAMES STUNT ESQ.</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MAG. FRANZ BITTENDORFER<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>PRINCESS INGRID FRANKOPAN</p>
				<p><span><i class="fas fa-chevron-right"></i></span>RYSZARD WASKO<br><span><i class="fas fa-location-dot"></i></span>Lodz, Polonya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ŞEYH ADNAN ALGHAMDI MOHAMMED<br><span><i class="fas fa-location-dot"></i></span>Suudi Arabistan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VIRGILIUS MOLDOVAN<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>EKSELANSLARI NAWAB SALAR JUNG III’ MİRASÇILARI<br><span><i class="fas fa-location-dot"></i></span>Hindistan</p>
			</div>
			<div class="container" style="display:inline-block; margin-top: 50px;">
				<div class="center"><p>Email: info@artexpertwebsite.com</p></div>
				<p>Sorularınıza genellikle 24 saat süre içinde cevap veririz.
					Konumunuza en yakın telefon numarasını bulmak için <a href="hakkimizda?hakkimizda=sadresler">buraya</a> tıklayın.
				Tablonuzu değerlendirmek için bizi arayın.</p>
			</div>

			
		</div>
	</div>
<?php }
elseif ($_GET["hakkimizda"]=="syolharitasi") {?>
	<div class="container">
		<div class="headerinfo">
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span> <a href="<?php echo $spn ?>"><?php echo $ad ?></a> <span><i class="fas fa-chevron-right"></i></span> <?php echo $spnad ?></p>
		</div>
	</div>
	<div class="container-fluid">
		<div class="hakkimizdadiv">
			<div class="hakkimizdadivimg">
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span>Hakkımızda</p>
		</div>
	</div>
	<?php 
	$hakkimizda2=$db->prepare("SELECT * from icerik where SPN=:SPN");
	$hakkimizda2->execute(array(
		"SPN" => "hakkimizda"
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
				<img src="<?php echo "image/hakkimizda/".$img ?>">
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
				"MenuID" => 7
			));
			while ($menucek2=$menu2->fetch(PDO::FETCH_ASSOC)) {
				$menuad=$menucek2["Ad"];
				$menuspn=$menucek2["SPN"];?>
				<p><span><i class="fas fa-chevron-right"></i></span><a href="<?php echo "hakkimizda?hakkimizda=".$menuspn ?>"><?php echo $menuad ?></a></p>
			<?php }
			?>
		</div>
	</div>
<?php }
?>
<?php require_once "footer.php" ?>