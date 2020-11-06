-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 02:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `his`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `blood` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `gender`, `name`, `nik`, `no_hp`, `address`, `religion`, `education`, `blood`) VALUES
(1, 'Laki-Laki', 'Syahda Bagaswara', '234567', '345678', 'Sleman, Yogyakarta', 'Islam', 'Sarjana', 'O Positif'),
(2, 'Perempuan', 'Rudi Arta', '12345678', '3456789', 'Sleman, Yogyakarta', 'Budha', 'Doktor', 'O Negatif'),
(3, 'Perempuan', 'Thariva Khairvinisa', '234567', '081313059000', 'Sleman, Yogyakarta', 'Islam', 'Sarjana', 'A Positif'),
(12, 'Perempuan', 'Tisa Maverasari', '1234567', '34567', 'Tebet, Jakarta Selatan', 'Islam', 'Sarjana', 'B Positif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
