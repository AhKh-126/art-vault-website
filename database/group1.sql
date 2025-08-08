-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2023, 23:05:26
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `group1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `img_id` int(10) NOT NULL,
  `userID` int(4) NOT NULL,
  `img_url` varchar(70) NOT NULL,
  `img_text` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`img_id`, `userID`, `img_url`, `img_text`) VALUES
(4, 2, 'IMG6467442d08b933.11437959.jpg', '/imagine a portrait of a drifter in a neon cyberpunk arcade'),
(7, 1, 'IMG64768bb24ed356.04331640.png', 'Cyberpunk style, a cat standing on a skateboard, wearing a backwards baseball cap and holding a boombox on its shoulder, confident expression, vibrant colors, graffiti-style background, edgy atmosphere, playful mood, intricate details, high-quality artwork masterful composition + wide-angle 8K resolution + Octane render + Ray-tracing + HDR10 --ar 1:2 --s 1000 '),
(8, 1, 'IMG64768da4aa7c92.34607459.png', 'A cloud with several airplanes flying around on top, in the style of detailed fantasy art, nightcore, quiet moments captured in paint, radiant clusters, i cant believe how beautiful this is, detailed character design, dark cyan and light crimson â€“niji 5 â€“ '),
(9, 3, 'IMG64770a9295c654.81111802.png', 'cyberpunk tarot cart of hooded woman with a glowing rifle --ar 2:3 --beta  --beta --upbeta'),
(10, 3, 'IMG64770aa29b9910.94186332.png', 'a man-sized raven wearing 1800s clothing. tintype --ar 2:3'),
(11, 3, 'IMG64770abfbc6268.36538542.png', 'slavic god perun ,clean lines, StanisÅ‚aw Szukalski + Moebius --ar 1:2'),
(12, 3, 'IMG64770adcb7a7e0.11605086.png', 'A monk walks up stairs lined with cherry blossom trees and jacaranda trees :: at the top of the stairs is an ornate temple :: realistic, cinematic lighting, volumetric, :: by Moebius and alphonse mucha and roger deakins --ar 5:23 --no blur bokeh defocus dof --s 3333 â€”q 2'),
(13, 3, 'IMG64770b519de479.48730333.png', 'Ornate victorian wizards cabinet of amazing curiosities  and  machinesshowing rare collection of magical artifacts, intrincated details, frontal view, natural light,  candle light.  by Johan Georg Hainz , very realistic, ultrafine details, fantasy artwork, extreme high detail --ar 3:6'),
(15, 4, 'IMG64787e31b5f211.02075472.png', 'floating inside vast space station with buildings, cinematic + beautiful Warrior woman in Astronaught armour suit + in style of Laurie Greasley --ar 9:18 --test'),
(16, 4, 'IMG64787e45359681.27081915.png', 'a cute Robot made out of cardboard boxes:: engineering blueprints, infograph, retro illustration --mp'),
(17, 4, 'IMG64787e599d8450.13421911.png', 'game sprite sheet of rpg potion flask icons, elemental effects, fantasy skill icons, game battle skills, health regen, collection sheet, effect, rpg, unity asset store 2D, rpg maker mv,  2d game sprite, collection sheet, low poly art --q 2'),
(18, 4, 'IMG64787e76790f43.20089637.png', 'fox in clothes standing next to a table, table full of various foods on dishes, in the style of studio ghibli, anime, akira, tall fox, background is a blurry village --testp --creative --upbeta'),
(19, 4, 'IMG64787e994f54a1.78784273.png', 'highly detailed and intricate underwater world::2 color japanese woodblock art::1.5 glittery dark cyan and silver layers::2 by shin-hanga, Hokusai, Mike Mignola, elaborate Ukiyo-e style illustration::2 octane render --ar 9:16 --uplight');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `passw`) VALUES
(1, 'prypry', 'pry@hotmail.com', '123123'),
(2, 'prypry2', 'prypry2@gmail.com', '123123'),
(3, 'pureiya', 'pureiya@gmail.com', '123123'),
(4, 'lucky', 'lucky@gmail.com', '123123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;