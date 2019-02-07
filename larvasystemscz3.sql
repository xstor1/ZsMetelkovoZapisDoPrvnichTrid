-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Pát 08. úno 2019, 00:45
-- Verze serveru: 10.1.30-MariaDB
-- Verze PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `larvasystemscz3`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `tbcasy`
--

CREATE TABLE `tbcasy` (
  `Id` int(11) NOT NULL,
  `Datum` datetime NOT NULL,
  `Pocet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `tbcasy`
--

INSERT INTO `tbcasy` (`Id`, `Datum`, `Pocet`) VALUES
(1, '2019-02-21 15:30:00', 7);

-- --------------------------------------------------------

--
-- Struktura tabulky `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456a+');

-- --------------------------------------------------------

--
-- Struktura tabulky `tbzak`
--

CREATE TABLE `tbzak` (
  `id` int(11) NOT NULL,
  `IdCas` int(11) NOT NULL,
  `jmeno` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `prijmeni` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `pohlavi` varchar(10) COLLATE utf8_czech_ci NOT NULL,
  `datumnar` date NOT NULL,
  `ulice` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `obec` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `psc` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `spadovazs` varchar(400) COLLATE utf8_czech_ci NOT NULL,
  `typz` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `jmenoz` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `prijmeniz` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `ulicez` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `obecz` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `pscz` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(500) COLLATE utf8_czech_ci DEFAULT NULL,
  `obeczdor` varchar(300) COLLATE utf8_czech_ci DEFAULT NULL,
  `ulicezdor` varchar(300) COLLATE utf8_czech_ci DEFAULT NULL,
  `psczdor` varchar(300) COLLATE utf8_czech_ci DEFAULT NULL,
  `typz2` varchar(100) COLLATE utf8_czech_ci DEFAULT NULL,
  `jmenoz2` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `prijmeniz2` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `ulicez2` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `obecz2` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `pscz2` varchar(20) COLLATE utf8_czech_ci DEFAULT NULL,
  `telefonz2` varchar(20) COLLATE utf8_czech_ci DEFAULT NULL,
  `emailz2` varchar(500) COLLATE utf8_czech_ci DEFAULT NULL,
  `obecz2dor` varchar(300) COLLATE utf8_czech_ci DEFAULT NULL,
  `ulicez2dor` varchar(300) COLLATE utf8_czech_ci DEFAULT NULL,
  `pscz2dor` varchar(300) COLLATE utf8_czech_ci DEFAULT NULL,
  `completed` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `tbzak`
--

INSERT INTO `tbzak` (`id`, `IdCas`, `jmeno`, `prijmeni`, `pohlavi`, `datumnar`, `ulice`, `obec`, `psc`, `spadovazs`, `typz`, `jmenoz`, `prijmeniz`, `ulicez`, `obecz`, `pscz`, `telefon`, `email`, `obeczdor`, `ulicezdor`, `psczdor`, `typz2`, `jmenoz2`, `prijmeniz2`, `ulicez2`, `obecz2`, `pscz2`, `telefonz2`, `emailz2`, `obecz2dor`, `ulicez2dor`, `pscz2dor`, `completed`) VALUES
(19, 2, 'Vojtěch', 'Štor', 'Dívka', '2019-02-01', 'Revolucni 787', 'Libochovice', '41117', 'ZŠ Metelkovo nám.', '', 'Eva', 'Štorová', 'Revolucni 787', 'Libohcovice', '41117', '702197480', 'eva@storova.cz', 'maminka dor obec', 'Maminka dor ulice', 'maminka dor psc', '', 'Karel', 'Štor', 'Revoluční 787', 'Libochovice', '41117', '702197480 tata', 'karel@stor.cz', 'tatinek dor obec', 'tatinek dor ulice', 'tatinek dor psc', 0),
(24, 4, 'dsa', 'das', 'Dívka', '2019-02-12', 'das', 'dsa', 'dssa', 'ZŠ Bílá cesta, Verdunská', '', 'eddas', 'das', 'das', 'dsa', 'dsa', 'dsa', '', '', '', '', '', 'dsa', 'dsad', 'sad', 'asd', 'dsa', 'das', '', '', '', '', 0),
(25, 2, 'Vojtěch', 'Štor', 'Dívka', '2019-02-12', 'dsa', 'das', 'dsa', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'dsa', 'dsa', 'das', 'das', 'dasd', 'dasd', '', 'dsa', 'dsa', 'das', NULL, '', '', '', '', '', '', '', '', '', '', 0),
(26, 2, 'Vojtěch', 'Štor', 'Dívka', '2019-02-12', 'dsa', 'das', 'dsa', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'dsa', 'dsa', 'das', 'das', 'dasd', 'dasd', '', 'dsa', 'dsa', 'das', 'Jiný', 'ads', 'dsa', 'dsa', 'dsa', 'dsa', 'dsa', 'dsaasdas', 'das', 'dsa', 'dsa', 0),
(27, 2, 'dsad', 'asd', 'Dívka', '2019-02-12', 'dsad', 'dsa', 'dsa', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'dsa', 'dasd', 'sad', 'sad', 'asd', 'sad', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 0),
(28, 2, 'adsa', 'das', 'Dívka', '2019-02-12', 'das', 'dsa', 'dsa', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'dsa', 'das', 'das', 'das', 'dsa', 'das', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 0),
(29, 2, 'Vojtěch', 'Štor', 'Dívka', '2019-02-05', 'dsa', 'das', 'dsa', 'ZŠ U Nových lázní', 'Matka', 'dsa', 'das', 'das', 'sad', 'dsad', 'sa', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 0),
(30, 2, 'dsa', 'das', 'Dívka', '2019-02-07', 'das', 'das', 'das', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'das', 'dsa', 'das', 'dsad', 'sa', 'das', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 0),
(31, 2, 'dsa', 'dsa', 'Dívka', '2019-02-07', 'dsa', 'dasd', 'das', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'das', 'das', 'da', 'dsadsa', 'dsa', 'dsa', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 1),
(32, 1, 'dsa', 'das', 'Dívka', '2019-02-09', 'dsa', 'das', 'dsa', 'ZŠ Bílá cesta, Verdunská', 'Matka', 'dsa', 'das', 'dsa', 'dsa', 'dsa', 'dsa', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '', 0);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `tbcasy`
--
ALTER TABLE `tbcasy`
  ADD PRIMARY KEY (`Id`);

--
-- Klíče pro tabulku `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `tbzak`
--
ALTER TABLE `tbzak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `tbcasy`
--
ALTER TABLE `tbcasy`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `tbzak`
--
ALTER TABLE `tbzak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
