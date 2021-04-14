-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 14. 14:39
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `italiapizza`
--
CREATE DATABASE IF NOT EXISTS `italiapizza` DEFAULT CHARACTER SET latin2 COLLATE latin2_hungarian_ci;
USE `italiapizza`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `etlap`
--

CREATE TABLE `etlap` (
  `id` int(5) NOT NULL,
  `nev` varchar(40) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `ar` int(5) DEFAULT NULL,
  `hozzavalok` varchar(100) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `kep` varchar(100) COLLATE latin2_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendelesek`
--

CREATE TABLE `rendelesek` (
  `id` int(10) NOT NULL,
  `userID` int(5) DEFAULT NULL,
  `tartalom` varchar(100) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `aktiv` tinyint(1) DEFAULT NULL,
  `varos` varchar(30) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `utca` varchar(40) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `hazszam` varchar(20) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `ido` varchar(100) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `osszeg` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `felhasznalonev` varchar(16) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `email` varchar(32) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `jelszo` varchar(100) COLLATE latin2_hungarian_ci DEFAULT NULL,
  `ADMIN` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `etlap`
--
ALTER TABLE `etlap`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `etlap`
--
ALTER TABLE `etlap`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD CONSTRAINT `rendelesek_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
