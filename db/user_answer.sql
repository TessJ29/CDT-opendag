-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 05 dec 2022 om 13:16
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdt-opendag`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `UserId` int(11) NOT NULL,
  `Answer` enum('1','2','3','4','5') NOT NULL,
  `Answer2` enum('1','2','3','4','5') NOT NULL,
  `Answer3` enum('1','2','3','4','5') NOT NULL,
  `Answer4` enum('1','2','3','4','5') NOT NULL,
  `Answer5` enum('1','2','3','4','5') NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_answer`
--

INSERT INTO `user_answer` (`Id`, `UserId`, `Answer`, `Answer2`, `Answer3`, `Answer4`, `Answer5`) VALUES
(1, 1, '2', '', '', '', ''),
(2, 1, '3', '3', '4', '2', '1'),
(3, 2, '2', '2', '2', '2', '2'),
(4, 2, '2', '3', '3', '3', '3'),
(5, 2, '4', '4', '4', '4', '4'),
(6, 2, '4', '4', '4', '4', '4'),
(7, 2, '4', '4', '4', '4', '4'),
(8, 2, '2', '3', '3', '3', '3'),
(9, 2, '3', '3', '3', '3', '5');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
