-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Kas 2021, 10:18:55
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int(11) NOT NULL,
  `harita` text NOT NULL,
  `logo_url` varchar(250) NOT NULL,
  `footer` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `favicon_url` varchar(250) NOT NULL,
  `description` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `harita`, `logo_url`, `footer`, `title`, `favicon_url`, `description`, `author`) VALUES
(0, 'https://www.google.com/maps/d/embed?mid=1P-TZeNiOI-AMaPG77u5HZafoj08', 'images/home/logo.png', 'Ceyhun Collective WebSite', 'Ceyhun|Collectice', 'images/ico/favicon.ico', 'Ceyhun Collective E-Ticaret Sitesi', 'Ceyhun Collective');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Sweatshirt'),
(2, 'Tişört'),
(3, 'Ayakkabı'),
(4, 'Aksesuar'),
(5, 'Pantolon');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `name`, `email`, `comment`) VALUES
(1, 2, 'ahmet', 'ahmetgüzelsever@gmail.com', 'wooooooooooooooooooowww amazing'),
(2, 2, 'sude', 'sude@gmail.com', '34234234234 amazing'),
(3, 2, 'aylin', 'aylin@gmail.com', 'asdasdwd amazing'),
(4, 0, '', '', 'asdasdasd'),
(5, 2, '', '', 'wdasdcasdascdasd'),
(6, 2, 'wqasadasd', '213123@fhasdas.com', 'asdasdasdasddddddddddddd'),
(7, 2, 'wqasadasd', '213123@fhasdas.com', 'asdasdasdasddddddddddddd'),
(8, 1, 'wewqqewqwew', 'eqqweeqwweqqwe@gmail.com', 'wqeqwe2eqweqweq');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `condition`
--

CREATE TABLE `condition` (
  `id` int(11) NOT NULL,
  `condition_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `gender`
--

INSERT INTO `gender` (`id`, `gender_name`) VALUES
(1, 'Erkek'),
(2, 'Kadın'),
(3, 'Çocuk'),
(4, 'Unisex');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `images`
--

INSERT INTO `images` (`id`, `product_id`, `image_url`) VALUES
(1, 1, 'images\\product-details\\nikeair.jpg'),
(2, 2, 'images\\product-details\\2.jpg'),
(3, 3, 'images\\product-details\\2.jpg'),
(4, 3, 'images\\product-details\\nikeair.jpg'),
(5, 3, 'images\\product-details\\2.jpg'),
(6, 4, 'images\\product-details\\2.jpg'),
(7, 5, 'images\\product-details\\2.jpg'),
(8, 6, 'images\\product-details\\2.jpg'),
(9, 7, 'images\\product-details\\2.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `message`
--

INSERT INTO `message` (`id`, `names`, `email`, `subjects`, `messages`) VALUES
(1, 'ew2qe2e', '2ee22qe@gmail.com', '32423423', '32rwerewrewr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `gender_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `condition`, `description`, `stock`, `category_id`, `gender_id`) VALUES
(1, 'Nike Air Jordan', 54, 'Yeni', 'Nike Air Jordan 32-44 numara', 100, 3, 1),
(2, 'Mavi Jeans', 100, 'New', 'Mavi Jeans 44-55 beden', 20, 5, 3),
(3, 'Koton Jeans', 80, 'New', 'koton pantolon 23 beden', 11, 5, 3),
(4, 'LCWAİKİKİ Jeans', 80, 'New', 'LCwaikiki pantolon 23 beden', 11, 5, 3),
(5, 'Defacto Jeans', 80, 'New', 'Defacto pantolon 23 beden', 11, 5, 3),
(6, 'Bershka Jeans', 80, 'New', 'Bershka pantolon 23 beden', 11, 5, 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
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
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `condition`
--
ALTER TABLE `condition`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
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
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `condition`
--
ALTER TABLE `condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
