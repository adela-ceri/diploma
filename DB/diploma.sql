-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 08:24 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diploma`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Ndihma Ekonomike', 'ne'),
(2, 'Pagesa per Aftesine e Kufizuar', 'pak');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `formulari`
--

CREATE TABLE `formulari` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `emri` varchar(20) DEFAULT NULL,
  `mbiemri` varchar(20) DEFAULT NULL,
  `nid` int(11) DEFAULT NULL,
  `emrib` varchar(20) DEFAULT NULL,
  `ditelindja` date DEFAULT NULL,
  `gjinia` varchar(20) DEFAULT NULL,
  `adresa` varchar(30) DEFAULT NULL,
  `qyteti` varchar(30) DEFAULT NULL,
  `kodi_postar` int(11) DEFAULT NULL,
  `nr_femijeve` varchar(50) DEFAULT NULL,
  `pension` varchar(20) DEFAULT NULL,
  `banesa` varchar(50) DEFAULT NULL,
  `toke` varchar(20) DEFAULT NULL,
  `neto` int(20) DEFAULT NULL,
  `shpenzime` int(11) DEFAULT NULL,
  `fotokopje_nid` varchar(200) DEFAULT NULL,
  `certefikate_pron` varchar(300) DEFAULT NULL,
  `certifikate_fam` varchar(200) DEFAULT NULL,
  `punkerkues` varchar(300) DEFAULT NULL,
  `sts_jetim` varchar(300) DEFAULT NULL,
  `vertetim_trajnim` varchar(200) DEFAULT NULL,
  `urdher_mbrojtje` varchar(200) DEFAULT NULL,
  `fletdrejtim` varchar(255) NOT NULL,
  `epikriza` varchar(255) NOT NULL,
  `kerkese` varchar(255) NOT NULL,
  `tip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date_view` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `date_view`) VALUES
(2, 1, 'Familjet pa te ardhura ose me te ardhura te pamjaftueshme', 'microsoft-surface-pro-4-typecover-128-gb', '2019-06-14'),
(8, 1, 'Jetimet', 'asus-transformer-mini-t102ha-10-1-2-1-silver', '0000-00-00'),
(11, 1, 'Viktimat e trafikimit', 'hp-barebones-omen-x-900-099nn-gaming-pc', '2018-05-12'),
(13, 1, 'Familjet me kryefamiljare gra', 'hp-pavilion-power-580-015na-gaming-pc', '2018-05-12'),
(16, 1, '\r\nPrinderit me me shume se dy femije', 'pc-specialist-vortex-core-ii-gaming-pc', '2018-05-10'),
(17, 1, 'Viktimat e dhunes', 'amazon-fire-7-tablet-alexa-2017-8-gb-black', '2018-05-12'),
(18, 2, 'Personat me aftesi te kufizuar', 'amazon-fire-hd-8-tablet-alexa-2017-16-gb-black', '2018-05-12'),
(19, 2, 'Paraplegjiket', 'amazon-fire-hd-8-tablet-alexa-2017-32-gb-black', '2018-05-10'),
(27, 2, 'Tetraplegjiket', 'dell-xps-15-9560', '2018-07-09'),
(28, 2, 'Invalidet e punes', 'samsung-note-8', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$DqAWQCUd27YhFWvsGSJqxOdhCgsKrbwjsP4CEa81HqLE1h8NUTqp.', 1, 'Admin', '', '', '', 'jkcsds.JPG', 1, '', '', '2018-05-01'),
(2, 'adela@yahoo.com', '$2y$10$qOn759SE8XRGYsgo6DOJD.JaQ6APLG93iadQKYHJLRKfoD/K0OWsC', 0, 'Adela', 'Ceri', '', '', '', 0, '', '', '2021-01-18'),
(14, 'test@test.com', '$2y$10$AnUmgsb8JSrsmX.O6NXz/eU29tT6EIpub3jJdpXxo/jO32qh81g52', 2, 'Punonjes', 'Social', 'test', 'test', '', 1, '', '', '2019-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulari`
--
ALTER TABLE `formulari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `formulari`
--
ALTER TABLE `formulari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
