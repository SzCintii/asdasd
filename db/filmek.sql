-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 06. 16:14
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `filmek`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `filmek`
--

CREATE TABLE if not exists `filmek` (
  `ID` int(2) Primary KEY AUTO_INCREMENT,
  `Cím` varchar(225) COLLATE utf8_hungarian_ci NOT NULL,
  `Kategória` varchar(225) COLLATE utf8_hungarian_ci NOT NULL,
  `Hossz` varchar(225) COLLATE utf8_hungarian_ci NOT NULL,
  `Megjelenés` year(4) NOT NULL,
  `Tulaj` varchar(225) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

COMMIT;