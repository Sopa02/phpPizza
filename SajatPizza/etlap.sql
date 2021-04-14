-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 14. 14:53
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

--
-- A tábla adatainak kiíratása `etlap`
--

INSERT INTO `etlap` (`id`, `nev`, `ar`, `hozzavalok`, `kep`) VALUES
(1, 'Bazsalikomos pizza', 1800, 'Paradicsomos alap, mozzarella sajt, bazsalikom, pesto.', './kepek/bazsalikomos.jpg'),
(2, 'Négysajtos pizza', 1750, 'Paradicsomos alap, feta sajt, mozzarella sajt, parmezán sajt, trappista sajt, pesto', './kepek/4sajt.jpg'),
(3, 'Tenger gyümölcsei pizza', 2000, 'Paradicsomos alap, garnéla, tintahal, kagyló, tonhal, mozzarella sajt, feta sajt.', './kepek/fruttidimare.jpg'),
(4, 'Hagymás tejfölös pizza', 1750, 'Tejfölös-fokhagymás alap, lila hagyma, sonka, trappista sajt.', './kepek/hagymas_tejfolos_pizza.jpg'),
(5, 'Húsimádó pizza', 2200, 'Paradicsomos alap, sonka, bacon, gyros csirkemell, pepperoni, csülök, feta sajt, mozzarella sajt.', './kepek/husimado.jpg'),
(6, 'Pepperoni pizza', 1900, 'Paradicsomos alap, trappista sajt, mozzarella sajt, pepperoni', './kepek/pepperoni.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
