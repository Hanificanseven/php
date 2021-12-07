-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Ara 2021, 10:25:19
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `forlog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `logo_url` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `comment`
--

INSERT INTO `comment` (`id`, `user_id`, `post_id`, `comment`) VALUES
(1, 1, 1, 'Mükkemmelll'),
(2, 1, 1, 'sdadasasdsad'),
(3, 1, 1, 'sdadasasdsad'),
(4, 1, 1, 'sdadasasdsad'),
(5, 1, 1, 'Süperrrr'),
(6, 1, 1, 'weqsasdasd'),
(7, 1, 1, 'weqsasdasd'),
(8, 1, 1, 'weqsasdasd'),
(9, 1, 4, 'asdsdaasdasd'),
(10, 1, 1, 'sa\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`) VALUES
(1, 2, 1),
(2, 4, 1),
(3, 5, 1),
(4, 6, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `user_id`) VALUES
(1, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(2, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(3, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(4, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(5, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(6, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(7, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(8, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(9, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(10, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(11, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1),
(12, 'BAŞLIKKKK', 'loremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmmloremmmm', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Can', 'Seven', 'canseven7@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
