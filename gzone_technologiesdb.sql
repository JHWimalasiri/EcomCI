-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 07:04 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gzone_technologiesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(11) NOT NULL,
  `agent_first_name` varchar(50) NOT NULL,
  `agent_middle_name` varchar(50) DEFAULT NULL,
  `agent_last_name` varchar(50) NOT NULL,
  `agent_email` varchar(50) NOT NULL,
  `agent_profile_image` longblob,
  `cart_id` int(11) DEFAULT NULL,
  `deposit_amount_id` int(11) DEFAULT NULL,
  `agent_address_id` int(11) DEFAULT NULL,
  `agent_phone_num` varchar(45) DEFAULT NULL,
  `agent_business_name` varchar(45) DEFAULT NULL,
  `user_username` varchar(45) NOT NULL,
  `agent_nic` varchar(45) DEFAULT NULL,
  `agent_license` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_first_name`, `agent_middle_name`, `agent_last_name`, `agent_email`, `agent_profile_image`, `cart_id`, `deposit_amount_id`, `agent_address_id`, `agent_phone_num`, `agent_business_name`, `user_username`, `agent_nic`, `agent_license`, `status`) VALUES
(1, 'vfg', 'heth', 'ht', 'hrtj', NULL, NULL, NULL, NULL, 'kyk', NULL, '', NULL, NULL, NULL),
(2, '', NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(3, '', NULL, '', 'gegg', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(4, '', NULL, '', 'fg@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(5, '', NULL, '', 'dj@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(6, '', NULL, '', 'js@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(7, '', NULL, '', 'jp@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(8, '', NULL, '', 'hg@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(9, '', NULL, '', 'kd@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL),
(10, '', NULL, '', 'jd@gmail.com', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agent_address`
--

