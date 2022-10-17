-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 okt 2022 om 12:54
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
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usersId` int(11) NOT NULL AUTO_INCREMENT,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  PRIMARY KEY (`usersId`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(25, 'Weidong', 'weidong009@gmail.com', 'Weidong', '$2y$10$L67e3DaK9wW4CuRYU.KHc.EWnThonlvLVRhVC5IwzZ2WfrZftyop6'),
(23, 'Lin', 'lin@gmail.com', 'Lin', '$2y$10$Vgd4HMXShvFcHlKkQF1mpuIXEzaQJoUrYZ2UVIFqGnEu1pMOQ10Ja'),
(22, 'Hlin', 'hinlin@gmail.com', 'Hlin', '$2y$10$FxR95MEq9GpNIU1/rhkBzeU4gMgjSkd6OujiBUmfulM7w4z.0WKMO'),
(21, 'Shabi', 'Shabi@gmail.com', 'Shabi', '$2y$10$IP4aEQByDrlePzI8w9pJ/uRW9dd/K2vSJrPvtEhwLYeldE3BSDNeW'),
(20, 'Dongqi', 'dongqijia461@gmail.com', 'Dongqi1', '$2y$10$WKuJTS4RNBo.iVxpbxSK6.e/bpcgr2DKVh2eaYcV9rctVq3T.sMKK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
