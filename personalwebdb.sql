-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2025 at 02:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalwebdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `description`, `link`, `file`) VALUES
(2, 'FoodSaver', 'aplikasi jual beli makanan sisa yang masih layak untuk di konsumsi', 'https://github.com/ysrednina0/FoodSaverMain', '1736259914.jpg'),
(3, 'iReport', 'Aplikasi pelaporan terkait permasalahan transportasi umum di Yogyakarta', 'https://github.com/TyasPrabaswara/iReport_Project', '1736259966.jpg'),
(4, 'Trashlution', 'Trashlution adalah solusi inovatif yang menggabungkan teknologi terkini dengan upaya keberlanjutan untuk memudahkan pengelolaan dan pengolahan sampah. Aplikasi ini dirancang untuk memberikan kontribusi positif terhadap lingkungan dengan tujuan utamanya adalah untuk menciptakan masyarakat yang sadar akan lingkungan dan berpatisipasi aktif dalam menjaga keberlanjutan bumi ini, juga dapat membuat lapangan kerja baru. Aplikasi ini bukan hanya tentang pengelolaan sampah tetapi juga tentang membentuk suatu gaya hidup baru bagi masyarakat dan juga generasi yang akan datang.', 'https://bit.ly/CoPdemo', '1736319630.jpg'),
(5, 'Sensory Land', 'Aplikasi rekomendasi sensory play untuk anak dengan Autism Spectrum Disorder (ASD)', '-', 'WhatsApp Image 2024-12-23 at 14.02.54_908502d9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
