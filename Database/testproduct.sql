-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 08:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `img_main` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `file_pdf` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `img_main`, `img`, `file_pdf`, `date`) VALUES
(1, 'Honda city 2022', '152132751320220510_125359.png', '94301632020220510_003719.png', '161577980020220510_125519.pdf', '2022-05-09 17:37:19'),
(2, 'Honda Civic', '94539931020220510_083854.png', '94539931020220510_083854.png', '94539931020220510_083854.pdf', '2022-05-10 01:38:54'),
(3, 'nissan almera', '185137046620220510_113819.png', '185137046620220510_113819.png', '185137046620220510_113819.pdf', '2022-05-10 04:38:19'),
(4, 'toyota camry ', '78341228720220510_114046.png', '78341228720220510_114046.png', '78341228720220510_114046.pdf', '2022-05-10 04:40:46'),
(5, 'Lamborghini', '10228766020220510_114445.png', '10228766020220510_114445.png', '10228766020220510_114445.pdf', '2022-05-10 04:44:45'),
(6, ' Red Lamborghini Huracan', '54725547020220510_114614.png', '54725547020220510_114614.png', '54725547020220510_114614.pdf', '2022-05-10 04:46:14'),
(8, ' Nissan GT R', '89244392820220510_115636.png', '89244392820220510_115636.png', '89244392820220510_115636.pdf', '2022-05-10 04:56:36'),
(9, 'Ford Mustang', '132247016220220510_120006.png', '132247016220220510_120006.jpg', '132247016220220510_120006.pdf', '2022-05-10 05:00:06'),
(12, 'Ford Mustang', '17361968220220510_131325.png', '17361968220220510_131325.png', '17361968220220510_131325.pdf', '2022-05-10 06:13:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
