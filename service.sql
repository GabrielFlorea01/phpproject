-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 08:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `mecanici`
--

CREATE TABLE `mecanici` (
  `id` int(11) NOT NULL,
  `nume` varchar(65) NOT NULL,
  `adresa` varchar(65) NOT NULL,
  `telefon` varchar(65) NOT NULL,
  `specializare` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mecanici`
--

INSERT INTO `mecanici` (`id`, `nume`, `adresa`, `telefon`, `specializare`) VALUES
(1, 'Roberto', 'Bucuresti', '0706054456', 'Vopsitorie'),
(9, 'Gabi', 'Ilfov', '0757050338', 'Tinichigerie'),
(10, 'Radu', 'Bragadiru', '0789789678', 'ITP');

-- --------------------------------------------------------

--
-- Table structure for table `operatiuni`
--

CREATE TABLE `operatiuni` (
  `id` int(11) NOT NULL,
  `denumire` varchar(255) NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operatiuni`
--

INSERT INTO `operatiuni` (`id`, `denumire`, `pret`) VALUES
(3, 'Vopsire', 455435000),
(4, 'Revizie-SUV', 1500),
(5, 'Schimbare ulei-auto gama VAG', 750);

-- --------------------------------------------------------

--
-- Table structure for table `piese`
--

CREATE TABLE `piese` (
  `id` int(11) NOT NULL,
  `denumire` varchar(65) NOT NULL,
  `producator` varchar(65) NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `piese`
--

INSERT INTO `piese` (`id`, `denumire`, `producator`, `pret`) VALUES
(2, 'Discuri de frana spate', 'Bosch', 500),
(3, 'Ulei cutie automata-gama VAG', 'VW AG', 350);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `parola` varchar(42) DEFAULT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `parola`, `email`) VALUES
(1, 'gabiflorea', 'gabiesuper', 'gabi.florea01@gmail.com'),
(6, 'SDAASD', 'ASDASD', 'lalalaDASD');

-- --------------------------------------------------------

--
-- Table structure for table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `marca` varchar(65) NOT NULL,
  `model` varchar(65) NOT NULL,
  `gama` varchar(65) NOT NULL,
  `operatiune` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicule`
--

INSERT INTO `vehicule` (`id`, `marca`, `model`, `gama`, `operatiune`) VALUES
(1, 'Audi', 'A6', 'auto-VAG', 'Schimb de ulei'),
(2, 'VW', 'Touareg', 'SUV-VAG', 'Vopsire integrala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mecanici`
--
ALTER TABLE `mecanici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operatiuni`
--
ALTER TABLE `operatiuni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `piese`
--
ALTER TABLE `piese`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mecanici`
--
ALTER TABLE `mecanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `operatiuni`
--
ALTER TABLE `operatiuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `piese`
--
ALTER TABLE `piese`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
