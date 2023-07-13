-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2023 at 04:37 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newd`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

DROP TABLE IF EXISTS `analytics`;
CREATE TABLE IF NOT EXISTS `analytics` (
  `id` int(20) DEFAULT NULL,
  `page_url` varchar(150) NOT NULL,
  `entry_time` datetime NOT NULL,
  `exit_time` datetime DEFAULT NULL,
  `ip_address` varchar(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `operating_system` varchar(20) NOT NULL,
  `browser` varchar(20) NOT NULL,
  `browser_version` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `page_url`, `entry_time`, `exit_time`, `ip_address`, `country`, `operating_system`, `browser`, `browser_version`, `created_at`) VALUES
(NULL, 'https://localhost/PhpProject2/index.php', '2023-05-01 10:26:09', '2023-05-01 10:26:09', '127.0.0.1', 'INDIA', ' Win64', 'Firefox', '112.0', '2023-05-01 10:26:09'),
(NULL, 'https://localhost/PhpProject2/index.php', '2023-05-01 10:27:12', '2023-05-01 10:27:12', '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-01 10:27:12'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-05-01 11:54:41', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-01 11:54:41'),
(NULL, 'https://localhost/WebTrafficAnalyzer/', '2023-05-02 08:55:23', NULL, '127.0.0.1', 'INDIA', ' Win64', 'Firefox', '112.0', '2023-05-02 08:55:23'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-05-03 10:08:13', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-03 10:08:13'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php?login_success=1', '2023-05-03 10:10:17', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-03 10:10:17'),
(NULL, 'https://localhost/WebTrafficAnalyzer/cart.php', '2023-05-03 10:10:31', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-03 10:10:31'),
(NULL, 'https://localhost/WebTrafficAnalyzer/settings.php', '2023-05-03 10:10:37', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-03 10:10:37'),
(NULL, 'https://localhost/WebTrafficAnalyzer/settings.php', '2023-05-03 10:20:30', NULL, '127.0.0.2', 'INDIA', 'Win64', 'Firefox', '112.0', '2023-05-03 11:04:06'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-05-04 11:38:27', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-04 11:38:27'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-05-05 11:17:48', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-05 11:17:48'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-05-12 05:20:10', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-12 05:20:10'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php?login_success=1', '2023-05-12 05:41:10', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-12 05:41:10'),
(NULL, 'https://localhost/WebTrafficAnalyzer/cart.php', '2023-05-12 05:41:41', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-12 05:41:41'),
(NULL, 'https://localhost/WebTrafficAnalyzer/settings.php', '2023-05-12 05:44:24', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-12 05:44:24'),
(NULL, 'https://localhost/WebTrafficAnalyzer/payment_options.php', '2023-05-12 06:06:35', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-12 06:06:35'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-05-15 03:48:00', NULL, '::1', 'INDIA', ' Win64', 'Safari', '537.36', '2023-05-15 03:48:00'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2022-05-12 10:10:10', NULL, '127.0.0.2', 'INDIA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:00:47'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2022-07-15 10:10:15', NULL, '127.0.0.2', 'INDIA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:01:30'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2022-06-15 15:10:10', NULL, '127.0.0.2', 'INDIA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:02:00'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2022-01-15 10:15:20', NULL, '127.0.0.2', 'USA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:02:38'),
(NULL, 'https://localhost/WebTrafficAnalyzer/settings.php', '2021-09-15 09:10:10', NULL, '127.0.0.2', 'USA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:03:43'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-01-15 10:10:10', NULL, '127.0.0.2', 'USA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:04:50'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-01-15 15:10:20', NULL, '127.0.0.2', 'INDIA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:05:16'),
(NULL, 'https://localhost/WebTrafficAnalyzer/index.php', '2023-02-15 10:10:05', NULL, '127.0.0.2', 'USA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:05:45'),
(NULL, 'https://localhost/WebTrafficAnalyzer/cart.php', '2023-03-15 12:10:10', NULL, '127.0.0.2', 'INDIA', 'Win64', 'Firefox', '112.0', '2023-05-15 04:06:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
