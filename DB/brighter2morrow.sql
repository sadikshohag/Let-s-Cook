-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 06:21 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brighter2morrow`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `html_summary` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `html_details` varchar(5000) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `users_id`, `title`, `sub_title`, `summary`, `html_summary`, `details`, `html_details`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 7, 'Mostafiz is a wonderful bowler', 'how did he do it', '', '<p>A wonderful wicket is taken by <strong>mostafizur rahman</strong> at SRH vs GL match. It''s really awesome.</p>', '', '<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, ', '2016-04-21 07:29:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 7, 'Algorithm Kothon', 'First Part of Algorithm', '', '<p>Life is symple, but if u want to make it clear then u have to learn algorithm if u really want it clear</p>', '', '<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n<p>There', '2016-04-21 08:00:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 7, 'Brothers Are gone', 'Where are they?', '', '', '', '', '2016-04-22 03:41:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 7, 'New Article test', 'New Article test sub', '', '<p>gfsdgsds sdgdsf</p>', '', '<p>sdf</p>', '2016-04-27 06:35:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>SQL is a standard language for accessing databases.</p>\r\n<p>Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.</p>', '', '<div class="w3-code notranslate htmlHigh"><span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="container"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="jumbotron"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h1<span style="color: mediumblue;">&gt;</span></span>My First Bootstrap Page<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h1<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; &nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Resize this responsive page to see the effect!<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="row"</span></span><span style="color: mediumblue;">&gt;</span></span><br /> &nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 1<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 2<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 3<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing el', '2016-04-27 06:43:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>SQL is a standard language for accessing databases.</p>\r\n<p>Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.</p>', '', '<div class="w3-code notranslate htmlHigh"><span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="container"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="jumbotron"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h1<span style="color: mediumblue;">&gt;</span></span>My First Bootstrap Page<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h1<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; &nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Resize this responsive page to see the effect!<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="row"</span></span><span style="color: mediumblue;">&gt;</span></span><br /> &nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 1<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 2<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 3<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing el', '2016-04-27 06:44:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>SQL is a standard language for accessing databases.</p>\r\n<p>Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.</p>', '', '<div class="w3-code notranslate htmlHigh"><span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="container"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="jumbotron"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h1<span style="color: mediumblue;">&gt;</span></span>My First Bootstrap Page<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h1<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; &nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Resize this responsive page to see the effect!<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="row"</span></span><span style="color: mediumblue;">&gt;</span></span><br /> &nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 1<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 2<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 3<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing el', '2016-04-27 06:45:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>SQL is a standard language for accessing databases.</p>\r\n<p>Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.</p>', '', '<div class="w3-code notranslate htmlHigh"><span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="container"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="jumbotron"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h1<span style="color: mediumblue;">&gt;</span></span>My First Bootstrap Page<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h1<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; &nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Resize this responsive page to see the effect!<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="row"</span></span><span style="color: mediumblue;">&gt;</span></span><br /> &nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 1<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 2<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 3<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing el', '2016-04-27 06:46:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>SQL is a standard language for accessing databases.</p>\r\n<p>Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.</p>', '', '<div class="w3-code notranslate htmlHigh"><span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="container"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="jumbotron"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h1<span style="color: mediumblue;">&gt;</span></span>My First Bootstrap Page<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h1<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; &nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Resize this responsive page to see the effect!<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="row"</span></span><span style="color: mediumblue;">&gt;</span></span><br /> &nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 1<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 2<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/p<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/div<span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>div<span style="color: red;"> class<span style="color: mediumblue;">="col-sm-4"</span></span><span style="color: mediumblue;">&gt;</span></span><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>h3<span style="color: mediumblue;">&gt;</span></span>Column 3<span style="color: brown;"><span style="color: mediumblue;">&lt;</span>/h3<span style="color: mediumblue;">&gt;</span></span> <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="color: brown;"><span style="color: mediumblue;">&lt;</span>p<span style="color: mediumblue;">&gt;</span></span>Lorem ipsum dolor sit amet, consectetur adipisicing el', '2016-04-27 06:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 7, '', '', '', '', '', '', '2016-04-27 06:47:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 7, 'Brothers Are gone', 'how did he do it', '', '<p>$queryInsertCategory = "INSERT INTO `articles_categories_mapping` (`id`, `article_id`, `category_id`, `created_at`) "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; . "VALUES (NULL, :articleID, :category', '', '<p>$queryInsertCategory = "INSERT INTO `articles_categories_mapping` (`id`, `article_id`, `category_id`, `created_at`) "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; . "VALUES (NULL, :articleID, :categoryID, ''" . date("Y-m-d h:i:s") . "'')";<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; try {<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $stmt = $this-&gt;conn-&gt;prepare($queryInsertCategory);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $stmt-&gt;execute(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '':articleID'' =&gt; "$articleID",<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '':categoryID'' =&gt; "$this-&gt;category"<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; );<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; } catch (PDOException $e) {<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; echo ''ERROR: '' . $e-&gt;getMessage();<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }</p>', '2016-04-27 07:17:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');</p>', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');</p>', '2016-04-27 07:19:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');</p>', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');</p>', '2016-04-27 07:21:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 7, 'Another New Article test', 'Another New Article test subTitle', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');</p>', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; header(''location:createArticle.php'');</p>', '2016-04-27 07:21:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 9, 'Test as a New user', 'Sub sititle for new user', '', '<p>THIS book is designed to help you make the most effective use of the Java&trade;<br />programming language and its fundamental libraries, java.lang, java.util,<br />and, to a lesser extent, java.util.concurrent and java.io. The book discusses<br />othe', '', '<p>THIS book is designed to help you make the most effective use of the Java&trade;<br />programming language and its fundamental libraries, java.lang, java.util,<br />and, to a lesser extent, java.util.concurrent and java.io. The book discusses<br />other libraries from time to time, but it does not cover graphical user interface<br />programming, enterprise APIs, or mobile devices.<br />This book consists of seventy-eight items, each of which conveys one rule.<br />The rules capture practices generally held to be beneficial by the best and most<br />experienced programmers. The items are loosely grouped into ten chapters, each<br />concerning one broad aspect of software design. The book is not intended to be<br />read from cover to cover: each item stands on its own, more or less. The items are<br />heavily cross-referenced so you can easily plot your own course through the book.<br />Many new features were added to the platform in Java 5 (release 1.5). Most of<br />the items in this book use these features in some way. The following table shows<br />you where to go for primary coverage of these features:</p>', '2016-04-28 05:25:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 9, 'Test as a New user', 'Sub sititle for new user', '', '<p>THIS book is designed to help you make the most effective use of the Java&trade;<br />programming language and its fundamental libraries, java.lang, java.util,<br />and, to a lesser extent, java.util.concurrent and java.io. The book discusses<br />othe', '', '<p>THIS book is designed to help you make the most effective use of the Java&trade;<br />programming language and its fundamental libraries, java.lang, java.util,<br />and, to a lesser extent, java.util.concurrent and java.io. The book discusses<br />other libraries from time to time, but it does not cover graphical user interface<br />programming, enterprise APIs, or mobile devices.<br />This book consists of seventy-eight items, each of which conveys one rule.<br />The rules capture practices generally held to be beneficial by the best and most<br />experienced programmers. The items are loosely grouped into ten chapters, each<br />concerning one broad aspect of software design. The book is not intended to be<br />read from cover to cover: each item stands on its own, more or less. The items are<br />heavily cross-referenced so you can easily plot your own course through the book.<br />Many new features were added to the platform in Java 5 (release 1.5). Most of<br />the items in this book use these features in some way. The following table shows<br />you where to go for primary coverage of these features:</p>', '2016-04-28 05:26:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 7, 'Java is a wonderful language', 'Most powerful data', '', '<p>THIS book is designed to help you make the most effective use of the Java&trade;<br />programming language and its fundamental libraries, java.lang, java.util,<br />and, to a lesser extent, java.util.concurrent and java.io. The book discusses<br />othe', '', '<p>THIS book is designed to help you make the most effective use of the Java&trade;<br />programming language and its fundamental libraries, java.lang, java.util,<br />and, to a lesser extent, java.util.concurrent and java.io. The book discusses<br />other libraries from time to time, but it does not cover graphical user interface<br />programming, enterprise APIs, or mobile devices.<br />This book consists of seventy-eight items, each of which conveys one rule.<br />The rules capture practices generally held to be beneficial by the best and most<br />experienced programmers. The items are loosely grouped into ten chapters, each<br />concerning one broad aspect of software design. The book is not intended to be<br />read from cover to cover: each item stands on its own, more or less. The items are<br />heavily cross-referenced so you can easily plot your own course through the book.<br />Many new features were added to the platform in Java 5 (release 1.5). Most of<br />the items in this book use these features in some way. The following table shows<br />you where to go for primary coverage of these features:</p>', '2016-04-28 05:29:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `articles_categories_mapping`
--

CREATE TABLE `articles_categories_mapping` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles_categories_mapping`
--

