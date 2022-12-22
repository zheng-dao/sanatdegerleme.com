-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 04 Nis 2022, 12:46:15
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `art`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `submenu`
--

CREATE TABLE `submenu` (
  `SubMenuID` int(11) NOT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `SPN` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sira` int(11) NOT NULL,
  `MenuID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `submenu`
--

INSERT INTO `submenu` (`SubMenuID`, `Ad`, `SPN`, `sira`, `MenuID`) VALUES
(1, 'İnceleme', 'sinceleme', 1, 2),
(2, 'Zorlu Vakalar', 'szorluvarliklar', 2, 2),
(3, 'Ret İnceleme', 'sretinceleme', 3, 2),
(4, 'Araştırma', 'sarastirma', 4, 2),
(5, 'Atıf', 'satif', 5, 2),
(6, 'Analiz', 'sanaliz', 6, 2),
(7, 'Tasdik Belgesi', 'stasdikbelgesi', 7, 2),
(8, 'Bilimsel', 'sbilimsel', 1, 4),
(9, 'Tarihleme', 'starihleme', 2, 4),
(10, 'Adli', 'sadli', 3, 4),
(11, 'Özel Fotoğraflama', 'sozelfotograflama', 4, 4),
(12, 'Röntgenler', 'srontgenler', 5, 4),
(13, 'Tavsiye', 'stavsiye', 1, 5),
(14, 'Yardım', 'syardim', 2, 5),
(15, 'Aracılık', 'saracilik', 3, 5),
(16, 'Özel Teklif', 'sozelteklif', 4, 5),
(17, 'Açık Artırma', 'sacikartirma', 5, 5),
(18, 'Çevrimiçi', 'sonline', 6, 5),
(19, 'Hikayemiz', 'shikayemiz', 1, 7),
(20, 'Adresler', 'sadresler', 2, 7),
(21, 'Diller', 'sdiller', 3, 7),
(22, 'Araştırma Kaynakları', 'sarastirmakaynaklari', 4, 7),
(23, 'Uzmanlarımızın Eğitim Bilgileri', 'suzmanlarimizinegitimbilgileri', 5, 7),
(24, 'Seyehat ve İnceleme', 'sseyehatveinceleme', 6, 7),
(25, 'Müşterilerimiz', 'smusteriler', 7, 7),
(26, 'Yol Haritası', 'syolharitasi', 8, 7),
(27, 'İstenmeyen Referanslar', 'sistenmeyenreferenslar', 1, 8),
(28, 'Revizyon', 'srevizyon', 2, 8),
(29, 'Revizyon Gönder', 'srevizyongonder', 3, 8),
(30, 'Hakkımızda', 'shakkimizda', 1, 9),
(31, 'Nasıl Çalışırız', 'snasilcalisiriz', 2, 9),
(32, 'Öğrenciler ve Mezunlar', 'sogrencilervemezunlar', 3, 9),
(33, 'Tecrubeli Uzmanlar', 'stecrubeliuzmanlar', 4, 9),
(34, 'Çeşitlilik ve Kapsayıcılık', 'scesitlilikvekapsayicilik', 5, 9),
(35, 'Yazılı Röportajı Talebi', 'syazilitalebi', 1, 10),
(36, 'Radyo Röportajı Talebi', 'sradyotalebi', 2, 10),
(37, 'Televizyon Röportajı Talebi', 'stelevizyontalebi', 3, 10),
(38, 'Başka Bir Dilde Röportaj Talebi', 'sbaskadildetalebi', 4, 10),
(39, 'Medya İçin İçerden Bilgi Talebi', 'smedyaicintalebi', 5, 10),
(40, 'Medya İçin Eser Gerçeklik Kontrolü', 'smedyaicineser', 6, 10),
(41, 'Medya Bağlantısı ', 'smedyabaglantisi', 1, 10),
(42, 'Adres', 'sadres', 1, 11),
(43, 'Fotoğraf ve Belgeleri Yükleyin', 'sfotografyukle', 2, 11),
(44, 'Abidin DİNO', 'sabidindino', 1, 6),
(45, 'Ahmet Ziya AKBULUT', 'sahmetziyaakbulut', 2, 6),
(46, 'Avni ARBAŞ', 'savniarbas', 3, 6),
(47, 'Bedri Rahmi EYÜBOĞLU', 'sbedrirahmieyuboglu', 4, 6),
(48, 'Burhan DOĞANÇAY', 'sburhandogancay', 5, 6),
(49, 'Cemal Sait TOLLU', 'scemalsaittollu', 6, 6),
(50, 'Ercüment KALMIK', 'sercumentkalmik', 7, 6),
(51, 'Ertuğrul Oğuz FIRAT', 'sertugruloguzfirat', 8, 6),
(52, 'Fatma Nazlı ECEVİT', 'sfatmanazliecevit', 9, 6),
(53, 'Feyhaman DURAN', 'sfeyhamanduran', 10, 6),
(54, 'Fikret Mualla SAYGI', 'sfikretmuallasaygi', 11, 6),
(55, 'Hale ASAF', 'shaleasaf', 12, 6),
(56, 'Halil PAŞA', 'shalilpasa', 13, 6),
(57, 'Hasan RIZA', 'shasanriza', 14, 6),
(58, 'Hüseyin Avni LİFİJ', 'shuseyinavnilifij', 15, 6),
(59, 'İbrahim ÇALLI', 'sibrahimcalli', 16, 6),
(60, 'İbrahim SAFİ', 'sibrahimsafi', 17, 6),
(61, 'Naim ULUDOĞAN', 'snaimuludagan', 18, 6),
(62, 'Nazmi Ziya GÜRAN', 'snazmiziyaguran', 19, 6),
(63, 'Nurullah BERK', 'snurallahberk', 20, 6),
(64, 'Osman Hamdi BEY', 'sosmanhamdibey', 21, 6),
(65, 'Princes Fahrelnissa ZEİD', 'sprincesfahrelnissazeid', 22, 6),
(66, 'Sabri BERKEL', 'ssabriberkel', 23, 6),
(67, 'Selma GÜRBÜZ', 'sselmagurbuz', 24, 6),
(68, 'Süleyman SEYYİD', 'ssuleymanseyyid', 25, 6),
(69, 'Şeker Ahmet PAŞA', 'ssekerahmetpasa', 26, 6),
(70, 'Şevket DAĞ', 'ssevketdag', 27, 6);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`SubMenuID`),
  ADD KEY `FK_SubMenu` (`MenuID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `submenu`
--
ALTER TABLE `submenu`
  MODIFY `SubMenuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `FK_SubMenu` FOREIGN KEY (`MenuID`) REFERENCES `menu` (`MenuID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
