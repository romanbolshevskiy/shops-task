-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2018 at 12:52 PM
-- Server version: 5.5.45
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shops-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id_c` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_mc` int(30) NOT NULL,
  `is_recommended` int(112) NOT NULL DEFAULT '0',
  `trailer` varchar(100) NOT NULL,
  `video` text NOT NULL,
  `url` varchar(300) NOT NULL,
  `price` int(100) NOT NULL,
  `id_t` int(11) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id_c`, `name`, `description`, `id_mc`, `is_recommended`, `trailer`, `video`, `url`, `price`, `id_t`) VALUES
(2, 'html-css для початківця', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 0, 1, 'https://www.youtube.com/embed/qEYoy3MDY7I', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'html-css-dlya-pochatkivcya', 134, 20),
(4, 'php1', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"', 37, 1, 'https://www.youtube.com/embed/qEYoy3MDY7I', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'php1', 90, 19),
(5, 'Node js урокі', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 0, 1, 'https://www.youtube.com/embed/qEYoy3MDY7I', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'node-js-uroki', 333, 20),
(6, 'Node js example', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 0, 1, 'https://www.youtube.com/embed/qEYoy3MDY7I', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'node-js-example', 999, 0),
(7, 'dfgchgf', 'dfhcdfhfgh', 0, 1, 'https://www.youtube.com/embed/C732qODMQOE', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'dfgchgf', 334, 20),
(8, 'last', 'waeytdufydu6', 37, 1, 'https://www.youtube.com/embed/C732qODMQOE', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'last', 3344, 20),
(9, 'coursshrtdh', 'agrtehtrthhrth', 0, 1, 'https://www.youtube.com/embed/C732qODMQOE', 'https://www.youtube.com/embed/ehLJZUf1iMo?list=PLPSKPqKvuCibaiLM7oOpfbOZz9pkUINRl', 'coursshrtdh', 78, 19);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `date`) VALUES
(1, 'igor', 'trakakakakak', '0000-00-00 00:00:00'),
(6, 'teach', 'fhgj', '2017-11-11 18:11:42'),
(9, 'teach', 'jhnkh', '2017-11-11 18:11:25'),
(12, 'teach', 'hgjg', '2017-11-11 18:11:58'),
(13, 'teach', 'bhbh', '2017-11-11 18:11:09'),
(22, 'teach', 'jkhk', '2017-11-11 19:11:08'),
(23, 'teach', 'llllll', '2017-11-11 19:11:11'),
(24, 'teach', 'njhgjj', '2017-11-11 19:11:17'),
(25, 'teach', 'nnnn', '2017-11-11 19:11:20'),
(26, 'teach20', 'last message', '2017-11-11 19:11:35'),
(27, 'teach', 'lololl', '2017-11-11 19:11:52'),
(28, 'teach20', 'roman', '2017-11-11 20:11:39'),
(29, 'teach20', 'roman', '2017-11-11 20:11:55'),
(30, 'teach', 'poland', '2017-11-11 20:11:02'),
(31, 'teach', 'ddfgdf', '2017-11-11 21:11:01'),
(32, 'teach', 'tralalala', '2017-11-11 21:11:11'),
(33, 'teach20', 'hello', '2017-11-11 21:11:25'),
(34, 'teach', 'івавіа', '2017-11-11 22:11:29'),
(35, 'teach', 'зддд', '2017-11-11 22:11:41'),
(36, 'teach', 'ромка', '2017-11-11 22:11:30'),
(37, 'teach', 'льь', '2017-11-11 22:11:04'),
(38, 'teach', 'аіваві', '2017-11-11 22:11:22'),
(39, 'teach', 'чмвасчмвасчм', '2017-11-11 22:11:26'),
(40, 'teach', 'аввава', '2017-11-11 22:11:03'),
(41, 'none', 'ffhfgh', '2017-11-14 22:11:40'),
(42, 'teach', 'hello', '2017-11-14 22:11:28'),
(43, 'teach', 'vdcxvdc', '2017-11-30 21:11:24'),
(44, 'rom', 'fffffffffff', '2018-01-10 00:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id_shop` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `budni` varchar(32) NOT NULL DEFAULT 'пн,вт,ср,чт,пт',
  `hour_start_b` int(11) NOT NULL,
  `hour_end_b` int(11) NOT NULL,
  `saturday` varchar(32) NOT NULL DEFAULT 'сб',
  `hour_start_sat` int(11) NOT NULL,
  `hour_end_sat` int(11) NOT NULL,
  `sunday` varchar(32) NOT NULL DEFAULT 'нд',
  `hour_start_sunday` int(11) NOT NULL,
  `hour_end_sunday` int(11) NOT NULL,
  PRIMARY KEY (`id_shop`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id_shop`, `name`, `budni`, `hour_start_b`, `hour_end_b`, `saturday`, `hour_start_sat`, `hour_end_sat`, `sunday`, `hour_start_sunday`, `hour_end_sunday`) VALUES
(1, 'shop1', 'пн,вт,ср,чт,пт', 10, 19, 'сб', 9, 14, 'нд', 0, 0),
(2, 'shop2', 'пн,вт,ср,чт,пт', 9, 18, 'сб', 10, 15, 'нд', 10, 15),
(3, 'shop3', 'пн,вт,ср,чт,пт', 8, 18, 'сб', 10, 14, 'нд', 10, 12),
(4, 'shop4', 'пн,вт,ср,чт,пт', 9, 19, 'сб', 10, 14, 'нд', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
