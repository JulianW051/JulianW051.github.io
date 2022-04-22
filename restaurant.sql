-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 02:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `bestellingen`
--

CREATE TABLE `bestellingen` (
  `ID` int(11) NOT NULL,
  `producten` text NOT NULL,
  `prijs` double NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bestellingen`
--

INSERT INTO `bestellingen` (`ID`, `producten`, `prijs`, `aantal`) VALUES
(1, 'Laap kai 2x, Coca-Cola 1x, ', 23.97, 3),
(3, 'Coca-Cola 4x, Kaeng sap pa rod kai 1x, ', 27.95, 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `naam` varchar(20) NOT NULL,
  `nummer` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `bericht` varchar(300) NOT NULL,
  `ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`naam`, `nummer`, `email`, `bericht`, `ID`) VALUES
('julian', 612608817, 'julianwessels1@gmail', 'test 1', 3),
('julian', 612608817, 'julianwessels1@gmail', 'test 2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(7) NOT NULL,
  `gerecht` varchar(50) NOT NULL,
  `prijs` double NOT NULL,
  `beschrijving` varchar(100) NOT NULL,
  `categorie` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `gerecht`, `prijs`, `beschrijving`, `categorie`) VALUES
(1, 'Sate kai', 6.99, '4 stokjes gegrilde kipsate met huisgemaakte pindasaus (pikant)', 'voorgerechten'),
(5, 'Laap kai', 10.99, 'Kipsalade met munt, kousenband, koriander en rode ui (pikant)', 'salades'),
(12, 'Pophia tod', 7.99, 'Mild. Kiploempia\'s met huisgemaakte zoete chilisaus. Vijf stuks', 'voorgerechten'),
(13, 'Keang chuud kai', 7.99, 'Mild. Heldere kippensoep met gemengde groenten en vermicelli', 'soepen'),
(14, 'Thom yam kai', 7.99, 'Pikante kippensoep met champignons, bosui, wortel en koriander', 'soepen'),
(15, 'Yam neua', 11.99, 'Mild. Pikante biefstuksalade met komkommer, wortel, koriander en ui', 'salades'),
(16, 'Phad thai neua', 14.99, 'Mild. Gebakken rijstnoedels met biefstuk, ei, wortel, bosui, pinda\'s en taugé', 'noodles'),
(17, 'Kaeng sap pa rod tahoe', 16.99, 'Mild. Tofu in rode kokos curry met ananas, tomaat, limoenblad en chili pepers', 'vegetarisch'),
(18, 'Kaeng sap pa rod kai', 19.99, 'Mild. Kipfilet in rode kokos curry met ananas, tomaat, limoenblad en chili pepers', 'curry'),
(19, 'Coca-Cola', 1.99, ' ', 'drinken');

-- --------------------------------------------------------

--
-- Table structure for table `reserveringen`
--

CREATE TABLE `reserveringen` (
  `ID` int(7) NOT NULL,
  `naam` varchar(20) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserveringen`
--

INSERT INTO `reserveringen` (`ID`, `naam`, `datum`, `tijd`, `email`) VALUES
(15, 'julian', '2022-04-21', '17:25:00', 'julianwessels1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(7) NOT NULL,
  `personeel` tinyint(1) NOT NULL DEFAULT 0,
  `username` varchar(20) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `wachtwoord` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `personeel`, `username`, `tel`, `email`, `wachtwoord`) VALUES
(5, 1, 'julianwessels', 612608817, 'julianwessels1@gmail.com', '$2y$10$IM03F.fcqkFmPaAN0545Puuwn0OQy5OJsQ8H0dhgm./mPuB4N6bGG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reserveringen`
--
ALTER TABLE `reserveringen`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reserveringen`
--
ALTER TABLE `reserveringen`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
