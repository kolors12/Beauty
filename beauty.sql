-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 02:02 PM
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

INSERT INTO `admin` (`admin_id`, `name`, `email_id`, `mobile`, `address`, `dob`, `user_image`, `password`, `admin_type`, `user_status`, `dateCreated`, `updatedOn`) VALUES
(7, 'Bhaskara rasd', 'bhaskars@gmail.com', '8500630359', 'dfsfds', '0000-00-00', 'assets/userimage/Chrysanthemum.jpg', NULL, 'Admin', 1, NULL, NULL),
(6, 'suggu', 'suggu@gmail.com', '8500630362', 'suggu', '0000-00-00', 'assets/userimage/Jellyfish.jpg', NULL, 'Vender', 0, NULL, NULL);

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
(3, 0, 'suggu', ' suggu', 'assets/banners/Chrysanthemum.jpg', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` text,
  `cat_image` varchar(255) DEFAULT NULL,
  `cat_desc` text,
  `status` int(1) NOT NULL DEFAULT '1',
  `seo_title` longtext,
  `seo_desc` longtext,
  `seo_keywords` longtext,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'suggu', 'suggu@gmail.com', '8500630362', 'srikakulam', '12345', 'admin', 0, '2020-02-26 14:02:31');

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
  `sequence` int(11) DEFAULT NULL,
  `seo_title` longtext,
  `seo_desc` longtext,
  `seo_keywords` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(9, 'Banglor', 1, '2020-02-27 15:18:00'),
(8, 'Hydrabad', 1, '2020-02-27 15:18:02'),
(7, 'Srikakulam', 1, '2020-02-27 15:18:05'),
(6, 'Vizag', 1, '2020-02-27 14:19:22');

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
  `status` int(11) NOT NULL,
  `dateCreated` datetime NOT NULL,
  `extra` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_cat_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bu_users`
--
ALTER TABLE `bu_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