CREATE TABLE `agent_address` (
  `id` int(11) NOT NULL,
  `house_number` varchar(50) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postal_code` varchar(45) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `agent_rating`
--

CREATE TABLE `agent_rating` (
  `agent_rating_id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cash_on_delivery`
--

CREATE TABLE `cash_on_delivery` (
  `cash_on_delivery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `collection_point`
--

CREATE TABLE `collection_point` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `charge` decimal(10,0) NOT NULL,
  `phone_number_id` varchar(45) NOT NULL,
  `courier_serviceprovider_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courier_serviceprovider`
--

CREATE TABLE `courier_serviceprovider` (
  `courier_serviceprovider_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_first_name` varchar(50) DEFAULT NULL,
  `customer_middle_name` varchar(50) DEFAULT NULL,
  `customer_last_name` varchar(50) DEFAULT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_profile_image` varchar(500) DEFAULT NULL,
  `cart_id` int(11) DEFAULT NULL,
  `customer_phone_num` varchar(45) NOT NULL,
  `customer_address_id` int(11) DEFAULT NULL,
  `customer_password` varchar(20) NOT NULL,
  `customer_username` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_first_name`, `customer_middle_name`, `customer_last_name`, `customer_email`, `customer_profile_image`, `cart_id`, `customer_phone_num`, `customer_address_id`, `customer_password`, `customer_username`) VALUES
(3, NULL, NULL, NULL, 'rc@gmail.com', NULL, NULL, '', NULL, '$2y$10$7JcPMZSoh7Cje', 'Roy'),
(4, NULL, NULL, NULL, 'gh@gmail.com', NULL, NULL, '', NULL, '$2y$10$HK2FMxDMkHct1', 'girh'),
(5, NULL, NULL, NULL, 'al@gmail.com', NULL, NULL, '', NULL, '$2y$10$JMSE7Tb5eEx0G', 'alan'),
(6, NULL, NULL, NULL, 'jh@gmail.com', NULL, NULL, '', NULL, '$2y$10$IKJAbVImedVYT', 'dhy'),
(7, NULL, NULL, NULL, 'asd@gmail.com', NULL, NULL, '', NULL, '$2y$10$POILjsDPidKUl', 'SORJSLK'),
(8, NULL, NULL, NULL, 'dklfgj@gmail.com', NULL, NULL, '', NULL, '$2y$10$kd3kLfNkSwxch', 'kjdfq'),
(9, NULL, NULL, NULL, 'sfdg@gmail.com', NULL, NULL, '', NULL, '$2y$10$.ixYNcciGEphX', 'sfdklgj'),
(10, NULL, NULL, NULL, 'sdf@gmail.com', NULL, NULL, '', NULL, '$2y$10$ny.odRM0osS5J', 'klsdf'),
(11, NULL, NULL, NULL, 'gjj@gmail.com', NULL, NULL, '', NULL, '$2y$10$0Rer69fnBkrNb', 'grhre');

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `id` int(11) NOT NULL,
  `house_number` int(11) NOT NULL,
  `street_name` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postal_code` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_method`
--

CREATE TABLE `delivery_method` (
  `delivery_method_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `collection_point_id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_amount`
--

CREATE TABLE `deposit_amount` (
  `id` int(11) NOT NULL,
  `commission` decimal(10,0) DEFAULT NULL,
  `deposit_amount` decimal(10,0) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `cash_collected` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `online_payment`
--

CREATE TABLE `online_payment` (
  `online_payment_id` int(11) NOT NULL,
  `cardholder_name` varchar(50) DEFAULT NULL,
  `card_number` int(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `expiry_date` varchar(50) DEFAULT NULL,
  `paypal_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` decimal(10,0) NOT NULL,
  `delivery_method_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_discount` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_has_product`
--

CREATE TABLE `order_has_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `payment_amount` decimal(10,0) NOT NULL,
  `cash_on_delivery_id` int(11) NOT NULL,
  `online_payment_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_description` varchar(100) DEFAULT '0',
  `product_price` int(11) DEFAULT '0',
  `product_model` varchar(25) DEFAULT '0',
  `product_image` varchar(500) DEFAULT '0',
  `product_dicount` decimal(10,0) DEFAULT '0',
  `segment_id` int(11) DEFAULT '0',
  `product_quantity` int(11) DEFAULT '0',
  `category_id` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `product_rating_id` int(11) NOT NULL,
  `content` varchar(100) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `segment`
--

CREATE TABLE `segment` (
  `segment_id` int(11) NOT NULL,
  `segment_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `shopping_cart_id` int(11) NOT NULL,
  `cart_cost` decimal(10,0) DEFAULT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `user_role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `user_role_id`) VALUES
('jjjg7h', '3gthr', 2),
('rgreh', '$2y$10$MDIshG.ZNDZ6Xc6sHJVWeu/Uxgwarn/NBuKzaY', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `type`) VALUES
(1, 'admin'),
(2, 'customer'),
(3, 'agent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`),
  ADD KEY `fk_agent_cart1_idx` (`cart_id`),
  ADD KEY `fk_agent_deposit_amount1_idx` (`deposit_amount_id`),
  ADD KEY `fk_agent_agent_address1_idx` (`agent_address_id`),
  ADD KEY `fk_agent_user1_idx` (`user_username`);

--
-- Indexes for table `agent_address`
--
ALTER TABLE `agent_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_rating`
--
ALTER TABLE `agent_rating`
  ADD PRIMARY KEY (`agent_rating_id`);

--
-- Indexes for table `cash_on_delivery`
--
ALTER TABLE `cash_on_delivery`
  ADD PRIMARY KEY (`cash_on_delivery_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `collection_point`
--
ALTER TABLE `collection_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`),
  ADD KEY `fk_courier_courier_serviceprovider1_idx` (`courier_serviceprovider_id`);

--
-- Indexes for table `courier_serviceprovider`
--
ALTER TABLE `courier_serviceprovider`
  ADD PRIMARY KEY (`courier_serviceprovider_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `fk_customer_cart1_idx` (`cart_id`),
  ADD KEY `fk_customer_address1_idx` (`customer_address_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_method`
--
ALTER TABLE `delivery_method`
  ADD PRIMARY KEY (`delivery_method_id`),
  ADD KEY `fk_delivery_method_collection_point1_idx` (`collection_point_id`),
  ADD KEY `fk_delivery_method_courier1_idx` (`courier_id`);

--
-- Indexes for table `deposit_amount`
--
ALTER TABLE `deposit_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_payment`
--
ALTER TABLE `online_payment`
  ADD PRIMARY KEY (`online_payment_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order_delivery_method1_idx` (`delivery_method_id`),
  ADD KEY `fk_order_payment1_idx` (`payment_id`);

--
-- Indexes for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `fk_order_has_product_product1_idx` (`product_id`),
  ADD KEY `fk_order_has_product_order1_idx` (`order_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`payment_method_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`payment_method_id`),
  ADD KEY `fk_payment_cash_on_delivery1_idx` (`cash_on_delivery_id`),
  ADD KEY `fk_payment_online_payment1_idx` (`online_payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `fk_product_segment1_idx` (`segment_id`),
  ADD KEY `fk_product_category1_idx` (`category_id`);

--
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`product_rating_id`),
  ADD KEY `fk_product_rating_product1_idx` (`product_id`);

--
-- Indexes for table `segment`
--
ALTER TABLE `segment`
  ADD PRIMARY KEY (`segment_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`shopping_cart_id`),
  ADD KEY `fk_shopping_cart_order1_idx` (`order_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `fk_user_user_role1_idx` (`user_role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `agent_rating`
--
ALTER TABLE `agent_rating`
  MODIFY `agent_rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cash_on_delivery`
--
ALTER TABLE `cash_on_delivery`
  MODIFY `cash_on_delivery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collection_point`
--
ALTER TABLE `collection_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `courier_serviceprovider`
--
ALTER TABLE `courier_serviceprovider`
  MODIFY `courier_serviceprovider_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `delivery_method`
--
ALTER TABLE `delivery_method`
  MODIFY `delivery_method_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `deposit_amount`
--
ALTER TABLE `deposit_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `online_payment`
--
ALTER TABLE `online_payment`
  MODIFY `online_payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `product_rating_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `segment`
--
ALTER TABLE `segment`
  MODIFY `segment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `shopping_cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_agent_agent_address1` FOREIGN KEY (`agent_address_id`) REFERENCES `agent_address` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agent_cart1` FOREIGN KEY (`cart_id`) REFERENCES `shopping_cart` (`shopping_cart_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_agent_deposit_amount1` FOREIGN KEY (`deposit_amount_id`) REFERENCES `deposit_amount` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `courier`
--
ALTER TABLE `courier`
  ADD CONSTRAINT `fk_courier_courier_serviceprovider1` FOREIGN KEY (`courier_serviceprovider_id`) REFERENCES `courier_serviceprovider` (`courier_serviceprovider_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_address1` FOREIGN KEY (`customer_address_id`) REFERENCES `customer_address` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_cart1` FOREIGN KEY (`cart_id`) REFERENCES `shopping_cart` (`shopping_cart_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `delivery_method`
--
ALTER TABLE `delivery_method`
  ADD CONSTRAINT `fk_delivery_method_collection_point1` FOREIGN KEY (`collection_point_id`) REFERENCES `collection_point` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_delivery_method_courier1` FOREIGN KEY (`courier_id`) REFERENCES `courier` (`courier_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_delivery_method1` FOREIGN KEY (`delivery_method_id`) REFERENCES `delivery_method` (`delivery_method_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_payment1` FOREIGN KEY (`payment_id`) REFERENCES `payment_method` (`payment_method_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD CONSTRAINT `fk_order_has_product_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_has_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD CONSTRAINT `fk_payment_cash_on_delivery1` FOREIGN KEY (`cash_on_delivery_id`) REFERENCES `cash_on_delivery` (`cash_on_delivery_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_online_payment1` FOREIGN KEY (`online_payment_id`) REFERENCES `online_payment` (`online_payment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_segment1` FOREIGN KEY (`segment_id`) REFERENCES `segment` (`segment_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD CONSTRAINT `fk_product_rating_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `fk_shopping_cart_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_user_role1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
