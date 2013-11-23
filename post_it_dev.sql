-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2013 at 04:37 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `post_it_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('2f833f462813d03eec15f4cc1a358551', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.45 Safari/537.36', 1384894665, ''),
('3ef94adb89c46dcda84bcd1408545805', '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.45 Safari/537.36', 1385246019, 'a:4:{s:9:"user_data";s:0:"";s:5:"fb_id";s:10:"1710404136";s:7:"fb_name";s:24:"Konok Habibullah Araphat";s:11:"accesstoken";s:180:"CAATixeMPhRQBADzwnPyTq1qXo3QJWtslIRFlY0KVQCMJFr5ZAUmmy597TUiGdjZAJxThSVdlkvF0HNeXTcKalvadQaxoJY3DfJQc0ZBIpHmVMbkkIjelSRzNQOK9jh4GKNRkCDldw1WuUSDMyMW5Vg7NDrEjCS9j9pqf1B6w1NRtJ012wYH";}');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` text NOT NULL,
  `page_id` text NOT NULL,
  `accesstoken` text NOT NULL,
  `last_updated` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_id` text NOT NULL,
  `status` text CHARACTER SET utf8 NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `fb_id`, `status`, `date_time`) VALUES
(1, '1710404136', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.', '2013-11-15 04:30:00'),
(4, '1710404136', 'রাতের আকাশে তখন চাঁদ ছিল। অন্ধকারে চাঁদের সেই আলো নেহাত কম নয়। কিন্তু মুহুর্মুহু আতশবাজির ঝলকানি, আলোর বিচ্ছুরণ, হাজারো রঙের খেলা আর আলোর ঝরনাধারায় সেই চাঁদের আলোও যেন খানিকটা সময়ের জন্য ম্লান হয়ে গিয়েছিল হাতিরঝিলে।', '2013-11-14 04:30:00'),
(12, '1710404136', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.\n', '2013-11-13 06:26:00'),
(13, '1735290485', 'fdfdfljkljkljlj', '2013-11-15 01:58:00'),
(14, '1735290485', 'fdfdfd', '2013-11-15 01:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fb_id` text NOT NULL,
  `accesstoken` text NOT NULL,
  `name` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fb_id`, `accesstoken`, `name`, `email`, `last_login`) VALUES
('1710404136', 'CAATixeMPhRQBADzwnPyTq1qXo3QJWtslIRFlY0KVQCMJFr5ZAUmmy597TUiGdjZAJxThSVdlkvF0HNeXTcKalvadQaxoJY3DfJQc0ZBIpHmVMbkkIjelSRzNQOK9jh4GKNRkCDldw1WuUSDMyMW5Vg7NDrEjCS9j9pqf1B6w1NRtJ012wYH', 'Konok Habibullah Araphat', 'cse08_konok@yahoo.com', '2013-11-24 04:33:59'),
('100001967917764', 'CAATixeMPhRQBAFPLdmufTLO53GBKwtqSRfZC1Mtt8KvCkypeZBxoWCm19YOrVWkmLhzd2MuZAZBLccKbD859ZA2gstFsnkhwTfgfIu1BnoqtlnMqJtojYlpoEdZAZBSm6OiIGXZBx2b7HXcqbi0Jok2UokO0AVRMN2tXjB9b6OdyVAiWEiZCJfhGl', 'Arnov Upito', '', '2013-11-12 06:14:48'),
('1735290485', 'CAATixeMPhRQBAPj0ZBNQ3yV2xHLIMF5liFUFS0fUX4xrT6M5MAsQy5FeFMUc8R3RH928UPoxRoZAZAs7SzpqQNlzQ7baSSJPskkIO4Vb4zssvzMt3GouUE8kzjvQnsyWidOSlocjpVCGUxiLnbgGkHwcOtB43xg11f3BQGZBZANZB1HQvjiovg', 'Tanbir Sagar', 'sagar_buet08@yahoo.com', '2013-11-15 02:02:40'),
('100000099079145', 'CAATixeMPhRQBAPDzoYbg6GnjHWYQxHbsGl5VLbgAMZAGkvZAxdWSKveB94uceY6NsmN44DBnvieEb7Spn722bDJgc28CZCEuaqnX4vZAdvnKzydxJzyU1FoS4ZBioizIyqCaQI7sOI8eq7f4ZBZBudZBj32kY0BlZA5h6ADN67ecZAZBFYMyT94CGLe', 'Tariqul Islam Isha', 'isha.facebook264662@gmail.com', '2013-11-19 23:55:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
