# utvecklingssamtal
-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 03 mars 2015 kl 13:00
-- Serverversion: 5.6.20
-- PHP-version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `utvecklingsamtal`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `elever`
--

CREATE TABLE IF NOT EXISTS `elever` (
`id` int(20) NOT NULL,
  `namn` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumpning av Data i tabell `elever`
--

INSERT INTO `elever` (`id`, `namn`) VALUES
(1, 'Kalle'),
(3, 'John'),
(4, 'Bengt');

-- --------------------------------------------------------

--
-- Tabellstruktur `sal`
--

CREATE TABLE IF NOT EXISTS `sal` (
`id` int(20) NOT NULL,
  `sal` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `sal`
--

INSERT INTO `sal` (`id`, `sal`) VALUES
(1, 'H417'),
(2, 'H419');

-- --------------------------------------------------------

--
-- Tabellstruktur `samtal`
--

CREATE TABLE IF NOT EXISTS `samtal` (
`id` int(20) NOT NULL,
  `ElevID` int(20) NOT NULL,
  `SalID` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `samtal`
--

INSERT INTO `samtal` (`id`, `ElevID`, `SalID`) VALUES
(1, 1, 1),
(2, 3, 1),
(3, 4, 2);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `elever`
--
ALTER TABLE `elever`
 ADD PRIMARY KEY (`id`);

--
-- Index för tabell `sal`
--
ALTER TABLE `sal`
 ADD PRIMARY KEY (`id`);

--
-- Index för tabell `samtal`
--
ALTER TABLE `samtal`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `elever`
--
ALTER TABLE `elever`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT för tabell `sal`
--
ALTER TABLE `sal`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT för tabell `samtal`
--
ALTER TABLE `samtal`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
