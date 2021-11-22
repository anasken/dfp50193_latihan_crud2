-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 09:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan_sampingan`
--

CREATE TABLE `makanan_sampingan` (
  `idmakanan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bilangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan_sampingan`
--

INSERT INTO `makanan_sampingan` (`idmakanan`, `nama`, `bilangan`) VALUES
(6, 'chocolate', 20),
(8, 'maggi', 3),
(9, 'Milobar', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan_sampingan`
--
ALTER TABLE `makanan_sampingan`
  ADD PRIMARY KEY (`idmakanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan_sampingan`
--
ALTER TABLE `makanan_sampingan`
  MODIFY `idmakanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
