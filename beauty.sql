-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 04:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` longtext,
  `categories` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `about_vendor` text NOT NULL,
  `city_id` int(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `user_image` longtext,
  `password` varchar(255) DEFAULT NULL,
  `admin_type` varchar(120) NOT NULL,
  `user_status` int(11) DEFAULT '0',
  `dateCreated` timestamp NULL DEFAULT NULL,
  `updatedOn` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email_id`, `mobile`, `address`, `categories`, `location`, `longitude`, `latitude`, `about_vendor`, `city_id`, `dob`, `user_image`, `password`, `admin_type`, `user_status`, `dateCreated`, `updatedOn`) VALUES
(7, 'Bhaskara rao Suggu', 'Admin@gmail.com', '8500630359', 'dfsfds', '', '', '', '', '', 0, '0000-00-00', 'assets/userimage/Chrysanthemum.jpg', '12345', 'Admin', 0, NULL, NULL),
(6, 'suggu', 'suggu@gmail.com', '8500630362', 'suggu', '', '', '', '', '', 0, '0000-00-00', 'assets/userimage/Jellyfish.jpg', '1234', 'Vender', 0, NULL, NULL),
(9, 'suggu41', 'suggu41@gmail.com', '8500630362', 'hgf hgf hfg h', '6', '', '', '', '', 8, NULL, 'assets/userimage/Hydrangeas.jpg', '12345', 'Admin', 0, NULL, NULL),
(10, 'bujji', 'bujji@gmail.com', '8500630362', 'Erragadda', '7', 'gfdsgfdsg', '3213123213', '2313123123', ' 21321 v3213v213v21321v3', 8, NULL, 'assets/userimage/Lighthouse.jpg', '123456', 'Vender', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `cat_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '1',
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` longtext NOT NULL,
  `cat_image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `banner_type` int(11) NOT NULL DEFAULT '0' COMMENT '0=>Home Slider,1=>Top Offers,2=>Bottom Offers',
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`cat_id`, `lang_id`, `cat_name`, `cat_desc`, `cat_image`, `status`, `banner_type`, `dateCreated`) VALUES
(1, 44, 'gfd', 'gfd gdf gdf gfd', 'assets/banners/Hydrangeas.jpg', 0, 0, '0000-00-00 00:00:00'),
(2, 3, 'vcxzvcxz', 'vcxzvcxzv', 'assets/banners/Chrysanthemum.jpg', 0, 1, '0000-00-00 00:00:00'),
(3, 0, 'suggu', ' suggu', 'assets/banners/Chrysanthemum.jpg', 1, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `slug` text,
  `cat_image` varchar(255) DEFAULT NULL,
  `cat_desc` text,
  `brand_status` int(1) NOT NULL DEFAULT '1',
  `seo_title` longtext,
  `seo_desc` longtext,
  `seo_keywords` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `slug`, `cat_image`, `cat_desc`, `brand_status`, `seo_title`, `seo_desc`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(3, 'brand', 'Slug', 'assets/brands/123450.jpg', 'Cat Description', 1, 'seo title', 'seo Desc', 'Seo Key', '0000-00-00 00:00:00', '2020-03-12 14:51:37'),
(5, 'gfdshgfdhfgdh', 'gfdshfgdhgfd', 'assets/brands/Desert.jpg', 'fdsghgfdhgfdhbcvx bvcxbvcbvc', 0, 'gfdshgfdhgfdx bvcx bvcb', 'gdfshfgdhfgb vcxb vcx', 'gfdshfgdh vcx bvcxbvcx', '0000-00-00 00:00:00', '2020-03-12 14:48:32'),
(6, 'bhaskar', 'zxvzv', 'assets/brands/Chrysanthemum.jpg', 'vxcvxc c', 0, 'vxxc vxcv', ' xvx vcx v', 'x cv xc cx cx xc ', '0000-00-00 00:00:00', '2020-03-12 14:51:34'),
(7, 'bcx', 'bxc', 'assets/brands/Desert.jpg', 'bx', 0, 'xcbc', 'bxbxbxcbx', 'bxc bcx', '0000-00-00 00:00:00', '2020-03-12 14:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `bu_users`
--

CREATE TABLE `bu_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(150) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_phone` varchar(150) NOT NULL,
  `user_address` varchar(150) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_role` varchar(150) NOT NULL,
  `user_status` int(11) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bu_users`
--

INSERT INTO `bu_users` (`id`, `user_name`, `user_email`, `user_phone`, `user_address`, `user_password`, `user_role`, `user_status`, `date_created`) VALUES
(1, 'suggu', 'Admin@gmail.com', '8500630362', 'srikakulam', '12345', 'admin', 0, '2020-03-03 10:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL COMMENT 'banner image sits here',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `cat_desc` text,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `brand_id` int(11) NOT NULL,
  `sequence` varchar(11) DEFAULT NULL,
  `seo_title` longtext,
  `seo_desc` longtext,
  `seo_keywords` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `image2`, `parent_id`, `cat_desc`, `status`, `created_at`, `update_at`, `brand_id`, `sequence`, `seo_title`, `seo_desc`, `seo_keywords`) VALUES
(6, 'gdsf', 'gfdsg', 'assets/category/Desert.jpg', 'assets/category/Penguins.jpg', 3654, '65464', 1, '0000-00-00 00:00:00', '2020-03-12 14:34:04', 3, '44', 'gdfg', 'gdfg', 'gdfg'),
(9, 'category Name sugu', 'Slug', 'assets/category/Tulips.jpg', 'assets/category/Chrysanthemum.jpg', 123, 'category Description', 1, '0000-00-00 00:00:00', '2020-03-12 14:34:06', 6, '33gghjhj', 'Seo Titled', 'Seo Descriptiond', 'Seo Keywordsd');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `status`, `dateCreated`) VALUES
(9, 'Banglor', 0, '2020-03-08 10:09:57'),
(8, 'Hydrabad', 1, '2020-02-27 15:18:02'),
(7, 'Srikakulam', 1, '2020-02-27 15:18:05'),
(6, 'Vizag', 1, '2020-02-27 14:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `login_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `is_logged_in` int(11) DEFAULT NULL,
  `env_info` varchar(255) DEFAULT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT '1',
  `customer_id` int(11) NOT NULL,
  `grand_total` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `net_total` decimal(10,2) NOT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `shipping_name` varchar(255) DEFAULT NULL,
  `shipping_contactno` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_city` varchar(255) DEFAULT NULL,
  `shipping_region` varchar(255) DEFAULT NULL,
  `shipping_zip` varchar(255) DEFAULT NULL,
  `tracking_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `offer_price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `sub_cat_id` int(11) DEFAULT NULL,
  `pro_type` int(11) DEFAULT NULL,
  `lang_id` varchar(255) DEFAULT NULL,
  `pro_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `slug` text,
  `hsn_code` varchar(255) DEFAULT NULL,
  `bullet_points` mediumtext,
  `pro_priority` int(11) DEFAULT NULL,
  `pro_image` varchar(255) DEFAULT NULL,
  `pro_image_2` varchar(255) DEFAULT NULL,
  `pro_image_3` varchar(255) DEFAULT NULL,
  `pro_image_4` varchar(255) DEFAULT NULL,
  `pro_image_5` varchar(255) DEFAULT NULL,
  `pro_short_desc` varchar(255) DEFAULT NULL,
  `pro_price` varchar(255) DEFAULT NULL,
  `pro_desc` longtext,
  `qty` int(11) DEFAULT NULL,
  `pro_category` varchar(255) DEFAULT NULL,
  `pro_brand` varchar(255) DEFAULT NULL,
  `pro_dim` varchar(255) DEFAULT NULL,
  `pro_model` varchar(255) DEFAULT NULL,
  `pro_sku` varchar(255) DEFAULT NULL,
  `pro_weight` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  `specification` longtext,
  `pro_prices` varchar(255) DEFAULT NULL,
  `spl_discount` varchar(255) NOT NULL DEFAULT '0',
  `extra_fields` varchar(255) DEFAULT NULL,
  `top_deal_order` int(11) DEFAULT NULL,
  `seo_title` longtext,
  `seo_desc` longtext,
  `seo_keywords` longtext,
  `status` int(11) DEFAULT '1',
  `dateCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `vendor_id`, `cat_id`, `sub_cat_id`, `pro_type`, `lang_id`, `pro_name`, `slug`, `hsn_code`, `bullet_points`, `pro_priority`, `pro_image`, `pro_image_2`, `pro_image_3`, `pro_image_4`, `pro_image_5`, `pro_short_desc`, `pro_price`, `pro_desc`, `qty`, `pro_category`, `pro_brand`, `pro_dim`, `pro_model`, `pro_sku`, `pro_weight`, `series`, `specification`, `pro_prices`, `spl_discount`, `extra_fields`, `top_deal_order`, `seo_title`, `seo_desc`, `seo_keywords`, `status`, `dateCreated`) VALUES
(2, NULL, 3, 0, 111, '32423', 'suggu', 'fdsfsdfsdf', 'fdsfdsfsdfdsf', '1. df  gfd gdf gdf gdgdfg d          2. dfg dfgdfg dfg dfg dfg df', 33, 'assets/products/Chrysanthemum.jpg', 'assets/products/Desert.jpg', 'assets/products/Jellyfish.jpg', 'assets/products/Jellyfish.jpg', 'assets/products/Hydrangeas.jpg', '1. df  gfd gdf gdf gdgdfg d          2. dfg dfgdfg dfg dfg dfg df', 'dfgdfgdfgdfg', '1. df  gfd gdf gdf gdgdfg d          2. dfg dfgdfg dfg dfg dfg df', 5555, NULL, 'gdf gd  gdf gdf', 'gdf gdfgdf', ' dfg df', 'g dfg dfg ', ' gdf', ' gdfg df', ' dfg df', ' gdf', ' dfgdf', ' dfg df', 0, ' gdfg df', ' dg df', 'g gdfg dfg', 0, NULL),
(3, NULL, 3, 0, 111, '32423', 'suggu', 'fdsfsdfsdf', 'fdsfdsfsdfdsf', 'fdsfsdfds f sd', 33, 'assets/products/Chrysanthemum.jpg', 'assets/products/Desert.jpg', 'assets/products/Jellyfish.jpg', 'assets/products/Jellyfish.jpg', 'assets/products/Hydrangeas.jpg', NULL, 'dfgdfgdfgdfg', NULL, 5555, NULL, 'gdf gd  gdf gdf', 'gdf gdfgdf', ' dfg df', 'g dfg dfg ', ' gdf', ' gdfg df', ' dfg df', ' gdf', ' dfgdf', ' dfg df', 0, ' gdfg df', ' dg df', 'g gdfg dfg', 0, NULL),
(4, 7, 5, 1, 5345345, '5435345', '5435345', '543543', '5435345', '5435 34 543543 5435', 2147483647, 'assets/products/Koala.jpg', 'assets/products/Hydrangeas.jpg', 'assets/products/Koala.jpg', 'assets/products/Desert.jpg', 'assets/products/Lighthouse.jpg', NULL, 'g dfsg', NULL, 55, NULL, 'g dfsg', ' gdfsg', ' gfdsgfdsg', ' gdfsg', ' gdfg', ' dgfgs', ' gdfsgfd', 'g dfsg', ' dgsf', ' gdsfg', 0, ' dgfsg', ' gdfg', ' gdsfgfd', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `related_products`
--

CREATE TABLE `related_products` (
  `id` int(11) NOT NULL,
  `rel_pro_id` int(11) NOT NULL,
  `rel_pro_ids` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_cat_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '1',
  `cat_id` int(11) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `sub_cat_desc` longtext NOT NULL,
  `sub_cat_image` varchar(255) NOT NULL,
  `sub_cat_banner_image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_cat_id`, `lang_id`, `cat_id`, `sub_cat_name`, `sub_cat_desc`, `sub_cat_image`, `sub_cat_banner_image`, `status`, `dateCreated`) VALUES
(2, 23424234, 9, 'tertert', 'tretert', 'assets/sub_category/Tulips.jpg', 'assets/sub_category/Desert.jpg', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address1` longtext,
  `address2` longtext,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `user_status` int(11) DEFAULT NULL,
  `user_remarks` mediumtext,
  `dateCreated` datetime DEFAULT NULL,
  `updatedOn` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `ua_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address_type` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address1` mediumtext,
  `address2` mediumtext,
  `landmark` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pin_code` varchar(255) DEFAULT NULL,
  `dateCreated` datetime NOT NULL,
  `ua_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'SPA / Unisex Salon/ Massagaes',
  `about_vendor` longtext COLLATE utf8_unicode_ci NOT NULL,
  `photos` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `dateCreated` datetime NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `city_id`, `name`, `location`, `address`, `latitude`, `longitude`, `phone_no`, `mobile_no`, `email_id`, `categories`, `about_vendor`, `photos`, `password`, `status`, `dateCreated`, `extra`) VALUES
(7, 8, 'suggu', 'sd', 'VALLABHARAOPETA 1-83\r\nPATHIVADAPALAM', '1222fds', 'suggu', '08500630362', '08187871138', 'bhaskarsuggu41@gmail.com', 'Admin', 'ghfgfg', 'assets/vendors/Jellyfish.jpg', '1234', 1, '0000-00-00 00:00:00', 0),
(10, 8, 'suggu', 'sd', 'VALLABHARAOPETA 1-83\r\nPATHIVADAPALAM', '1222fds', 'suggu', '08500630362', '08187871138', 'suggu41@gmail.com', 'Admin', 'ghfgfg', 'assets/vendors/Jellyfish.jpg', '123', 1, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(11) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `website_title` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(360) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `google_plus_link` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `phone_no` varchar(20) NOT NULL,
  `land_line` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(360) NOT NULL,
  `copy_right` varchar(255) NOT NULL,
  `copy_right2` varchar(255) NOT NULL,
  `copy_right3` varchar(255) NOT NULL,
  `google_map` text NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `info_email_id` varchar(255) NOT NULL,
  `working_days` varchar(255) NOT NULL,
  `timings` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bu_users`
--
ALTER TABLE `bu_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `related_products`
--
ALTER TABLE `related_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`ua_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`fav_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bu_users`
--
ALTER TABLE `bu_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `related_products`
--
ALTER TABLE `related_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `ua_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
