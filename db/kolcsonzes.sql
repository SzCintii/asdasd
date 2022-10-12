-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 06. 16:18
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
-- Tábla szerkezet ehhez a táblához `kölcsönzés`
--

CREATE TABLE if not exists `kölcsönzés` (
  `Film_ID` int(2) NOT NULL,
  `Kölcsönző_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kölcsönzés`
--
ALTER TABLE `kölcsönzés`
  ADD PRIMARY KEY (`Film_ID`,`Kölcsönző_ID`);
--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `kölcsönzés`
--
ALTER TABLE `kölcsönzés`
  ADD CONSTRAINT `FK_FilmID` FOREIGN KEY (`Film_ID`) REFERENCES `filmek` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KolcsonzoID` FOREIGN KEY (`Kölcsönző_ID`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;


COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
