-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Jun 2019 um 07:54
-- Server-Version: 10.1.34-MariaDB
-- PHP-Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `bwi_web_ss19_termin1`
--
CREATE DATABASE IF NOT EXISTS `bwi_web_ss19_termin1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bwi_web_ss19_termin1`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `Produktid` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Preis` float NOT NULL,
  `Bewertung` tinyint(4) NOT NULL DEFAULT '3',
  `Beschreibung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`Produktid`, `Name`, `Preis`, `Bewertung`, `Beschreibung`) VALUES
(1, 'Echo Plus', 149.99, 4, 'Wir stellen vor: Echo Plus - Mit integriertem Smart Home-Hub (schwarz) - inklusive Philips Hue White E27 LED Lampe\r\n  '),
(2, 'Amazon Echo', 99.99, 3, 'Das neue Amazon Echo (2. Generation), Anthrazit Stoff'),
(3, 'Amazon Echo Dot', 54.99, 2, 'Amazon Echo Dot (2. Generation), Schwarz'),
(4, 'Fire TV Stick', 39.99, 4, 'Fire TV Stick mit Alexa-Sprachfernbedienung'),
(5, 'Fire TV 4K', 79.99, 3, 'Das neue Fire TV mit 4K Ultra HD und Alexa-Sprachfernbedienung (Version 2017, Anhaengerform)'),
(6, 'TRAEDFRI', 29.99, 2, 'Das praktische Set aus TRAEDFRI Fernbedienung und einer E27-LED-Leuchtquelle (grosser Sockel) mit Weissspektrum macht den Einstieg leicht.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`Produktid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `produkte`
--
ALTER TABLE `produkte`
  MODIFY `Produktid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
