-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 12:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `caskets`
--

CREATE TABLE `caskets` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caskets`
--

INSERT INTO `caskets` (`id`, `category`, `name`, `price`, `picture`) VALUES
(1, 'metal', 'Non-gasketed Red Casket', 160000, '20 gauge non-gasketed red casket.png'),
(2, 'metal', 'Non-gasketed Silver Casket', 170000, '20 gauge non-gasketed silver casket.png'),
(3, 'metal', 'Non-gasketed Crepe Silver Casket', 180000, '20 gauge non-gasketed crepe silver casket.png'),
(4, 'metal', 'Non-gasketed White Casket', 165000, '20 gauge non-gasketed white casket.png'),
(5, 'metal', 'Non-gasketed Light Blue Casket', 170000, '20 gauge non-gasketed light blue casket.png'),
(6, 'metal', 'Non-gasketed Royal Blue Casket', 170000, '20 gauge non-gasketed royal blue casket.png'),
(7, 'metal', 'Non-gasketed Yellow Casket', 170000, '20 gauge non-gasketed yellow casket.png'),
(8, 'metal', 'Non-gasketed Blue Casket', 160000, '20 gauge non-gasketed blue casket.png'),
(9, 'metal', 'Non-gasketed White Gold Casket', 150000, '20 gauge non-gasketed white gold casket.png'),
(10, 'metal', 'Non-gasketed White Pink Casket', 170000, '20 gauge non-gasketed white gold casket.png'),
(11, 'metal', 'Non-gasketed light pink casket', 175000, '20 gauge non-gasketed light pink casket.png'),
(12, 'metal', 'Non-gasketed Copper Casket', 180000, '20 gauge non-gasketed copper casket.png'),
(13, 'metal', 'Non-gasketed Rose Pink Casket', 175000, '20 gauge non-gasketed rose pink casket.png'),
(14, 'metal', 'Non-gasketed Dark Green Casket', 180000, '20 gauge non-gasketed dark green casket.png'),
(15, 'metal', 'Non-gasketed Green Casket', 160000, '20 gauge non-gasketed green casket.png'),
(16, 'wood', 'Solid Dark Mahogany Casket', 175000, 'solid dark mahogany casket.png'),
(17, 'wood', 'Solid Poplar Gold Stripe Casket', 170000, 'solid poplar gold stripe casket.png'),
(18, 'wood', 'Solid Poplar Oak Casket', 180000, 'Solid poplar oak casket.png'),
(19, 'wood', 'Solid Poplar with Gold Casket', 18000, 'solid poplar with gold casket.png'),
(20, 'wood', 'Solid Crepe Copper Casket', 165000, '20 gauge non-gasketed crepe copper casket.png'),
(21, 'wood', 'Solid Poplar Brown Gold Casket', 175000, 'solid poplar gold casket.png'),
(22, 'baby', 'Small Hardwood Infant Casket', 20000, 'baby-casket.png');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `category`, `name`, `price`, `picture`) VALUES
(1, 'aircon', 'Facility 1', 8000, 'facility-1.png'),
(2, 'aircon', 'Facility 2', 8000, 'facility-2.png'),
(3, 'non-aircon', 'Facility 3', 3500, 'facility-3.png'),
(4, 'non-aircon', 'Facility 4', 3500, 'facility-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `urns`
--

CREATE TABLE `urns` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `urns`
--

INSERT INTO `urns` (`id`, `category`, `name`, `price`, `picture`) VALUES
(1, 'metal', 'Plain Brass', 6000, 'urn_plain_brass-removebg-preview.png'),
(2, 'metal', 'Plain Silver', 9000, 'urn_plain_silver-removebg-preview.png'),
(3, 'metal', 'Dark Brown Gold Plated\r\n', 10000, 'urn_plain_brown-removebg-preview.png'),
(4, 'metal', 'Plain Gold', 12000, 'urn_design_1_gold-removebg-preview.png'),
(5, 'metal', 'Bronze', 6000, 'urn_design_5_brown-removebg-preview.png'),
(6, 'metal', 'Radiance', 9000, 'urn_design_2_bronze-removebg-preview.png'),
(7, 'metal', 'Gatsby', 10000, 'urn_design_4_gray_-removebg-preview.png'),
(8, 'metal', 'Chantique Gold', 12000, 'urn_design_3_gold-removebg-preview.png'),
(9, 'marble', 'Plain Gray', 4000, 'urn_plain_gray-removebg-preview.png'),
(10, 'marble', 'Marble Blue', 9000, 'urn_marble_blue-removebg-preview.png'),
(11, 'marble', 'Marble Pink', 10000, 'urn_marble_pink-removebg-preview.png'),
(12, 'marble', 'Marble Red', 12000, 'urn_marble_red-removebg-preview.png'),
(13, 'marble', 'Marble Black', 4000, 'urn_marble_black-removebg-preview.png'),
(14, 'marble', 'Marble White', 4000, 'urn_marble_white-removebg-preview.png'),
(15, 'glass', 'Glass Forest', 7000, 'urn_hand_glass_forest-removebg-preview.png'),
(16, 'glass', 'Glass Sea', 7600, 'urn_hand_glass_sea-removebg-preview.png'),
(17, 'glass', 'Glass Ocean', 7200, 'urn_hand_glass_ocean-removebg-preview.png'),
(18, 'glass', 'Glass Tree', 8000, 'urn_hand_glass_tree-removebg-preview.png'),
(19, 'glass', 'Glass Leaves', 7800, 'urn_hand_glass_leaves-removebg-preview.png'),
(20, 'baby', 'Marble Baby Blue', 4000, 'baby_blue-removebg-preview.png'),
(21, 'baby', 'Marble Baby Brown', 4000, 'baby_brown-removebg-preview.png'),
(22, 'baby', 'Marble Baby Pink', 4000, 'baby_pink-removebg-preview.png'),
(23, 'baby', 'Marble Baby White', 4000, 'baby_white-removebg-preview.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caskets`
--
ALTER TABLE `caskets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urns`
--
ALTER TABLE `urns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caskets`
--
ALTER TABLE `caskets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `urns`
--
ALTER TABLE `urns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
