-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 06:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctgtest_n_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_idea_folder`
--

CREATE TABLE `account_idea_folder` (
  `account_idea_folder_id` int(10) UNSIGNED NOT NULL,
  `profile_account_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `img_1_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `img_2_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `img_3_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `top_1` varchar(250) DEFAULT NULL,
  `top_2` varchar(250) DEFAULT NULL,
  `top_3` varchar(250) DEFAULT NULL,
  `p_1_head` varchar(250) DEFAULT NULL,
  `p_1_text` text DEFAULT NULL,
  `p_2_head` varchar(250) DEFAULT NULL,
  `p_2_text` text DEFAULT NULL,
  `p_3_head` varchar(250) DEFAULT NULL,
  `p_3_text` text DEFAULT NULL,
  `p_4_head` varchar(250) DEFAULT NULL,
  `p_4_text` text DEFAULT NULL,
  `p_5_head` varchar(250) DEFAULT NULL,
  `p_5_text` text DEFAULT NULL,
  `p_6_head` varchar(250) DEFAULT NULL,
  `p_6_text` text DEFAULT NULL,
  `p_7_head` varchar(250) DEFAULT NULL,
  `p_7_text` text DEFAULT NULL,
  `p_8_head` varchar(250) DEFAULT NULL,
  `p_8_text` text DEFAULT NULL,
  `p_9_head` varchar(250) DEFAULT NULL,
  `p_9_text` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_idea_folder`
--

INSERT INTO `account_idea_folder` (`account_idea_folder_id`, `profile_account_id`, `img_1_id`, `img_2_id`, `img_3_id`, `top_1`, `top_2`, `top_3`, `p_1_head`, `p_1_text`, `p_2_head`, `p_2_text`, `p_3_head`, `p_3_text`, `p_4_head`, `p_4_text`, `p_5_head`, `p_5_text`, `p_6_head`, `p_6_text`, `p_7_head`, `p_7_text`, `p_8_head`, `p_8_text`, `p_9_head`, `p_9_text`) VALUES
(0, 1, 0, 0, 0, 'Designer closets up to 50% off', 'Our Pre-Assembly service reduces installation time to ust 4-6 hours for a 10 x 10 closet', 'Call today! (503) 639-7068', 'Why Closets To Go', '<h1 style=\\\"margin: 0px 0px 25px; font-family: \\\'Helvetica Neue\\\', Helvetica, Arial, sans-serif; font-weight: 200; line-height: normal; color: #2e6c81; text-rendering: optimizelegibility; font-size: 37px; background-color: #f1f6f9;\\\">Our Guarantee</h1>\r\n<p style=\\\"margin: 0px 0px 10.5px; color: #2e6c81; font-family: \\\'Helvetica Neue\\\', Helvetica, Arial, sans-serif; font-size: 13px; background-color: #f1f6f9;\\\"><span style=\\\"font-size: x-large;\\\">We manufacture all our closet organizers with top quality materials right here in the USA.</span></p>\r\n<p style=\\\"margin: 0px 0px 10.5px; color: #2e6c81; font-family: \\\'Helvetica Neue\\\', Helvetica, Arial, sans-serif; font-size: 13px; background-color: #f1f6f9;\\\">And we\\\'ve been doing it for nearly three decades. Learn more about our company below or contact us for more information about placing an order or our custom closet systems.<br /><strong>Questions? Call today! (503) 639-7068</strong></p>', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
