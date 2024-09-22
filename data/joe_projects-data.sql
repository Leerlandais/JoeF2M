-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2024 at 08:28 AM
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
  `joe_proj_alt` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `joe_proj_class` varchar(512) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `joe_proj_img_loc` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `joe_proj_url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `joe_proj_vis` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`joe_proj_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joe_projects`
--

INSERT INTO `joe_projects` (`joe_proj_id`, `joe_proj_alt`, `joe_proj_class`, `joe_proj_img_loc`, `joe_proj_url`, `joe_proj_vis`) VALUES
(1, 'Guillaume Baillieux', 'webDev', '/public/images/projects/prefo_GB.svg', 'https://2023.webdev-cf2m.be/Guillaume/Siteprefo/', 1),
(2, 'Lee Brennan', 'webDev', '/public/images/projects/prefo_LB.jpeg', 'https://2023.webdev-cf2m.be/Lee/Site/', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