INSERT INTO `articles_categories_mapping` (`id`, `article_id`, `category_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 4, 5, '2016-04-13 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 7, 5, '2016-04-27 06:45:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 8, 5, '2016-04-27 06:46:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 9, 5, '2016-04-27 06:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 10, 1, '2016-04-27 06:47:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 12, 3, '2016-04-27 07:19:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 13, 3, '2016-04-27 07:21:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 14, 3, '2016-04-27 07:21:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 15, 1, '2016-04-28 05:25:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 16, 1, '2016-04-28 05:26:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 17, 1, '2016-04-28 05:29:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `articles_images_mapping`
--

CREATE TABLE `articles_images_mapping` (
  `id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL,
  `images_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles_images_mapping`
--

INSERT INTO `articles_images_mapping` (`id`, `articles_id`, `images_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(3, 17, 2, '2016-04-28 05:29:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `articles_menu_mapping`
--

CREATE TABLE `articles_menu_mapping` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `left` varchar(255) NOT NULL,
  `right` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `left`, `right`, `parent_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Book', '', '', 0, '2016-04-05 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Structure Programming', '', '', 1, '2016-04-05 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Object Oriented Programming', '', '', 1, '2016-04-20 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'ANSI C', '', '', 2, '2016-04-30 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Science', '', '', 0, '2016-05-19 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Political', '', '', 0, '2016-07-21 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Sports', '', '', 1, '2016-04-12 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'sdfd', '', '', 0, '2016-04-28 03:26:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'National', '', '', 6, '2016-04-28 03:26:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', '', '', 0, '2016-04-28 04:55:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Min Value', '', '', 4, '2016-04-28 06:20:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `extention` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `image_name`, `extention`, `size`, `created_at`, `modified_at`, `deleted_at`) VALUES
(2, 7, '1461813911_Prothm-alo_eatlapps.jpg', 'jpg', '131853', '0000-00-00 00:00:00', '2016-04-28 05:50:30', '0000-00-00 00:00:00'),
(5, 11, '1461520593_Prothm-alo_eatlapps.jpg', 'jpg', '144961', '2016-04-24 07:51:34', '2016-04-24 07:56:33', '0000-00-00 00:00:00'),
(6, 11, '1461520593_Prothm-alo_eatlapps.jpg', 'jpg', '144961', '2016-04-24 07:56:25', '2016-04-24 07:56:33', '0000-00-00 00:00:00'),
(7, 11, '1461520593_Prothm-alo_eatlapps.jpg', 'jpg', '144961', '2016-04-24 07:56:33', '2016-04-24 07:56:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `articles_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `left` varchar(255) NOT NULL,
  `right` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `personal_phone` int(11) DEFAULT NULL,
  `home_phone` int(11) DEFAULT NULL,
  `office_phone` int(11) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `personal_phone`, `home_phone`, `office_phone`, `current_address`, `permanent_address`, `profile_pic`, `created_at`, `modified_at`, `deleted_at`, `modified_by`) VALUES
(1, 7, 'Md. Anwarul Islam', 'Abir', 123456, 3432, 123456, '  Sutrapur, Dhaka', 'Savar, Dhaka', '1461815430_02.jpg', NULL, '2016-04-28 05:50:30', NULL, NULL),
(2, 8, 'Sumon ', 'Mahmud', 0, 0, 0, '', '', '1460872453download.jpg', NULL, '2016-04-27 08:38:11', NULL, 8),
(3, 9, 'Sumon Mahmud', 'test', 234324, 324240, 9080980, '    ', '', '1460874921_bitm.png', NULL, '2016-04-17 08:35:21', NULL, NULL),
(5, 11, 'Test', 'Abir', 123456, 123, 123456, 'Sutrapur, Dhaka', '123', '', '2016-04-24 07:45:40', '2016-04-24 07:56:33', NULL, NULL),
(6, 11, 'Test', 'Abir', 123456, 123, 123456, 'Sutrapur, Dhaka', '123', '', '2016-04-24 07:51:34', '2016-04-24 07:56:33', NULL, NULL),
(7, 11, 'Test', 'Abir', 123456, 123, 123456, 'Sutrapur, Dhaka', '123', '', '2016-04-24 07:56:25', '2016-04-24 07:56:33', NULL, NULL),
(8, 11, 'Test', 'Abir', 123456, 123, 123456, 'Sutrapur, Dhaka', '123', '', '2016-04-24 07:56:33', '2016-04-24 07:56:33', NULL, NULL),
(9, 12, 'fname', 'lname', 123, 123, 123, 'cadd', 'padd', 'pic', '2016-04-06 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_group_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL,
  `modified_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_active` int(11) DEFAULT '0',
  `complete_profile` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `unique_id`, `username`, `password`, `email`, `is_admin`, `modified_at`, `created_at`, `deleted_at`, `is_active`, `complete_profile`) VALUES
(7, 1, '57191ab28ad3f', 'admin', 'test', 'test@test.com', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 1, 1),
(8, 0, '57191ac6a3e28', 'abc', 'abc', 'test@best.com', 0, '0000-00-00 00:00:00', '2016-04-17 07:53:30', NULL, 1, 1),
(9, 0, '57191ad0de5a1', 'sumonmhd', 'a123ab', 'sumon@gmail.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 1, 1),
(10, 1, '57132bf8644ac', 'xyz', 'xyz123', 'xyz@xyz.com', 0, '0000-00-00 00:00:00', '2016-04-17 08:23:52', NULL, 1, 0),
(11, 0, '571360270acc9', 'abcdefgh', '123', 'a@b.com', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0, 0),
(12, 0, '571a29c9e6fe8', 'asdf', 'asdf1234', 'a@gnn.com', 0, '0000-00-00 00:00:00', '2016-04-22 03:40:25', NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`users_id`);

--
-- Indexes for table `articles_categories_mapping`
--
ALTER TABLE `articles_categories_mapping`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_PerOrders` (`article_id`),
  ADD KEY `fk_article_categories` (`category_id`);

--
-- Indexes for table `articles_images_mapping`
--
ALTER TABLE `articles_images_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ar_img` (`articles_id`),
  ADD KEY `fk_im_ar` (`images_id`);

--
-- Indexes for table `articles_menu_mapping`
--
ALTER TABLE `articles_menu_mapping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_article_menu` (`article_id`),
  ADD KEY `fk_menu_map` (`menu_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `articles_categories_mapping`
--
ALTER TABLE `articles_categories_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `articles_images_mapping`
--
ALTER TABLE `articles_images_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `articles_menu_mapping`
--
ALTER TABLE `articles_menu_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `articles_categories_mapping`
--
ALTER TABLE `articles_categories_mapping`
  ADD CONSTRAINT `fk_PerOrders` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `fk_article_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `articles_images_mapping`
--
ALTER TABLE `articles_images_mapping`
  ADD CONSTRAINT `fk_ar_img` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `fk_im_ar` FOREIGN KEY (`images_id`) REFERENCES `images` (`id`);

--
-- Constraints for table `articles_menu_mapping`
--
ALTER TABLE `articles_menu_mapping`
  ADD CONSTRAINT `fk_article_menu` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `fk_menu_map` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
