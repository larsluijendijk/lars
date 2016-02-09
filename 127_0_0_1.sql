-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 09 feb 2016 om 10:16
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `php1`
--
CREATE DATABASE IF NOT EXISTS `php1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php1`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activiteit`
--

DROP TABLE IF EXISTS `activiteit`;
CREATE TABLE IF NOT EXISTS `activiteit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(100) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  `datum` varchar(100) NOT NULL,
  `prijs` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Gegevens worden geëxporteerd voor tabel `activiteit`
--

INSERT INTO `activiteit` (`id`, `titel`, `omschrijving`, `datum`, `prijs`, `categorie`) VALUES
(20, 'Praten met Wilders', 'We gaan praten met de leider van de PVV', '2016-01-31', '€100,-', 'politiek'),
(21, 'Voetballen met PSV', 'We gaan voetballen met de club PSV', '2016-06-23', '€250,-', 'sport');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `inschrijf`
--

DROP TABLE IF EXISTS `inschrijf`;
CREATE TABLE IF NOT EXISTS `inschrijf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `omschrijving` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Gegevens worden geëxporteerd voor tabel `inschrijf`
--

INSERT INTO `inschrijf` (`id`, `voornaam`, `achternaam`, `omschrijving`) VALUES
(1, 'Lars', 'Luijendijk', 'Hartstikke leuk dat ik mee mag doen!'),
(2, 'Lars', 'Luijendijk', 'Praten met Wilders in de tweede kamer.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
