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
			<p>Neden say??s?? her g??n b??y??yen memnuniyetli m????terilerimiz aras??na kat??lmal??s??n??z? Basit. Uzmanl??????m??z g??venilir ve sayg??nd??r. Hizmetlerimiz ??abuk ve nezaketlidir. Arad??????n??z cevaplar?? bulabilmeniz i??in sahip oldu??umuz t??m kaynaklar?? kullan??yoruz.</p>
			<div class="center" style="margin-top: 50px"><h4>SANAT GALER??LER?? ;</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>ADAMSON DUVANNES GALERILERI <br><span><i class="fas fa-location-dot"></i></span> Los Angeles, Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ALSKOM GALER??LER?? <br><span><i class="fas fa-location-dot"></i></span> New York, NY</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ASAHI GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Tokyo</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JAPAN AUSTIN GALER??LER??<br><span><i class="fas fa-location-dot"></i></span>Teksas</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ARMONDI SANAT GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Brescia, ??talya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>LA COMETA GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Bogot??, Kolombiya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HILARIO GALGUERA GALER??S??<br><span><i class="fas fa-location-dot"></i></span>M??xico City, Meksika</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HYUNDAI GALER??<br><span><i class="fas fa-location-dot"></i></span>Seul, G??ney Kore</p>
				<p><span><i class="fas fa-chevron-right"></i></span>PETER PAPPOT GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Amsterdam, Hollanda</p>
				<p><span><i class="fas fa-chevron-right"></i></span>IL PONTE CASA D'ASTE<br><span><i class="fas fa-location-dot"></i></span>Milano, ??talya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JANTINA'NIN ANT??KA  D??NYASI<br><span><i class="fas fa-location-dot"></i></span>Napoli</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KURT SVENSSONS SANAT T??CARET??<br><span><i class="fas fa-location-dot"></i></span>Stokholm, ??sve??</p>
				<p><span><i class="fas fa-chevron-right"></i></span>LABIN ART EXPRESS<br><span><i class="fas fa-location-dot"></i></span>H??rvatistan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MODUS SANAT GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ROBERT REESE ANT??KA<br><span><i class="fas fa-location-dot"></i></span>Atlanta, Georgia</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ANTONINA DAL 1890<br><span><i class="fas fa-location-dot"></i></span>Roma, ??talya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VAMP ????RKET??<br><span><i class="fas fa-location-dot"></i></span>Miami</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VAMP ????RKET??<br><span><i class="fas fa-location-dot"></i></span>Miami</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>A??IK ARTTIRMA ;</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>ST. AUGUSTINE GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ARTCURIAL<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>ARTMARK M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Romanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>AUCTIONATA<br><span><i class="fas fa-location-dot"></i></span>New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BAYER M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Konstanz, Almanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BABUINO CASA D'ASTE<br><span><i class="fas fa-location-dot"></i></span>Roma, ??talya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BAYEUX M??ZAYEDEC??L??K<br><span><i class="fas fa-location-dot"></i></span>Bayeux, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BLOOMSBURY M??ZAYEDEC??L??K<br><span><i class="fas fa-location-dot"></i></span>Londra, ??ngiltere</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BONHAMS<br><span><i class="fas fa-location-dot"></i></span>New York, ABD</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BUKOWSKI M??ZAYEDEC??L??K<br><span><i class="fas fa-location-dot"></i></span>??sve??</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BASSENGE SANAT M??ZAYEDELER??<br><span><i class="fas fa-location-dot"></i></span>Berlin, Almanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DEMATTEO G??ZEL SANATLAR<br><span><i class="fas fa-location-dot"></i></span>Connecticut, ABD</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DJ'S A??IK ARTIRMA GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Myrtle Beach, G??ney Karolina</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DOROTHEUM<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>EVE??? M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>IM KINSKY KUNST M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KAMINSKI M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span> Massachusetts</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KENO M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KOLLER M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Z??rih ve Genevre, Isvi??re</p>
				<p><span><i class="fas fa-chevron-right"></i></span>SCHLOSSER SANAT M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Almanya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MANITOU M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Cheyenne, Wyoming</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MENZIES<br><span><i class="fas fa-location-dot"></i></span>Kensington, Avustralya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MROCZEK BROTHERS<br><span><i class="fas fa-location-dot"></i></span>Seattle, WA</p>
				<p><span><i class="fas fa-chevron-right"></i></span>NEW ORLEANS M??ZAYEDE EV?? /ST. CHARLES GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Louisiana</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POOK AND POOK M??ZAYEDEC??L??K<br><span><i class="fas fa-location-dot"></i></span>Pennsylvania</p>
				<p><span><i class="fas fa-chevron-right"></i></span>SLOANS & KENYON<br><span><i class="fas fa-location-dot"></i></span>Chevy Chase, Maryland</p>
				<p><span><i class="fas fa-chevron-right"></i></span>TAJAN<br><span><i class="fas fa-location-dot"></i></span>Paris, Fransa</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KOLLER GALER??S??<br><span><i class="fas fa-location-dot"></i></span>Budape??te, Macaristan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VEILINGHUIS M??ZAYEDEC??L??K<br><span><i class="fas fa-location-dot"></i></span>Breda, Hollanda</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WHITE'S M??ZAYEDE EV??<br><span><i class="fas fa-location-dot"></i></span>Massachusets</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>S??GORTA ????RKETLER??</h4></div>
			
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>AIG INSURANCE</p>
				<p><span><i class="fas fa-chevron-right"></i></span>AMER??KAN MODERN INSURANCE GROUP</p>
				<p><span><i class="fas fa-chevron-right"></i></span>FIREMAN'S FUND INSURANCE</p>
				<p><span><i class="fas fa-chevron-right"></i></span>GENERAL CASUALTY INSURANCE<br><span><i class="fas fa-location-dot"></i></span>Wisconsin</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HARTFORD INSURANCE<br><span><i class="fas fa-location-dot"></i></span>Connecticut</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JOHNS EASTERN CO.<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KEMPER INSURANCE<br><span><i class="fas fa-location-dot"></i></span>Syracuse, New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>LA LATINOMAERICANA<br><span><i class="fas fa-location-dot"></i></span>Seguros SA, Mexico City, Mexico</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MBIA INSURANCE CORP<br><span><i class="fas fa-location-dot"></i></span>New York</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WHEELER, DEFUSCO & ASSOC.<br><span><i class="fas fa-location-dot"></i></span>New York</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>HUKUK F??RMALARI</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>COBB COLE<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DLA PIPER<br><span><i class="fas fa-location-dot"></i></span>Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JAROSLAV HREBICEK ESQ.<br><span><i class="fas fa-location-dot"></i></span>Prag, ??ek Cumhuriyeti</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DANN L. HUKUK OF??S??<br><span><i class="fas fa-location-dot"></i></span>Duncan, Bat?? Covina, Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>NOREEN T. FONTAINE HUKUK OF??S??<br><span><i class="fas fa-location-dot"></i></span>Corona, Kaliforniya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>AVUKAT MARY GRISBA-KING<br><span><i class="fas fa-location-dot"></i></span>Houston, Teksas</p>
				<p><span><i class="fas fa-chevron-right"></i></span>PAUL HOFMANN ESQ.<br><span><i class="fas fa-location-dot"></i></span>Prag, ??ek Cumhuriyeti</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POWERS, MCNALIS, TORRES & TEEBAGY<br><span><i class="fas fa-location-dot"></i></span>Bat?? Palm Sahili</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>DEVLET KURUMLARI</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>FBI, FEDERAL SORU??TURMA B??ROSU</p>
				<p><span><i class="fas fa-chevron-right"></i></span>M??LL?? G??VENL??K KURUMU. G???? ve G??MR??K ??DARES??. (ABD)</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POSTA DENETLEME MERKEZ?? (ABD)</p>
				<p><span><i class="fas fa-chevron-right"></i></span>US MARSHALS</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>TV</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>BBC<br><span><i class="fas fa-location-dot"></i></span>Londra, Birle??ik Krall??k</p>
				<p><span><i class="fas fa-chevron-right"></i></span>CNBC HAZ??NE DEDEKT??FLER??<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DISCOVERY CHANNEL</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HIGH NOON ENTERTAINMENT<br><span><i class="fas fa-location-dot"></i></span>Santa Monica, CA</p>
				<p><span><i class="fas fa-chevron-right"></i></span>HISTORY CHANNEL<br><span><i class="fas fa-location-dot"></i></span>New York and Los Angeles</p>
				<p><span><i class="fas fa-chevron-right"></i></span>TWOFOUR YAPIM<br><span><i class="fas fa-location-dot"></i></span>Londra, Birle??ik Krall??k</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>BASIN</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>ASSOCIATED PRESS</p>
				<p><span><i class="fas fa-chevron-right"></i></span>DAN??MARKA ULUSAL HABER AJANSI</p>
				<p><span><i class="fas fa-chevron-right"></i></span>RADYO YEN?? ZELANDA</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WORLD P??CTURE PRESS<br><span><i class="fas fa-location-dot"></i></span>Hollanda</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>??N??VERS??TELER</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>BETHUNE-COOKMAN ??N??VERS??TES??</p>
				<p><span><i class="fas fa-chevron-right"></i></span>BURGMANN KOLEJ??</p>
				<p><span><i class="fas fa-chevron-right"></i></span>JUNIATA KOLEJ?? SANAT M??ZES??<br><span><i class="fas fa-location-dot"></i></span>Huntingdon, Pennsylvania</p>
				<p><span><i class="fas fa-chevron-right"></i></span>KENNESAW STATE ??N??VERS??TES??<br><span><i class="fas fa-location-dot"></i></span>Georgia</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>KURUMSAL M????TER??LER</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>CONTINENTAL FUND ADVISORY NV<br><span><i class="fas fa-location-dot"></i></span>Br??ksel, Bel??ika</p>
				<p><span><i class="fas fa-chevron-right"></i></span>CSX CORPORATION<br><span><i class="fas fa-location-dot"></i></span>??talya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>GOR??ZYA SANAY??C??LER?? B??RL??????<br><span><i class="fas fa-location-dot"></i></span>??talya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>V??OLA DA GAMBA Toplulu??u<br><span><i class="fas fa-location-dot"></i></span>??svi??re, Almanya, Avusturya</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>CEMAATLER/TOPLULUKLAR</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>PEDER JOSE LUIS MENENDEZ CEMAAT??</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MIAMI PRESB??TERYEN K??L??SES??</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>M??ZELER</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>FAIRVIEW SANAT TAR??H?? M??ZES??</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MASHANTUCKET PEQUOT M??ZE & ARA??TIRMA MERKEZ??<br><span><i class="fas fa-location-dot"></i></span>Mashantucket, CT</p>
				<p><span><i class="fas fa-chevron-right"></i></span>FLOR??DA B??L??M VE SANAT M??ZES??<br><span><i class="fas fa-location-dot"></i></span>Florida</p>
				<p><span><i class="fas fa-chevron-right"></i></span>POMPIDOU CENTRE<br><span><i class="fas fa-location-dot"></i></span>Paris</p>
				<p><span><i class="fas fa-chevron-right"></i></span>GRAND RAPIDS KAMU M??ZES??<br><span><i class="fas fa-location-dot"></i></span>Michigan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>WORCESTER M??ZES??<br><span><i class="fas fa-location-dot"></i></span>Worcester, Massachusetts</p>
			</div>
			<div class="center" style="margin-top:50px"><h4>KOLEKS??YONCULAR</h4></div>
			<div class="yanyana">
				<p><span><i class="fas fa-chevron-right"></i></span>JAMES STUNT ESQ.</p>
				<p><span><i class="fas fa-chevron-right"></i></span>MAG. FRANZ BITTENDORFER<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>PRINCESS INGRID FRANKOPAN</p>
				<p><span><i class="fas fa-chevron-right"></i></span>RYSZARD WASKO<br><span><i class="fas fa-location-dot"></i></span>Lodz, Polonya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>??EYH ADNAN ALGHAMDI MOHAMMED<br><span><i class="fas fa-location-dot"></i></span>Suudi Arabistan</p>
				<p><span><i class="fas fa-chevron-right"></i></span>VIRGILIUS MOLDOVAN<br><span><i class="fas fa-location-dot"></i></span>Viyana, Avusturya</p>
				<p><span><i class="fas fa-chevron-right"></i></span>EKSELANSLARI NAWAB SALAR JUNG III??? M??RAS??ILARI<br><span><i class="fas fa-location-dot"></i></span>Hindistan</p>
			</div>
			<div class="container" style="display:inline-block; margin-top: 50px;">
				<div class="center"><p>Email: info@artexpertwebsite.com</p></div>
				<p>Sorular??n??za genellikle 24 saat s??re i??inde cevap veririz.
					Konumunuza en yak??n telefon numaras??n?? bulmak i??in <a href="hakkimizda?hakkimizda=sadresler">buraya</a> t??klay??n.
				Tablonuzu de??erlendirmek i??in bizi aray??n.</p>
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
			<p><a href="index">Ana Sayfa</a> <span><i class="fas fa-chevron-right"></i></span>Hakk??m??zda</p>
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