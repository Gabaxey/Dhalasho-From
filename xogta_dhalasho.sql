-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 01:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xogta_dhalasho`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `magaca_qofka` varchar(255) NOT NULL,
  `taariikhda_dhalashada` date NOT NULL,
  `goobta_dhashay` varchar(255) DEFAULT NULL,
  `jinsiga` varchar(10) DEFAULT NULL,
  `xaaladda_guur` varchar(20) DEFAULT NULL,
  `meesha_daggan` varchar(255) DEFAULT NULL,
  `magaca_hooyada` varchar(255) DEFAULT NULL,
  `taariikhda_labixiyay` date DEFAULT NULL,
  `shaqada_qofka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `magaca_qofka`, `taariikhda_dhalashada`, `goobta_dhashay`, `jinsiga`, `xaaladda_guur`, `meesha_daggan`, `magaca_hooyada`, `taariikhda_labixiyay`, `shaqada_qofka`) VALUES
(1, 'hamza', '2024-12-25', 'banaadir', 'Lab', 'Aan Guursan', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer'),
(3, 'fadumo', '2024-12-25', 'banaadir', 'Dhadig', 'H.Radinaya', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer'),
(4, 'fadumo', '2024-12-25', 'banaadir', 'Dhadig', 'Guursaday', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer'),
(5, 'maxamed', '2024-12-25', 'banaadir', 'Lab', 'La furay', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer'),
(6, 'faarax', '2024-12-25', 'banaadir', 'Lab', 'Aan Guursan', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer'),
(7, 'abdinuur', '2024-12-25', 'banaadir', 'Lab', 'Guursaday', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer'),
(8, 'abdinuur', '2024-12-25', 'banaadir', 'Lab', 'La furay', 'banaadir', 'faadumo', '2024-12-25', 'sofware developer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
