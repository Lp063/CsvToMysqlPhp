-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 09:18 am
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpexceldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `prod_id` varchar(20) NOT NULL,
  `prod_name` varchar(100) DEFAULT NULL,
  `prod_description` varchar(500) DEFAULT NULL,
  `prod_short_description` varchar(200) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `prod_sub_categories` int(11) DEFAULT NULL,
  `prod_sku` varchar(100) DEFAULT NULL,
  `prod_price` varchar(100) DEFAULT NULL,
  `prod_tax_class` varchar(100) DEFAULT NULL,
  `prod_status` int(11) DEFAULT NULL,
  `prod_meta_title` varchar(100) DEFAULT NULL,
  `prod_meta_keyword` varchar(100) DEFAULT NULL,
  `prod_meta_description` varchar(200) DEFAULT NULL,
  `prod_image` varchar(100) DEFAULT NULL,
  `prod_image1` varchar(100) DEFAULT NULL,
  `prod_image2` varchar(100) DEFAULT NULL,
  `prod_image3` varchar(100) DEFAULT NULL,
  `prod_image4` varchar(100) DEFAULT NULL,
  `prod_on_home` int(11) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `prod_sell_price` varchar(100) DEFAULT NULL,
  `prod_qty` varchar(100) DEFAULT NULL,
  `prod_stock` varchar(100) DEFAULT NULL,
  `require_shipping` varchar(100) DEFAULT NULL,
  `prod_shipping_price` varchar(100) DEFAULT NULL,
  `prod_discount` varchar(100) DEFAULT NULL,
  `filter_id` int(11) DEFAULT NULL,
  `complete_the_look` int(11) DEFAULT NULL,
  `taggings` text,
  `prod_customizable` int(11) DEFAULT NULL,
  `url_for_product_details` varchar(100) DEFAULT NULL,
  `prod_gift_card` int(11) DEFAULT NULL,
  `prod_gift_code` int(11) DEFAULT NULL,
  `sold_by` varchar(50) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL,
  `GSM_name` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `gusset` int(10) NOT NULL,
  `qns` int(20) DEFAULT NULL,
  `style` varchar(100) DEFAULT NULL,
  `handle` varchar(50) DEFAULT NULL,
  `style_id` varchar(20) DEFAULT NULL,
  `print` varchar(50) DEFAULT NULL,
  `print_color` varchar(5000) DEFAULT NULL,
  `lamination` varchar(100) DEFAULT NULL,
  `special_wrk` varchar(100) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL,
  `approved` tinyint(4) DEFAULT NULL,
  `seller_request_status` int(11) DEFAULT NULL,
  `product_status` int(11) DEFAULT NULL,
  `shipping_require` varchar(8) DEFAULT NULL,
  `product_material` varchar(100) DEFAULT NULL,
  `product_material_color` varchar(50) DEFAULT NULL,
  `product_material_size` varchar(50) DEFAULT NULL,
  `pltw` varchar(30) NOT NULL,
  `pltl` varchar(30) NOT NULL,
  `pltd` varchar(30) NOT NULL,
  `lid` varchar(15) NOT NULL,
  `compartment` varchar(100) NOT NULL,
  `volumn` varchar(100) NOT NULL,
  `handle_size` varchar(50) DEFAULT NULL,
  `handle_color` varchar(50) DEFAULT NULL,
  `other_details` text,
  `product_upload_date` date NOT NULL,
  `product_upload_time` time NOT NULL,
  `prod_color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
