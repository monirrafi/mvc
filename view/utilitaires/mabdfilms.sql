-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 01:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mabdfilms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `passWord` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `email`, `passWord`) VALUES
(1, 'Rafi', 'Monir', 'mmm@m.com', '111'),
(2, 'riad', 'bouhal', 'monirrafi67@gmail.com', '222'),
(11, 'mmm', 'ppp', 'kkk', '333'),
(12, 'Badre', 'Abdelkarim', 'badreAbdel@mm.com', '$$$$$$666'),
(13, 'Ben', 'Nour', 'nnn@n.com', '333'),
(14, 'Ben', 'Nour', 'nnn@n.com', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `idf` int(11) NOT NULL,
  `titre` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `realisateur` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pochette` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`idf`, `titre`, `duree`, `realisateur`, `pochette`) VALUES
(9, 'Avenger', 250, 'Alfred Hitchkouk', 'e60878c56e8f2b0f90eae6375fc44db934afab37.jpg'),
(10, 'Titanic2', 202, 'James Cameron', '5970273bc16680bdd48c941f0025526ba356a1a0.jpg'),
(11, 'Titanic1', 100, 'pierre olsen', ''),
(13, 'Titanic', 181, 'James Cameroun', ''),
(15, 'Titanic', 182, 'James Cameroun', ''),
(16, 'Titanic', 183, 'James Cameroun', ''),
(17, 'Titanic', 180, 'James Cameroun James Cameroun James Came', ''),
(18, 'Danse avec les loups', 240, 'Kevin Costner', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`idf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
