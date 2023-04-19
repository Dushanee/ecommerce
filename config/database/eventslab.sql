-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2023 at 11:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventslab`
--

-- --------------------------------------------------------

--
-- Table structure for table `cater_pack_options`
--

CREATE TABLE `cater_pack_options` (
  `option_id` int(11) NOT NULL,
  `meal_style` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_fname` varchar(255) DEFAULT NULL,
  `cust_lname` varchar(255) DEFAULT NULL,
  `cust_password` varchar(255) NOT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `agreement` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `cust_address` varchar(255) DEFAULT NULL,
  `cust_city` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `cust_pro_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_email`, `cust_fname`, `cust_lname`, `cust_password`, `verification_code`, `agreement`, `phone_number`, `cust_address`, `cust_city`, `birthday`, `cust_pro_pic`) VALUES
(1, 'chandulasenevirathna@gmail.com', 'Chandula', 'Senevirathna', 'chandula123', '', '', '', '', '', '2023-02-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_card_details`
--

CREATE TABLE `customer_card_details` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `card_no` varchar(255) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `bil_addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_forum`
--

CREATE TABLE `customer_forum` (
  `forum_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `forum_subject` int(11) NOT NULL,
  `forum_message` int(11) NOT NULL,
  `forum_reply` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deco_pack_option`
--

CREATE TABLE `deco_pack_option` (
  `option_id` int(11) NOT NULL,
  `more` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entertainment_pack_options`
--

CREATE TABLE `entertainment_pack_options` (
  `ent_option_id` int(11) NOT NULL,
  `hours` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_description` varchar(255) DEFAULT NULL,
  `option_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `option_type`
--

CREATE TABLE `option_type` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pack_id` int(11) NOT NULL,
  `pack_name` varchar(255) NOT NULL,
  `pack_description` varchar(255) NOT NULL,
  `pack_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ref_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photo_pack_options`
--

CREATE TABLE `photo_pack_options` (
  `option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_providers`
--

CREATE TABLE `service_providers` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_email` varchar(255) NOT NULL,
  `sp_password` varchar(255) NOT NULL,
  `sp_city` varchar(255) NOT NULL,
  `buisness_name` varchar(255) NOT NULL,
  `business_address` varchar(255) NOT NULL,
  `contact_num` varchar(255) NOT NULL,
  `alt_contact_num` varchar(255) NOT NULL,
  `agreement` varchar(255) NOT NULL,
  `sp_pro_pic` varchar(255) NOT NULL,
  `sp_type` varchar(255) NOT NULL COMMENT '(venue,deco,cater,sounds,entertainment,photo)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_providers`
--

INSERT INTO `service_providers` (`sp_id`, `sp_name`, `sp_email`, `sp_password`, `sp_city`, `buisness_name`, `business_address`, `contact_num`, `alt_contact_num`, `agreement`, `sp_pro_pic`, `sp_type`) VALUES
(3, 'Pabodhi', 'hmpabodhi@gmail.com', 'pabodhi123', '', '', '', '', '', '', '', 'venue'),
(4, 'Jhon', 'jhon@gmail.com', 'jhon123', '', '', '', '', '', '', '', 'photo'),
(5, 'Mary', 'mary@gmail.com', 'mary123', '', '', '', '', '', '', '', 'deco');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider_bank`
--

CREATE TABLE `service_provider_bank` (
  `sp_id` int(11) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sound_light_pack_options`
--

CREATE TABLE `sound_light_pack_options` (
  `option_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `password`, `profile_pic`, `user_type`) VALUES
(1, 'dushanee@eventslab.com', 'Dushanee', 'Gamage', 'admin123', '', 'admin'),
(2, 'amaya@eventslab.com', 'Amaya', 'Wedamulla', 'amaya123', '', 'cs_manager');

-- --------------------------------------------------------

--
-- Table structure for table `venue_pack_options`
--

CREATE TABLE `venue_pack_options` (
  `option_id` int(11) NOT NULL,
  `capacity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cater_pack_options`
--
ALTER TABLE `cater_pack_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_card_details`
--
ALTER TABLE `customer_card_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `customer_forum`
--
ALTER TABLE `customer_forum`
  ADD PRIMARY KEY (`forum_id`),
  ADD KEY `customer_forum_ibfk_1` (`cust_id`);

--
-- Indexes for table `deco_pack_option`
--
ALTER TABLE `deco_pack_option`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `entertainment_pack_options`
--
ALTER TABLE `entertainment_pack_options`
  ADD PRIMARY KEY (`ent_option_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- Indexes for table `option_type`
--
ALTER TABLE `option_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_ibfk_1` (`cust_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `photo_pack_options`
--
ALTER TABLE `photo_pack_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- Indexes for table `service_providers`
--
ALTER TABLE `service_providers`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `service_provider_bank`
--
ALTER TABLE `service_provider_bank`
  ADD KEY `service_provider_bank_ibfk_1` (`sp_id`);

--
-- Indexes for table `sound_light_pack_options`
--
ALTER TABLE `sound_light_pack_options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue_pack_options`
--
ALTER TABLE `venue_pack_options`
  ADD PRIMARY KEY (`option_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_card_details`
--
ALTER TABLE `customer_card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_forum`
--
ALTER TABLE `customer_forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deco_pack_option`
--
ALTER TABLE `deco_pack_option`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entertainment_pack_options`
--
ALTER TABLE `entertainment_pack_options`
  MODIFY `ent_option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `option_type`
--
ALTER TABLE `option_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_providers`
--
ALTER TABLE `service_providers`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cater_pack_options`
--
ALTER TABLE `cater_pack_options`
  ADD CONSTRAINT `cater_pack_options_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`);

--
-- Constraints for table `customer_card_details`
--
ALTER TABLE `customer_card_details`
  ADD CONSTRAINT `customer_card_details_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_forum`
--
ALTER TABLE `customer_forum`
  ADD CONSTRAINT `customer_forum_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`pack_id`) REFERENCES `packages` (`pack_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`pack_id`) REFERENCES `packages` (`pack_id`);

--
-- Constraints for table `service_provider_bank`
--
ALTER TABLE `service_provider_bank`
  ADD CONSTRAINT `service_provider_bank_ibfk_1` FOREIGN KEY (`sp_id`) REFERENCES `service_providers` (`sp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sound_light_pack_options`
--
ALTER TABLE `sound_light_pack_options`
  ADD CONSTRAINT `sound_light_pack_options_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`);

--
-- Constraints for table `venue_pack_options`
--
ALTER TABLE `venue_pack_options`
  ADD CONSTRAINT `venue_pack_options_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
