-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Okt 06. 16:19
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
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE if not exists `user` (
  `ID` int(2) PRIMARY KEY AUTO_INCREMENT,
  `Felhasználónév` varchar(225) COLLATE utf8_hungarian_ci NOT NULL,
  `Email` varchar(225) COLLATE utf8_hungarian_ci NOT NULL,
  `Jelszó` varchar(225) COLLATE utf8_hungarian_ci NOT NULL,
  `Admin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--alapadatok
INSERT INTO user (Felhasználónév, Email, Jelszó, Admin)
VALUES ('Admin1', 'admin1@jonapottanarur.com', 'asdasd', 1);

INSERT INTO user (Felhasználónév, Email, Jelszó, Admin)
VALUES ('Admin2', 'admin2@jonapottanarur.com', 'asdasd', 1);

INSERT INTO user (Felhasználónév, Email, Jelszó, Admin)
VALUES ('Lajos', 'lajos@jonapottanarur.com', 'asdasd', 0);

COMMIT;