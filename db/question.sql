-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 11 nov 2022 om 13:16
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
-- Tabelstructuur voor tabel `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Question` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `question`
--

INSERT INTO `question` (`Id`, `Question`) VALUES
(1, 'Hoe heeft u de opendag ervaren?'),
(2, 'Was de gegeven informatie over de locatie duidelijk?'),
(3, 'Was de gegeven informatie tijdens de opendag duidelijk?'),
(4, 'Bent u voldoende geinformeerd?'),
(5, 'Heeft u wat gehad aan de opendag?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
