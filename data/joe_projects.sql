-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2024 at 04:18 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joef2m`
--

-- --------------------------------------------------------

--
-- Table structure for table `joe_projects`
--

DROP TABLE IF EXISTS `joe_projects`;
CREATE TABLE IF NOT EXISTS `joe_projects` (
  `joe_proj_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `joe_proj_title` varchar(128) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `joe_proj_desc` varchar(512) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `joe_proj_img_loc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `joe_proj_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `joe_proj_vis` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`joe_proj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
