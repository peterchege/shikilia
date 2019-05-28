-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 04:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shikilia`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` longtext NOT NULL,
  `last_name` longtext NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `others` varchar(225) NOT NULL,
  `fingerprint` blob NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(140) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout_time` time NOT NULL,
  `state` varchar(50) NOT NULL,
  `checkout_status` varchar(100) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `weight_quantity` varchar(100) NOT NULL,
  `shelf_number` varchar(100) NOT NULL,
  `credit_note_status` mediumtext NOT NULL,
  `credit_note_available` mediumtext NOT NULL,
  `estimated_checkout_time` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `phone_number`, `id_number`, `others`, `fingerprint`, `category`, `description`, `checkin_date`, `checkout_date`, `checkin_time`, `checkout_time`, `state`, `checkout_status`, `barcode`, `payment_status`, `amount_paid`, `weight_quantity`, `shelf_number`, `credit_note_status`, `credit_note_available`, `estimated_checkout_time`) VALUES
(1, 'a', 'b', '2', '1', 'z', '', 'electronics', 'hjg', '2018-04-13', '2018-04-13', '07:45:00', '18:33:00', 'fragile', 'cleared', 'p6gkzine ', 'paid', '250', '4', '2', 'customer has credit note', '2 hours', '5'),
(3, 'io', 'oi', 'ui', 'o', 'uo', '', 'parcel', 'uio', '2018-04-20', '0000-00-00', '07:59:00', '00:00:00', 'fragile', '', 'lgeh4wjk ', 'paid', '65', '7', '4', '', '', '5'),
(4, 'peter', 'mungai', '0790199662', '31428729', 'null', '', 'general item', 'black backpack.', '2018-04-18', '2018-04-18', '11:52:00', '16:31:00', 'not fragile', 'cleared', 'lix09gam ', 'paid', '50', '3', '2', 'null', 'null', '50'),
(6, 'joan', 'odi', '0723357411', '25162070', 'null', '', 'parcel', 'cloths', '2018-04-18', '2018-04-18', '16:49:00', '18:03:00', 'not fragile', '', '2i77c5ku ', 'paid', '150', '17', '28', 'null', 'null', '2'),
(7, 'muthui', 'samuel', '0724504327', '26379283', 'null', '', 'parcel', 'envelop, ', '2018-04-20', '0000-00-00', '10:50:00', '12:32:00', 'not fragile', 'cleared', 'sjshf6df ', 'paid', '50', '1', '4', 'null', 'null', '2'),
(8, 'Naomi ', 'chelal', '0702495185', '30387187', '0708004912', '', 'general item', 'pillow covers ', '2018-04-20', '2018-06-26', '14:43:00', '10:07:00', 'not fragile', 'cleared', '6m2ewco8 ', 'paid', '1160', '3', '24', 'null', 'null', '2'),
(9, 'patric', 'audhimbo', '0726792832', '24106259', 'null', '', 'electronics', 'bag with laptop', '2018-04-23', '2018-04-23', '15:16:00', '16:16:00', 'not fragile', 'cleared', 'm2m9tcbe ', 'paid', '100', '1', '2', 'null', 'null', '1 hour'),
(10, 'jonah', 'mwema', '0728075597', '33501212', 'null', '', 'general item', 'gas, box hjas house holds', '2018-04-26', '2018-05-02', '20:39:00', '11:35:00', 'not fragile', 'cleared', 'najxn2h8 ', 'paid', '1200', '20', '3', 'null', 'null', '2'),
(11, 'jesse', 'njoroge', '0713659136', '23098103', 'null', '', 'general item', 'black bag, ', '2018-04-27', '0000-00-00', '15:22:00', '00:00:00', 'not fragile', '', 'l4c0kg73 ', 'paid', '100', '5', '33', '', '', '2'),
(13, 'faith', 'maina', '0741638366', '35870482', 'null', '', 'general item', 'farm products,cotrhs and laptop', '2018-04-27', '2018-04-27', '15:32:00', '17:17:00', 'not fragile', '', '4hof5fqm ', 'paid', '200', '31', '38', 'null', 'null.', '2'),
(14, 'zuhurah', 'said', '0799315252', '28143816', 'zuhurz 0720610359', '', 'general item', 'samll gas ', '2018-04-30', '2018-04-30', '09:25:00', '18:44:00', 'not fragile', 'cleared', '78peb8y0 ', 'paid', '150', '7', '10', 'null', 'null', 'whole day'),
(15, 'kama', 'stv', '0720017328', '28577121', 'tfy', '', 'wares', 'black bag, carring clotrhgs', '2018-05-02', '0000-00-00', '22:13:00', '00:00:00', 'not fragile', '', 'kh72oysf', 'paid', '100', '2', '6', '', '', '2'),
(17, 'jugua', 'hope', '0711466212', '28089612', 'null', '', 'parcel', 'clothes', '2018-05-02', '0000-00-00', '10:00:00', '00:00:00', 'fragile', '', '2uhkm82p ', 'paid', '100', '2', '8', '', '', '2'),
(19, 'r', 'kairu', '321', '123', 'null', '', 'electronics', 'laptop', '2018-05-02', '0000-00-00', '22:55:00', '00:00:00', 'fragile', '', '1sd7stxu ', 'paid', '200', '3', '4', '', '', '2'),
(20, 'gvd', 'hh', '97534579', '267090998', 'null', '', 'wares', 'clothes', '2018-05-03', '2018-05-03', '13:19:00', '13:32:00', 'not fragile', 'cleared', 'fxtx3403 ', 'paid', '100', '2', '19', 'null', 'null', '2hours'),
(21, 'rose', 'rose', '123', '123', 'josephine, 07229760194', '', 'general item', 'book', '2018-05-05', '0000-00-00', '08:21:00', '00:00:00', 'not fragile', '', '1hvn7z16 ', 'not paid', '150', '1', '1', '', '', 'whoe day'),
(23, 'rose', 'rose', '0722321799', '123', 'ridder', '', 'general item', 'book', '2018-05-12', '0000-00-00', '08:26:00', '00:00:00', 'not fragile', '', 'lfkr3jqy ', 'not paid', '25', '1', '2', '', '', '1'),
(24, '', '', '', '', '', '', '', '', '0000-00-00', '2018-05-05', '00:00:00', '12:58:00', '', 'not cleared', '', 'not paid', '115', '', '', 'customer has credit note', 'null', ''),
(26, 'david', 'james', '0723058360', '24943233', 'kimani', '', 'general item', 'a blue bag, carring clotrhs', '2018-05-05', '0000-00-00', '16:45:00', '00:00:00', 'not fragile', '', '2soy03wj ', 'paid', '75', '1', '3', '', '', '3'),
(27, 'laban', 'ndmna', '0701076225', '22749280', 'nul;l', '', 'general item', 'brown bag', '2018-05-07', '0000-00-00', '14:33:00', '18:24:00', 'not fragile', 'not cleared', '8axw21ud ', 'paid', '4', '5', '4', 'customer has credit note', '30 minus credit note. ', '7'),
(29, 'ken', 'muiruri', '4321', '1234', 'chege, 987', '', 'electronics', 'were', '2018-05-07', '0000-00-00', '21:03:00', '00:00:00', 'not fragile', '', 'eczni0aa ', 'paid', '200', '3', '4', '', '', '2'),
(30, 'peter', 'njehia', '0790199662', '31428729', 'null', '', 'electronics', 'laptop, blact in color.', '2018-05-08', '2018-05-08', '18:06:00', '22:18:00', 'fragile', '', 'plnucwqj ', 'paid', '250', '4', '9', 'null', 'null', '2'),
(31, 'muthui', 'MUTHUI', '21', '12', 'KAMAU JAMES, 0725127972', '', 'electronics', 'PHONE, INFINIX BLUCK IN COLOR', '2018-05-12', '0000-00-00', '15:31:00', '17:18:00', 'fragile', 'cleared', 'r2mls4qf ', 'paid', '0100', '1', '3', 'null', 'null\r\n\r\n', '1'),
(33, 'KAMAU', 'kamau', '321', '123', 'null', '', 'general item', 'CAKE', '2018-05-12', '0000-00-00', '15:40:00', '00:00:00', 'not fragile', '', 'hzybex1a ', 'not paid', '0', '2', '1', '', '', '1'),
(34, 'glads', 'mwendwa', '0715425042', '27922048', 'wachiri', '', 'general item', 'cloths and school uniform', '2018-05-22', '2018-05-15', '11:14:00', '14:54:00', 'not fragile', 'cleared', 'sm9z7eza ', 'paid', '177', '20', '4', 'null', 'null', '2'),
(35, 'knight', 'tabitha', '0790223645', '33946217', 'unll', '', 'wares', 'cloths and a baby bag', '2018-05-15', '2018-05-15', '16:38:00', '20:44:00', 'not fragile', 'cleared', 'nf6eb8u6', 'paid', '200', '4', '45', 'null', 'null', '2'),
(36, 'dianah', 'muiruri', 'no phone number', '28046861', 'null', '', 'general item', 'cloths and farm products', '2018-05-17', '2018-05-17', '00:13:06', '17:13:00', 'not fragile', 'cleared', 'h6uow9r6 ', 'not paid', '250', '24', '24', 'null', 'null', '6'),
(37, 'tabitha ', 'chege', '0724123694', '4582697', 'null', '', 'general item', ' cloths', '2018-05-17', '0000-00-00', '00:14:00', '00:00:00', 'not fragile', '', '  qbjvxfp7 ', 'not paid', '0', '10', '26', '', '', '3'),
(38, 'rose  siz', 'rose', '0722', '0722', 'null', '', 'general item', 'carton ', '2018-05-17', '2018-05-17', '16:06:00', '18:30:00', 'not fragile', 'cleared', '4b9kzrv4 ', 'paid', '58', '5', '21', 'null', 'null', '2'),
(40, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '15:11:00', 'fragile', 'cleared', '6ttzawfl ', 'paid', 'rocker', '0', '6', 'null', 'null', 'any time '),
(50, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '15:47:00', 'fragile', 'cleared', '1481yhv7 ', 'paid', 'rocker', '0', '6', 'null', 'null\r\n', 'any time '),
(52, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '2018-05-30', '16:49:00', '13:01:00', 'fragile', 'cleared', 'g6pg3qbo ', 'paid', 'rocker', '0', '6', 'null', 'null', 'any time '),
(54, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', '1powggtw ', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(60, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '2018-05-29', '16:49:00', '11:42:00', 'fragile', 'cleared', '44tj75ry ', 'paid', 'rocker', '0', '6', 'null', 'null', 'any time '),
(62, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'pz06lmsv', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(64, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'c3i3nw1l ', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(66, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'skzxibn0 ', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(68, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'cjoilhq3', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(70, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'a0gti7mz ', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(72, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'bqg70qne', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(74, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '12:26:00', 'fragile', 'cleared', '2jk5nr8r ', 'paid', 'rocker', '0', '6', 'null', 'null\r\n', 'any time '),
(76, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '2018-05-23', '16:49:00', '15:46:00', 'fragile', 'cleared', 'gb1jgamt ', 'paid', 'rocker', '0', '6', 'null', 'null', 'any time '),
(78, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'ocuz687x ', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(80, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', '7drw8um1', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(82, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', 'molxktv7 ', 'paid', 'rocker', '0', '6', '', '', 'any time '),
(84, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-17', '2018-05-21', '16:49:00', '17:37:00', 'fragile', 'cleared', 'j2jrsynf ', 'paid', 'rocker', '0', '6', 'null', 'null\r\n', 'any time '),
(86, 'locker 6', 'locker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '2018-05-22', '17:10:00', '17:14:00', 'fragile', 'cleared', 's2va1a1t ', 'paid', '0', '1', '6', 'null', 'null', 'any time'),
(88, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'p83hgl2p', 'paid', '0', '1', '6', '', '', 'any time'),
(90, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '2018-05-30', '17:19:00', '13:06:00', 'fragile', 'cleared', 'cugf6unt ', 'paid', '0', '1', '6', 'null', 'null', 'any time'),
(92, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'g2m18iyc ', 'paid', '0', '1', '6', '', '', 'any time'),
(94, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'gzvjghl2 ', 'paid', '0', '1', '6', '', '', 'any time'),
(96, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'c9u6f0bo ', 'paid', '0', '1', '6', '', '', 'any time'),
(98, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'cu8w7ld0 ', 'paid', '0', '1', '6', '', '', 'any time'),
(100, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'qfbl9lve ', 'paid', '0', '1', '6', '', '', 'any time'),
(102, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', '1efjee6q', 'paid', '0', '1', '6', 'null', 'null', 'any time'),
(104, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'm6ep7plv ', 'paid', '0', '1', '6', '', '', 'any time'),
(106, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '00:00:00', 'fragile', '', 'o9scne0r ', 'paid', '0', '1', '6', '', '', 'any time'),
(108, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:19:00', '14:19:00', 'fragile', 'cleared', 'pnx7oeeq ', 'paid', '0', '1', '6', 'null', 'null', 'any time'),
(110, 'loker 6', 'locker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices ', '2018-05-17', '0000-00-00', '17:33:00', '00:00:00', 'fragile', '', 'brzlrwc1 ', 'paid', '0', '1', '6', '', '', 'anytime'),
(113, 'rocker 6', 'rocker 6', '0735890940', '0735890940', 'null', '', 'electronics', 'digital devices', '2018-05-18', '0000-00-00', '12:43:00', '00:00:00', 'fragile', '', ': 6x5e92h8', 'paid', '0', '0', '6', '', '', 'any time'),
(114, 'michael', 'kamau', '1234569870', '0458699', 'null', '', 'general item', 'bag', '2018-05-18', '2018-05-12', '13:21:00', '18:50:00', 'not fragile', 'cleared', 'hzllu5st', 'paid', '0120', '0', '14', 'null', 'null', '1'),
(115, 'kena', 'muiruri', '0722499723', '29300468', 'null', '', 'electronics', 'laptops', '2018-05-18', '0000-00-00', '21:08:00', '00:00:00', 'fragile', '', 'i379k9kq ', 'paid', '250', '5', '11', '', '', '1 day'),
(116, 'delicia ', 'cakes', '0726642472', '123', 'customer', '', 'general item', 'cake', '2018-05-19', '0000-00-00', '00:09:40', '00:00:00', 'fragile', '', 'vvabyz8h ', 'paid', '55', '1', '2', '', '', '2'),
(118, 'ken', 'ken', '321', '123', 'null', '', 'electronics', 'laptop', '2018-05-19', '2018-05-19', '08:20:00', '12:55:00', 'fragile', 'cleared', 's17c9nws ', 'not paid', '390', '5', '4', 'null', 'null', '3'),
(119, 'denis', 'kotikash', '0710985047', '27948759', 'cate thuo, 0732344892', '', 'general item', 'atm', '2018-05-19', '0000-00-00', '16:32:00', '00:00:00', 'not fragile', '', '1emkkxla ', 'paid', '300', '1', '2', '', '', '3'),
(124, 'tabby', 'chege', '6695', '45869524', 'null', '', 'general item', ',mf', '2018-05-21', '2018-05-22', '08:32:00', '17:13:00', 'not fragile', 'cleared', 'p5gpddse ', 'paid', '0', '0', '6', 'null', 'null', '1'),
(128, 'emmanuel', 'ring', '0728446892', 'r00450271', 'null', '', 'general item', 'carrier bag', '2018-05-21', '0000-00-00', '16:26:00', '00:00:00', 'not fragile', '', '64ke4ous', 'paid', '50', '7.25', '19', '', '', '1'),
(130, 'locker ', 'locker 6', '21', '12', 'any', '', 'general item', 'mazqpro', '2018-05-21', '2018-05-22', '17:38:00', '14:04:00', 'fragile', 'cleared', 'tvfbrs4l', 'paid', '0', '1', '6', 'null', 'NULL', 'electro0nic'),
(132, 'kmau', 'James ', '0725127972', '27136346', 'sam muthui, ', '', 'electronics', 'phone, infix', '2018-05-21', '2018-05-21', '18:13:00', '18:28:00', 'fragile', 'cleared', 'rz362z7k ', 'paid', '50', '1', '2', 'null', 'null\r\n', '2'),
(134, 'muthui', 'samule', '123', '21', 'sam muthui, ', '', 'general item', 'black bag', '2018-05-21', '0000-00-00', '18:29:00', '00:00:00', 'fragile', '', '6tfntl3k ', 'not paid', '25', '1', '2', '', '', '1'),
(135, 'rocker 6', 'rocker 6', '0', '0', 'null', '', 'electronics', 'digital device', '2018-05-22', '0000-00-00', '17:20:00', '00:00:00', 'fragile', '', '48opfed4', 'paid', '0', '0', '6', '', '', 'anytime'),
(136, 'LENNY ', 'LENNY', '0722730290', '33181631', 'null', '', 'general item', 'STUND, ', '2018-05-23', '0000-00-00', '09:41:00', '00:00:00', 'not fragile', '', 'lt0oj63k', 'not paid', '250', '7', '3', '', '', 'WHOLE DAY'),
(138, 'WAHU', 'nganga', '0715824388', '29853732', 'sylvor', '', 'general item', 'cake', '2018-05-23', '2018-05-23', '10:30:00', '15:36:00', 'not fragile', 'cleared', 'p3yavkx8 ', 'paid', '255', '7', '4', 'null', 'null', '2'),
(140, 'locker 6', 'locker 6', '321', '123', 'null', '', 'electronics', 'electronic', '2018-05-23', '0000-00-00', '17:30:00', '00:00:00', 'fragile', '', 'qz28vblu ', 'paid', '0', '1', '6', '', '', 'any time'),
(142, 'locker 6', 'locker 6', '321', '123', 'null', '', 'electronics', 'electronic', '2018-05-23', '0000-00-00', '17:30:00', '00:00:00', 'fragile', '', '7hgkx8de ', 'paid', '0', '1', '6', '', '', 'any time'),
(143, 'elaija ', 'muindi', '0792652184', '33977095', 'makuri, 0741174427', '', 'general item', 'mug.', '2018-05-25', '0000-00-00', '09:13:00', '00:00:00', 'not fragile', '', '848tpeb7 ', 'paid', '50', '1', '1', '', '', '2'),
(144, 'richard', 'customer', '0715489639', '2525589', 'null', '', 'general item', 'cake', '2018-05-25', '0000-00-00', '12:52:00', '00:00:00', 'fragile', '', '8n2s40gp', 'not paid', '0', '1', '15', '', '', '2'),
(146, 'locker 6', 'rocker 6', '321', '123', 'any', '', 'electronics', 'digital devices ', '2018-05-26', '0000-00-00', '13:34:00', '00:00:00', 'fragile', '', 'fo2yu1jb', 'paid', 'rocker', '1', '6', '', '', 'any time'),
(148, 'gatwach', 'nyuon', '0702744000', '3466227', 'null', '', 'general item', 'shoes, clothes and computer', '2018-05-26', '0000-00-00', '16:58:00', '20:01:00', 'fragile', 'cleared', 'm7zgp4k7', 'paid', '300', '20', '8', 'null', 'null', '2'),
(149, 'Dominic ', 'karanja', '20204117', '0721789880', 'null', '', 'general item', 'basic stuff', '2018-05-28', '0000-00-00', '16:20:00', '00:00:00', 'not fragile', '', 'k3mqa1hc ', 'not paid', '0', '10', '3', '', '', '2'),
(150, 'sussan', 'sussan', '075689336947', '125589663', 'null', '', 'general item', ' percel', '2018-05-29', '0000-00-00', '13:07:00', '00:00:00', 'not fragile', '', ' 58o5fydo', 'not paid', '0', '0', '17', '', '', '1'),
(152, 'YVONNE', 'wanjiru', '0728824514', '26415310', 'null', '', 'general item', 'shoes', '2018-05-29', '2018-05-29', '14:27:00', '16:02:00', 'not fragile', 'cleared', 'bgmoq45z', 'paid', '100', '13', '1', 'null', 'NULL', '2'),
(154, 'kena', 'kena', '0731245578', '2211433', 'null', '', 'general item', 'cake', '2018-05-29', '0000-00-00', '15:20:00', '00:00:00', 'fragile', '', 'pf257z0h ', 'not paid', '0', '2', '10', '', '', '12'),
(156, 'YVONNE', 'wanjiru', '0728824514', '26415310', 'null', '', 'wares', 'shoes', '2018-05-29', '2018-05-30', '19:21:00', '10:38:00', 'fragile', 'cleared', '7k4l7k8y ', 'paid', '0150', '2', '1', 'null', 'null', 'overnight'),
(158, 'jb', 'jb', '0737333953', '29350653', 'null', '', 'wares', 'books', '2018-05-29', '0000-00-00', '19:34:00', '00:00:00', 'fragile', '', '6rw0pp5v ', 'paid', '400', '1', '3', '', '', '2'),
(159, 'collis', 'makau', '0720870156', '25084115', 'null', '', 'general item', 'packing bags', '2018-05-30', '0000-00-00', '12:51:00', '00:00:00', 'not fragile', '', 'k2w21qg5 ', 'paid', '100', '1', '3', '', '', '2'),
(161, '2', 'ngana', '0715824388', '9853732', 'null', '', 'general item', 'stands', '2018-05-30', '0000-00-00', '14:09:00', '00:00:00', 'fragile', '', 'h9ti1o0e ', 'not paid', '0', '02', '5', '', '', '2'),
(163, 'hellen', 'kimnto', '0721977554', '23594045', 'wahu nganga, 0715824388', '', 'general item', 'cake dummies ', '2018-05-30', '0000-00-00', '15:36:00', '00:00:00', 'not fragile', '', 'qj7iugi4 ', 'paid', '50', '1', '2', '', '', '2'),
(164, 'rocker 6', 'rocker 6', '0735890940', '123', 'null', '', 'electronics', 'digital devices', '2018-05-30', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', ' rt35z2zm ', 'paid', '0', '0', '6', '', '', 'any time'),
(170, 'rocker 6', 'rocker 6', '0735890940', '123', 'null', '', 'electronics', 'digital devices', '2018-05-30', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', '  dfcdhiai', 'paid', '0', '0', '6', '', '', 'any time'),
(172, 'rocker 6', 'rocker 6', '0735890940', '123', 'null', '', 'electronics', 'digital devices', '2018-05-30', '0000-00-00', '16:49:00', '00:00:00', 'fragile', '', '  r4f46jq0 ', 'paid', '0', '0', '6', '', '', 'any time'),
(173, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '00:00:00', 'fragile', '', '8t0gf9j4 ', 'paid', '0', '1', '6', '', '', 'any time'),
(175, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '14:29:00', 'fragile', 'cleared', 'i623yfhp ', 'paid', '0', '1', '6', 'null', 'null', 'any time'),
(177, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '00:00:00', 'fragile', '', '2drhlxii ', 'paid', '0', '1', '6', '', '', 'any time'),
(179, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '00:00:00', 'fragile', '', '242nifpw ', 'paid', '0', '1', '6', '', '', 'any time'),
(181, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '00:00:00', 'fragile', '', '57urv2dh ', 'paid', '0', '1', '6', '', '', 'any time'),
(183, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '00:00:00', 'fragile', '', 'hh3305yl ', 'paid', '0', '1', '6', '', '', 'any time'),
(185, 'locker 6', 'rocker 6', '0721177507', '6', 'any', '', 'electronics', 'braclet', '2018-05-31', '0000-00-00', '15:04:00', '00:00:00', 'fragile', '', '5sity4nt ', 'paid', '0', '1', '6', '', '', 'any time'),
(187, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'braclet', '2018-05-31', '2018-06-06', '15:13:00', '14:19:00', 'fragile', 'cleared', 'm6bvl25k ', 'paid', '0', '0', '6', 'null', 'null', 'any time'),
(189, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'braclet', '2018-05-31', '2018-06-01', '15:13:00', '14:12:00', 'fragile', 'cleared', 'aumpbmx4 ', 'paid', '0', '0', '6', 'null', 'null', 'any time'),
(191, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'dycfww9d ', 'paid', '0', '0', '6', '', '', 'any time'),
(193, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'f3vfbk3g ', 'paid', '0', '0', '6', '', '', 'any time'),
(195, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '2018-06-08', '15:13:00', '13:08:00', 'fragile', 'cleared', 'cmxak53v ', 'paid', '0', '0', '6', 'null', 'null', 'any time'),
(197, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '2018-06-15', '15:13:00', '19:45:00', 'fragile', 'cleared', '2jw3uk7r  ', 'paid', '0', '0', '6', 'null', 'null', 'any time'),
(199, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', '3t5lasxh ', 'paid', '0', '0', '6', '', '', 'any time'),
(201, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'i8e0oxig ', 'paid', '0', '0', '6', '', '', 'any time'),
(203, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'keyboard', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'kh3w81wl ', 'paid', '0', '0', '6', '', '', 'any time'),
(205, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'nddxvxhz ', 'paid', '0', '0', '6', '', '', 'any time'),
(207, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', '3duv36vf  ', 'paid', '0', '0', '6', '', '', 'any time'),
(209, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'pee4o7cl ', 'paid', '0', '0', '6', '', '', 'any time'),
(211, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'o0n67z2v', 'paid', '0', '0', '6', '', '', 'any time'),
(213, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', '9lolypfj ', 'paid', '0', '0', '6', '', '', 'any time'),
(215, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'k4hmay0v ', 'paid', '0', '0', '6', '', '', 'any time'),
(217, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'sogll07c ', 'paid', '0', '0', '6', '', '', 'any time'),
(219, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'lvu7cty3 ', 'paid', '0', '0', '6', '', '', 'any time'),
(221, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'byz58oo4 ', 'paid', '0', '0', '6', '', '', 'any time'),
(223, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'nftnuyk7', 'paid', '0', '0', '6', '', '', 'any time'),
(225, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'hjg14nim ', 'paid', '0', '0', '6', '', '', 'any time'),
(227, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'nw9we9o6 ', 'paid', '0', '0', '6', '', '', 'any time'),
(229, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'gmfirheh', 'paid', '0', '0', '6', '', '', 'any time'),
(231, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'ly16m5k1 ', 'paid', '0', '0', '6', '', '', 'any time'),
(233, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', '5l8r7h26 ', 'paid', '0', '0', '6', '', '', 'any time'),
(235, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', 'ovzm3o7i', 'paid', '0', '0', '6', '', '', 'any time'),
(237, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '2018-06-06', '15:13:00', '13:39:00', 'fragile', 'cleared', 'ayi22c96 ', 'paid', '0', '0', '6', 'null', 'null\r\n', 'any time'),
(239, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '0000-00-00', '15:13:00', '00:00:00', 'fragile', '', '7lf3tkhv ', 'paid', '0', '0', '6', '', '', 'any time'),
(241, 'rocker 6', 'locker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '2018-06-07', '15:13:00', '16:59:00', 'fragile', '', 'e77bj6q8 ', 'paid', '0150', '0', '6', 'null', 'null\r\n', 'any time'),
(243, 'rocker 6', 'rocker 6', '0721177507', '6', 'null', '', 'electronics', 'smart watch ', '2018-05-31', '2018-06-07', '15:33:00', '11:14:00', 'fragile', 'cleared', 'qggprrd4', 'paid', '0', '1', '6', 'null', 'null', 'any tiume'),
(245, 'rocker 6', 'rocker 6', '0721177507', '0735890940', 'null', '', 'electronics', 'smart watch', '2018-05-31', '0000-00-00', '04:00:00', '00:00:00', 'fragile', '', 'pjb8rxa3 ', 'paid', '0', '0', '6', '', '', 'any time'),
(247, 'eric ', 'mwangi', '0705007452', '30060214', 'null', '', 'general item', 'black bag with clothes and hard disc', '2018-05-31', '0000-00-00', '16:51:00', '00:00:00', 'fragile', '', 'db1lbu1w ', 'paid', '050', '1', '2', '', '', '2'),
(248, 'rose', 'rose', '21', '12', 'rose', '', 'general item', 'books', '2018-06-01', '0000-00-00', '16:51:00', '14:59:00', 'not fragile', 'cleared', 'gnutlzuc ', 'paid', '250', '1', '1', 'null', 'null\r\n', 'over night\r\n'),
(249, 'rose', 'wanjala', '0729515397', '22613778', 'null', '', 'general item', 'farm products', '2018-06-02', '0000-00-00', '11:16:00', '17:59:00', 'not fragile', 'cleared', 'px374d3c ', 'paid', '200', '7', '6', 'null', 'null', '4'),
(251, 'ben', 'mugo', '07162189217', '32172743', 'null', '', 'general item', 'tools', '2018-06-02', '2018-06-02', '13:46:00', '14:23:00', 'not fragile', 'cleared', 'czr5wggj  ', 'paid', '025', '7', '4', 'null', 'null', '2'),
(252, 'ERIC ', 'chege', '0797317184', '35361279', 'NULL', '', 'general item', 'CLOTHS', '2018-06-04', '0000-00-00', '10:27:00', '00:00:00', 'not fragile', '', 'nc5ogmcl ', 'paid', '0', '2', '4', '', '', '1'),
(256, 'judy', 'tanui', '0724620406', '33636728', 'customer, ', '', 'general item', 'bags', '2018-06-04', '2018-06-05', '15:28:00', '10:24:00', 'not fragile', 'cleared', 'f4vhskj6 ', 'paid', '040', '1', '7', 'null', 'null', 'day'),
(258, 'jane', 'nduta', '0723257106', '10875328', 'null', '', 'general item', 'curtains ', '2018-06-04', '0000-00-00', '16:03:00', '00:00:00', 'fragile', '', 'lyt2194u ', 'paid', '400', '11', 'two days', '', '', 'two days'),
(259, 'europe', 'njuguna', '0712372929', '24623321', 'joyce', '', 'general item', 'marvins', '2018-06-05', '0000-00-00', '00:08:36', '00:00:00', '', '', 'kg6w9qn3', 'not paid', '0', '1', '17', '', '', '2'),
(261, 'janet', 'muthoni', '0722822272', '25349872', 'null', '', 'general item', 'batg', '2018-06-05', '2018-06-05', '09:04:00', '14:53:00', 'not fragile', 'cleared', 'l0quwv2j ', 'paid', '200', '8', '22', 'null', 'null', 'full day'),
(263, 'moureen ', 'magwea', '07223890958', '22678710', 'null', '', 'general item', 'bag', '2018-06-05', '0000-00-00', '00:00:10', '00:00:00', '', '', '69eyonn0', 'paid', '0', '3', '23', '', '', 'whole day'),
(265, 'brian', 'njagi', '0742024133', '28455870', 'michell', '', 'electronics', 'mixer', '2018-06-05', '0000-00-00', '00:03:16', '00:00:00', 'fragile', '', 'kyj8u8rm ', 'paid', '150', '50', '33', '', '', 'tommorrow'),
(267, 'ann ', 'wangari', '0792635722', '4689896989', 'null', '', 'general item', 'carrier bag', '2018-06-05', '0000-00-00', '168:00:00', '00:00:00', 'not fragile', '', 'khp4gdpc ', 'paid', '250', '25', '6', '', '', '7'),
(268, 'bengo', 'obwanda', '0786614221', '6', 'null', '', 'general item', 'general ', '2018-06-06', '0000-00-00', '08:25:00', '00:00:00', 'not fragile', '', 'g87hy90y ', 'paid', '100', '7', '4', '', '', '2'),
(269, 'SHILA ', 'shila', '123', '123', 'null', '', 'general item', 'hand bag', '2018-06-07', '0000-00-00', '17:40:00', '00:00:00', 'not fragile', '', 'gmpcne6a ', 'not paid', '25', '1', '4', '', '', '2'),
(270, 'carol ', 'macharia', '0722338870', 'locker 1', 'fatuma rajab 0711787919', '', 'general item', 'bags ', '2018-06-08', '0000-00-00', '12:37:00', '00:00:00', 'not fragile', '', '84ktc717 ', 'paid', '0', '1', '1', '', '', 'any time'),
(272, 'carol ', 'macharia', '0722338870', 'locker 1', 'rose', '', 'general item', 'bags ', '2018-06-08', '2018-06-19', '12:37:00', '11:38:00', 'not fragile', 'cleared', '5tevqtes ', 'paid', '0', '1', '1', 'null', 'null', 'any time'),
(274, 'carol ', 'macharia', '0722338870', 'locker 1', 'winnie, 07227778301', '', 'general item', 'bags ', '2018-06-08', '0000-00-00', '12:37:00', '00:00:00', 'not fragile', '', 'g11rwtjw ', 'paid', '0', '1', '1', '', '', 'any time'),
(276, 'carol ', 'macharia', '0722338870', 'locker 1', 'taaz, 0708110022', '', 'general item', 'bags ', '2018-06-08', '2018-06-09', '12:37:00', '15:40:00', 'not fragile', 'cleared', '8hmdf9hs ', 'paid', '0', '1', '1', 'null', 'nuill', 'any time'),
(278, 'carol ', 'macharia', '0722338870', 'locker 1', 'nelly 0726404004', '', 'general item', 'bags ', '2018-06-08', '2018-06-14', '12:37:00', '12:57:00', 'not fragile', 'cleared', '50ff8znl ', 'paid', '0', '1', '1', 'null', 'null\r\n', 'any time'),
(280, 'carol ', 'macharia', '0722338870', 'locker 1', 'mugo 0721672770', '', 'general item', 'bags ', '2018-06-08', '2018-06-09', '12:37:00', '12:33:00', 'not fragile', 'cleared', 'gq7mgusw', 'paid', '0', '1', '1', 'null', 'null\r\n', 'any time'),
(282, 'carol ', 'macharia', '0722338870', 'locker 1', 'mercy 0728078367', '', 'general item', 'bags ', '2018-06-08', '2018-06-15', '12:37:00', '17:27:00', 'not fragile', 'cleared', 'stnotra9 ', 'paid', '0', '1', '1', 'null', 'null', 'any time'),
(284, 'carol ', 'macharia', '0722338870', 'locker 1', 'boot', '', 'general item', 'bags ', '2018-06-08', '0000-00-00', '12:37:00', '00:00:00', 'not fragile', '', 'aw6oa13q', 'paid', '0', '1', '1', '', '', 'any time'),
(286, 'carol ', 'macharia', '0722338870', 'locker 1', 'shyla 0710436381', '', 'general item', 'bags ', '2018-06-08', '2018-06-09', '12:37:00', '15:54:00', 'not fragile', 'cleared', 'p3xemiqw ', 'paid', '0', '1', '1', 'null', 'null\r\n', 'any time'),
(288, 'carol ', 'macharia', '0722338870', 'locker 1', 'sparkes', '', 'general item', 'bags ', '2018-06-08', '0000-00-00', '12:37:00', '00:00:00', 'not fragile', '', '4kscrgi2  ', 'paid', '0', '1', '1', '', '', 'any time'),
(290, 'carol ', 'macharia', '0722338870', 'locker 1', 'nancy 0728856577', '', 'general item', 'bags ', '2018-06-08', '0000-00-00', '12:37:00', '00:00:00', 'not fragile', '', 'nu2gtatg ', 'paid', '0', '1', '1', '', '', 'any time'),
(292, 'carol ', 'macharia', '0722338870', 'locker 1', 'Catherine, 0725680966', '', 'general item', 'bags ', '2018-06-08', '2018-06-08', '12:37:00', '15:47:00', 'not fragile', 'cleared', '1y5sfk4h', 'paid', '0', '1', '1', 'null', 'null\r\n', 'any time'),
(294, 'carol ', 'macharia', '0722338870', 'locker 1', 'margret, 0715823102', '', 'general item', 'bags ', '2018-06-08', '0000-00-00', '12:37:00', '00:00:00', 'not fragile', '', '3tmzanuv ', 'paid', '0', '1', '1', '', '', 'any time'),
(296, 'carol ', 'macharia', '0722338870', 'locker 1', 'margret, 0725908161', '', 'general item', 'bags ', '2018-06-08', '2018-06-08', '12:37:00', '18:05:00', 'not fragile', 'cleared', '6zrvdu6o ', 'paid', '0', '1', '1', 'null', 'null', 'any time'),
(297, 'filbert ', 'adagala', '0727007282', '2421939', 'null', '', 'parcel', 'cake', '2018-06-09', '0000-00-00', '12:09:00', '00:00:00', 'fragile', '', 'pgfetgee ', 'paid', '50', '3', '3', '', '', '2'),
(299, 'carol', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'red shoes', '2018-06-09', '0000-00-00', '12:49:00', '00:00:00', 'not fragile', '', '5ok4zyfe ', 'paid', '0', '1', '1', '', '', 'any time'),
(301, 'carol', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'carpet  purple ', '2018-06-09', '0000-00-00', '12:49:00', '00:00:00', 'not fragile', '', 't406rapk ', 'paid', '0', '1', '1', '', '', 'any time'),
(303, 'carol', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'different colours ', '2018-06-09', '2018-06-09', '12:49:00', '17:05:00', 'not fragile', 'cleared', '3wx1xfrj ', 'paid', '0', '1', '1', 'null', 'null', 'any time'),
(305, 'carol', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'black package ', '2018-06-09', '2018-06-09', '12:49:00', '15:58:00', 'not fragile', 'cleared', 'dmew2nqc', 'paid', '0', '1', '1', 'null', 'null\r\n', 'any time'),
(307, 'carol', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'different colour and red shoes ', '2018-06-09', '2018-06-09', '12:49:00', '16:00:00', 'not fragile', 'cleared', 'mrcfca42 ', 'paid', '0', '1', '1', 'null', 'null\r\n', 'any time'),
(309, 'carol', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'different colors and red shoes. ', '2018-06-09', '2018-06-11', '12:49:00', '15:57:00', 'not fragile', 'cleared', 'sbja2esn ', 'paid', '0', '1', '1', 'null', 'null', 'any time'),
(310, 'jack', 'locker 6', '0722362928', '28729597', 'rtiz', '', 'general item', 'purple ', '2018-06-09', '2018-06-12', '16:10:00', '12:38:00', 'fragile', 'cleared', 'kvgtijsz ', 'paid', '0', '1', '1', 'null', 'null', '1'),
(311, 'eliza', 'Nduta', '0720246470', '23047225', 'null', '', 'general item', 'covers', '2018-06-11', '2018-06-11', '12:33:00', '17:28:00', 'fragile', 'cleared', '9irv2t0j ', 'paid', '250', '15', '5', 'null', 'null', '3'),
(312, 'GORGE', 'GATAU', '0710681446', '25581439', 'unll', '', 'general item', 'travelling bag', '2018-06-12', '2018-06-12', '10:56:00', '11:20:00', 'not fragile', 'cleared', 'ff8zgdlj ', 'paid', '50', '6', '3', 'null', 'null', '2'),
(314, 'prisilla', 'wairimu', '0723029949', '27301071', 'ndirangu lydiah', '', 'parcel', 'cake', '2018-06-12', '0000-00-00', '13:17:00', '15:25:00', 'fragile', 'cleared', 'mmtzu2gc ', 'paid', '50', '1', '1', 'null', 'null', '2'),
(316, 'mary ', 'thuo', '0722211988', '12476077', 'null', '', 'general item', 'cloth', '2018-06-12', '0000-00-00', '14:50:00', '00:00:00', 'not fragile', '', 'cvx6zh1s ', 'paid', '25', '3', '4', '', '', '2'),
(317, 'carol', 'locker 1', '0722338870', '123', 'kahawa west', '', 'general item', 'sufutrias', '2018-06-14', '0000-00-00', '13:02:00', '00:00:00', 'fragile', '', 'jbz7h5w0 ', 'not paid', '0', '9', '4', '', '', '2'),
(319, 'carol', 'locker 1', '0722338870', '123', 'SHEE, 0723781465', '', 'general item', 'sufutrias', '2018-06-14', '2018-06-14', '13:02:00', '17:25:00', 'fragile', 'cleared', 'iqz2il1i', 'paid', '0', '9', '4', 'null', 'NULL', '2'),
(321, 'carol', 'locker 1', '0722338870', '123', 'MARIE, 0722384014', '', 'general item', 'sufutrias', '2018-06-14', '2018-06-16', '13:02:00', '14:54:00', 'fragile', 'cleared', 'ksa0rfam', 'not paid', '0', '9', '4', 'null', 'NULL\r\n', '2'),
(323, 'carol', 'locker 1', '0722338870', '123', 'mARITHA, 0721453810', '', 'general item', 'sufutrias', '2018-06-14', '2018-06-16', '13:02:00', '13:07:00', 'fragile', 'cleared', 'rpt1vq3d ', 'not paid', '0', '9', '4', 'null', 'null', '2'),
(325, 'carol', 'locker 1', '0722338870', '123', 'BARBRA', '', 'general item', 'sufutrias', '2018-06-14', '2018-06-14', '13:02:00', '17:24:00', 'fragile', 'cleared', 'tgmrgmec ', 'not paid', '0', '9', '4', 'null', 'NULL', '2'),
(327, 'carol', 'locker 1', '0722338870', '123', 'NOREEN', '', 'general item', 'sufutrias', '2018-06-14', '0000-00-00', '13:02:00', '00:00:00', 'fragile', '', 'mqc4n2ny', 'not paid', '0', '9', '4', '', '', '2'),
(349, 'carol', 'locker 1', '0722338870', '123', 'MERCY, 0728078367', '', 'general item', 'sufutrias', '2018-06-14', '2018-06-15', '13:02:00', '17:25:00', 'fragile', 'cleared', '5y88y5f7 ', 'paid', '0', '9', '4', 'null', 'null', '2'),
(351, 'carol', 'locker 1', '0722338870', '123', 'JUSTINE, 0719128758', '', 'general item', 'sufutrias', '2018-06-14', '0000-00-00', '13:02:00', '00:00:00', 'fragile', '', '2vld7gma', 'not paid', '0', '9', '4', '', '', '2'),
(353, 'carol', 'locker 1', '0722338870', '123', 'JUSTINE, 0719128758', '', 'general item', 'sufutrias', '2018-06-14', '2018-06-15', '13:02:00', '14:50:00', 'fragile', '', '9mtlwvj1 ', 'not paid', '0', '9', '4', 'null', 'null', '2'),
(354, 'carol ', 'locker 1', '0722338870', '123', 'null', '', 'general item', 'GENERAL ', '2018-06-14', '2018-06-16', '18:36:00', '15:15:00', 'fragile', 'cleared', '20cnj8a0 ', 'paid', '0', '3', '1', 'null', 'NULL', 'ANYTIME'),
(355, 'NJABI', 'NJABI', '0728704180', '28554783', 'Wakaba, 0727361777', '', 'general item', 'cake', '2018-06-15', '0000-00-00', '12:31:00', '00:00:00', 'fragile', '', '7xw7q6w0', 'paid', '120', '1', 'fridge ', '', '', '2'),
(356, 'taji', 'cakes', '0735502990', '24852479', 'ben, 0728568551', '', 'general item', 'cake', '2018-06-16', '0000-00-00', '07:27:00', '00:00:00', 'fragile', '', 'qovz12qy ', 'paid', '75', '2', '4', '', '', '3'),
(358, 'taji', 'cakes', '0735502990', '24852479', 'ben, 0728568551', '', 'general item', 'cake', '2018-06-16', '0000-00-00', '07:27:00', '00:00:00', 'fragile', '', 'ha4ejbwl ', 'paid', '75', '2', '4', '', '', '3'),
(360, 'jasper', 'sifuna', '0727176697', '22423542', 'null', '', 'general item', 'cloths and laptop', '2018-06-16', '0000-00-00', '09:27:00', '00:00:00', 'fragile', '', 'mqfohtrg ', 'paid', '200', '19', '3', '', '', '3'),
(362, 'EVITOR', 'rose', '0725203392', '30303901', 'null', '', 'general item', 'shoes', '2018-06-16', '0000-00-00', '15:59:00', '00:00:00', 'not fragile', '', '6ujy7jyw', 'paid', '50', '1', '2', '', '', '1'),
(363, 'ALEX', 'peter', '0723029949', '26928259', 'customer', '', 'general item', 'CAKE', '2018-06-18', '0000-00-00', '11:46:00', '00:00:00', 'fragile', '', 'mqxy2jz4 ', 'not paid', '0', '3', '2', '', '', '3'),
(365, 'carol ', 'locker 1', '0722338870', '123', 'Taaz 0720784614', '', 'general item', 'pick', '2018-06-18', '0000-00-00', '13:10:00', '00:00:00', 'not fragile', '', '6t2moshf ', 'not paid', '0', '1', '1', '', '', 'anytime'),
(367, 'carol ', 'locker 1', '0722338870', '123', 'JUSTINE, 0719128758', '', 'general item', 'pick', '2018-06-18', '0000-00-00', '13:10:00', '00:00:00', 'not fragile', '', 'fvmf9gxd ', 'not paid', '0', '1', '1', '', '', 'anytime'),
(369, 'carol ', 'locker 1', '0722338870', '123', 'catherine, 0725680966', '', 'general item', 'pick', '2018-06-18', '2018-06-19', '13:10:00', '16:30:00', 'not fragile', 'cleared', 'ckimvd7j ', 'paid', '0', '1', '1', 'null', 'null', 'anytime'),
(371, 'carol ', 'locker 1', '0722338870', '123', 'noreen, 0721999686', '', 'general item', 'pick', '2018-06-18', '0000-00-00', '13:10:00', '00:00:00', 'not fragile', '', '5cgbua4c ', 'not paid', '0', '1', '1', '', '', 'anytime'),
(382, 'hawker', 'hawker', '07564325', '0086734', 'null', '', 'general item', 'sack', '2018-06-19', '2018-06-20', '20:35:00', '17:09:00', 'not fragile', 'cleared', '38g9xqnu', 'paid', '50', '1', '24', 'null', 'null', 'tommorow'),
(383, 'fred to kamau', 'fred to kamau', '0754654355', '098578887', 'null', '', 'general item', 'carrier bag', '2018-06-20', '2018-06-20', '12:39:00', '14:13:00', 'not fragile', 'cleared', '7wr5qznx ', 'paid', '50', '1', '24', 'null', 'null', '1'),
(385, 'customer', 'customer', '0745321266', '8787589', 'null', '', 'general item', 'bag', '2018-06-20', '0000-00-00', '13:15:00', '00:00:00', 'not fragile', '', 'icc6k162 ', 'not paid', '0', '1', '18', '', '', '2'),
(393, 'ann', 'mbogo', '0717696605', '31650728', 'null', '', 'general item', 'cake', '2018-06-20', '0000-00-00', '16:57:00', '00:00:00', 'fragile', '', '5xk3yu7v ', 'not paid', '0', '1', '11', '', '', '4'),
(394, 'chilengat', 'koech', '0728301754', '28604131', 'null', '', 'general item', 'bags', '2018-06-21', '0000-00-00', '11:59:00', '00:00:00', 'not fragile', '', 'fexe8nl5', 'not paid', '0', '3', '10', '', '', '2'),
(396, 'silvia', 'agoi', '0700384062', '30346673', 'shue', '', 'general item', 'cake', '2018-06-21', '2018-06-21', '13:18:00', '14:28:00', 'fragile', 'cleared', '6x17jsxe', 'paid', '50', '1', '6', 'null', 'null', '2'),
(397, 'silvia', 'goi', '0700384062', '30346673', 'monah, 0717674681', '', 'general item', 'cake', '2018-06-22', '0000-00-00', '13:18:00', '00:00:00', 'fragile', '', 'cmq5bo60 ', 'not paid', '50', '1', '1', '', '', '2'),
(399, 'carol ', 'locker 1', '0722338870', '123', 'SHEE, 0723781465', '', 'general item', 'PLASTIC ', '2018-06-22', '2018-07-09', '18:12:00', '12:51:00', 'fragile', 'cleared', 'hsxjw5m8 ', 'paid', '0', '0', '1', 'null', 'null', 'ANY TIME'),
(400, 'Christine ', 'Moraa', '0707005935', '25793511', 'Viola Maingi,0706380042', '', 'general item', 'Fabrics', '2018-06-23', '2018-06-23', '14:47:00', '17:35:00', 'not fragile', 'cleared', '4p8tbzds ', 'paid', '125', '1', '11', 'null', 'null', '5'),
(401, 'jb', 'bj', '321', '123', 'null', '', 'general item', 'metal', '2018-06-23', '0000-00-00', '14:54:00', '00:00:00', 'not fragile', '', 'h0zskkdn ', 'paid', '100', '1', '13', '', '', '4'),
(403, 'Rose', 'Macharia', '0724950543', '28037998', 'null', '', 'general item', 'Fruit Cake', '0000-00-00', '0000-00-00', '00:00:00', '00:00:00', 'fragile', '', 'ql883ujp', 'not paid', '50', '3', '1', '', '', '2 hours'),
(405, 'Rose', 'macharia', '0724950543', '28037998', 'null', '', 'general item', 'Fruit Cake', '2018-06-23', '2018-06-23', '15:18:00', '16:44:00', 'fragile', 'cleared', '64xts9ss ', 'not paid', '100', '3', '1', 'null', 'null', '2 hours'),
(406, 'Enos', 'Chirchir', '0719641174', '27444950', 'null', '', 'general item', 'Laptop and clothes', '2018-06-25', '2018-06-25', '13:03:00', '15:38:00', 'not fragile', 'cleared', 'g5toai7b ', 'paid', '66', '12', '10', 'null', 'none', '2'),
(408, 'stela', 'ndirangu', '0723164535', '10889333', 'null', '', 'general item', 'cloths', '2018-06-25', '0000-00-00', '18:34:00', '00:00:00', 'not fragile', '', 'jdl7l9f4', 'not paid', '250', '16', '9', '', '', 'overnight'),
(409, 'Loreen', 'Komora', '0715024287', '9769662', 'null', '', 'electronics', 'OVEN', '2018-06-26', '0000-00-00', '17:59:00', '00:00:00', 'not fragile', '', ' 6bfs0s25 ', 'not paid', '0', '9', '11', '', '', '2'),
(410, 'jesse', 'njoroge', '0713659136', '23098103', 'null', '', 'general item', 'clths', '2018-06-27', '2018-06-27', '10:11:00', '13:29:00', 'not fragile', 'cleared', '1ya3b63b ', 'paid', '140', '4', '7', 'null', 'null', '2'),
(411, 'europe', 'NJUGUNA', '0712372929', '24623321', '0725234676', '', 'general item', 'CAKE', '2018-06-29', '0000-00-00', '08:54:00', '00:00:00', 'fragile', '', 'c6b0pjkl ', 'paid', '155', '2', 'CHILLER', '', '', '4'),
(413, 'meg', 'Ngina', '0701157880', '30881961', 'Carol, 0725368200', '', 'general item', 'cake', '2018-06-29', '2018-06-29', '11:45:00', '14:14:00', 'fragile', 'cleared', '85kn8oe4 ', 'paid', '60', '1', 'chiller', 'null', 'null\r\n', '2'),
(415, 'john', 'mwangi', '0712311913', '34167382', 'sherz, 0792818221', '', 'general item', 'cloth', '2018-06-29', '2018-06-29', '13:58:00', '18:05:00', 'fragile', 'cleared', 'fv22dz8b ', 'not paid', '102', '3', '3', 'null', 'null', '2'),
(417, 'shu', 'zioki', '0721840412', '29237376', 'wangui', '', 'general item', 'cake', '2018-06-29', '0000-00-00', '14:30:00', '00:00:00', 'fragile', '', '38qhcbgp ', 'not paid', '50', '1', 'chiller', '', '', '2'),
(419, 'ann', 'mbogo', '0717696605', '31650728', 'null', '', 'general item', 'glasses', '2018-06-29', '0000-00-00', '16:48:00', '00:00:00', 'fragile', '', 'k8oootzt ', 'paid', '50', '3', '2', '', '', '2'),
(420, 'Joshua', 'kinyua', '0702987763', '30862545', 'Edward Karanja 0720479401', '', 'general item', 'shoes', '2018-06-30', '2018-07-02', '12:34:00', '20:57:00', 'not fragile', 'cleared', 'jnng3ktn', 'paid', '0250', '3', '4', 'null', 'null', '5'),
(422, 'ann', 'wangui', '31650728', '0722', 'ann ', '', 'general item', 'exams', '2018-06-30', '2018-06-30', '15:11:00', '17:49:00', 'not fragile', 'cleared', 'rdv3kvvp', 'paid', '180', '17', '8', 'null', 'null', '2'),
(423, 'david', 'githumu', '0728479992', '25318363', 'null', '', 'general item', 'c;oths', '2018-07-02', '2018-07-02', '09:06:00', '18:22:00', 'not fragile', 'cleared', '4dbjngyw ', 'paid', '50', '11', '09', 'null', 'null', '1'),
(425, 'nbjei', 'muthaka', '0703111590', '123', 'null', '', 'general item', 'cloths', '2018-07-02', '0000-00-00', '09:35:00', '00:00:00', 'not fragile', '', 'bhqsnxkp ', 'paid', '50', '8', '5', '', '', '1'),
(429, 'S K', 'kamau', '0724079339', '28287903', 'null', '', 'parcel', 'bag', '2018-07-01', '2018-07-02', '14:25:00', '16:53:00', 'not fragile', 'cleared', 'fw27ifnc ', 'paid', '30', '5', '7', 'null', 'null', '2'),
(431, 'cyber', 'cyber', '07653548', '2588907676', 'null', '', 'general item', 'box carton', '2018-07-02', '0000-00-00', '19:10:00', '00:00:00', 'not fragile', '', 'gnbahhtu ', 'not paid', '0', '1', '6', '', '', '2'),
(432, 'sarah', 'Wambui', '0720382008', '22358334', 'wanjiru, 0705334185', '', 'general item', 'cake', '2018-07-03', '2018-07-03', '09:00:00', '12:59:00', 'fragile', 'cleared', 'lu3zmd78 ', 'paid', '93', '2', '9', 'null', 'NULL', '2'),
(433, 'njeri', 'dd', '0722905804', '23729087', 'null', '', 'general item', 'cloths', '2018-07-04', '0000-00-00', '16:02:00', '00:00:00', 'not fragile', '', 'oxjhqbkw ', 'paid', '70', '25', '9', '', '', '1'),
(434, 'Agnes', 'Mugwasi', '0708348147', '30152443', 'null', '', 'general item', 'Clothes', '2018-07-05', '2018-07-05', '14:21:00', '20:13:00', 'not fragile', 'cleared', '5gqpksga ', 'paid', '200', '5', '7', 'null', 'null\r\n', '5'),
(435, 'wairimu', 'thiongo', '0715823102', '20681409', 'null', '', 'general item', 'general', '2018-07-06', '0000-00-00', '13:04:00', '16:19:00', 'not fragile', 'cleared', 'cqeypqz3 ', 'paid', '120', '4', '5', 'null', 'null', '3'),
(437, 'Lydah', 'wachira', '0722316096', '22461880', 'mark', '', 'general item', 'cake', '2018-07-06', '0000-00-00', '17:35:00', '00:00:00', 'fragile', '', 'rde26vub ', 'paid', '250', 'chiller', 'chiller', 'null', 'null', '50'),
(439, 'customer ', 'customer', '0713121467', '123', 'customer a lady', '', 'general item', 'cake', '2018-07-06', '0000-00-00', '18:39:00', '00:00:00', 'fragile', '', '8i7m533r ', 'paid', '300', '2', 'chiller', '', '', 'kesho');
INSERT INTO `customers` (`id`, `first_name`, `last_name`, `phone_number`, `id_number`, `others`, `fingerprint`, `category`, `description`, `checkin_date`, `checkout_date`, `checkin_time`, `checkout_time`, `state`, `checkout_status`, `barcode`, `payment_status`, `amount_paid`, `weight_quantity`, `shelf_number`, `credit_note_status`, `credit_note_available`, `estimated_checkout_time`) VALUES
(440, 'MARY', 'WANJA', '0717299710', '28928875', 'ISSA', '', 'general item', 'CAKE', '2018-07-07', '2018-07-07', '12:58:00', '14:26:00', 'fragile', 'cleared', 'i08ulgtw ', 'paid', '50', '1', '23', 'null', 'NULL', '2'),
(442, 'eric', 'mbugua', '0721666641', '28560113', 'null', '', 'electronics', 'music system ', '2018-07-07', '2018-07-08', '18:38:00', '15:04:00', 'fragile', 'cleared', 'iowdwoay ', 'paid', '150', '7', '43', 'null', 'null', '2'),
(443, 'Antony', 'Muthui', '0721620667', '1152202853', 'null', '', 'general item', 'electonics', '2018-07-09', '0000-00-00', '18:56:00', '00:00:00', 'not fragile', '', 'q27cs4zf ', 'paid', '300', '5', '22', '', '', '10:00'),
(444, 'Faith', 'kimani', '0700215054', '30285803', 'null', '', 'general item', 'hand bags and shoes', '2018-07-10', '0000-00-00', '13:23:00', '00:00:00', 'not fragile', '', 'qe7clve9 ', 'paid', '25', '3', '8', '', '', '2'),
(446, 'kevo', 'githua', '123', '0748146784', 'null', '', 'parcel', 'documents ', '2018-07-10', '0000-00-00', '14:02:00', '16:27:00', 'not fragile', 'cleared', 'qic9a71c ', 'paid', '50', '1', '7', 'null', 'null', '2'),
(448, 'Salome ', 'Wambui', '0798699025', '13842396', 'null', '', 'general item', 'sweets', '2018-07-10', '0000-00-00', '14:40:00', '00:00:00', 'fragile', '', '50mgqfxv ', 'not paid', '100', '7', '33', '', '', '2'),
(449, 'dennis', 'njiru', '0722935506', '7322922', 'faith', '', 'general item', 'mountig ohoto', '2018-07-11', '2018-07-11', '16:34:00', '17:01:00', 'not fragile', 'cleared', 'cipbk3h1 ', 'paid', '0', '2', '23', 'null', 'null', '2'),
(450, 'mercy ', 'ndirangu', '0716775127', '27818160', 'kama', '', 'parcel', 'memory card', '2018-07-13', '0000-00-00', '10:23:00', '00:00:00', 'not fragile', '', '3tdotudt ', 'paid', '50', '2', '4', '', '', '2'),
(460, 'taji ', 'cakes', '0728568551', '123', 'taji', '', 'general item', 'cap cakes', '2018-07-13', '0000-00-00', '13:08:00', '00:00:00', 'fragile', '', 'mm8jtpei ', 'paid', '50', '2', '6', '', '', '2'),
(462, 'Slvia', 'agoi', '321', '123', 'customer', '', 'general item', 'cake', '2018-07-13', '2018-07-13', '16:54:00', '17:45:00', 'fragile', 'cleared', 'nlyl2lcj ', 'not paid', '50', '1', '6', 'null', 'null', '2'),
(463, 'Esther ', 'Esther ', '0706458708', '123', 'esther', '', 'general item', 'nail polish ', '2018-07-14', '0000-00-00', '18:13:00', '00:00:00', 'not fragile', '', 'fba7t0yv ', 'not paid', '250', '2', '22', '', '', 'kesho'),
(465, 'carol ', 'mukami', '0706814992', '35537252', 'null', '', 'general item', 'cloths', '2018-07-14', '2018-07-16', '20:14:00', '08:53:00', 'not fragile', 'cleared', 'rtlhylhu ', 'paid', '500', '13', '11', 'null', 'null', 'monday'),
(466, 'alpy', 'muitika', '0718255716', '123', 'null', '', 'electronics', 'laptop', '2018-07-16', '0000-00-00', '12:15:00', '00:00:00', 'fragile', '', 'ptk11dzp', 'not paid', '100', '1', '5', '', '', '1'),
(467, 'PHILIP', 'NYAE', '0726724557', '23946639', 'null', '', 'electronics', 'tv', '2018-07-17', '0000-00-00', '18:21:00', '00:00:00', 'fragile', '', 'ly41yyw0 ', 'not paid', '100', '43 iun', 'opemn', '', '', '1'),
(469, 'evyonne', 'wanjiru', '0728824514', '26415310', 'jostion mwangi', '', 'general item', 'shoe', '2018-07-17', '0000-00-00', '20:03:00', '00:00:00', 'not fragile', '', 'ex0p73ua ', 'paid', '50', '1', '33', '', '', '1'),
(470, 'Erustus ', 'chebyy', '0710751338', '27837113', 'null', '', 'general item', 'cloths', '2018-07-18', '0000-00-00', '09:01:00', '00:00:00', 'fragile', '', 'ar3jr0le ', 'paid', '75', '3', '33', '', '', '3'),
(471, 'carol ', 'locker 1', '0722338870', '123', 'fatuma, 0700333965', '', 'general item', 'seat', '2018-07-18', '0000-00-00', '11:27:00', '00:00:00', 'fragile', '', '9xnqpo8e ', 'paid', '0', '1', '1', '', '', 'anytime'),
(473, 'carol ', 'locker 1', '0722338870', '123', 'Millicent otieno, 0721385847', '', 'general item', 'seat', '2018-07-18', '0000-00-00', '11:27:00', '00:00:00', 'fragile', '', 'lw97ftyf ', 'paid', '0', '1', '1', '', '', 'anytime'),
(475, 'carol ', 'locker 1', '0722338870', '123', 'esther 0722947908', '', 'general item', 'seat', '2018-07-18', '2018-07-18', '11:27:00', '20:05:00', 'fragile', 'cleared', 'mv3sk3fk ', 'paid', '0', '1', '1', 'null', 'null', 'anytime'),
(477, 'carol ', 'locker 1', '0722338870', '123', 'regina. 0721287503', '', 'general item', 'seat', '2018-07-18', '2018-07-18', '11:27:00', '16:23:00', 'fragile', 'cleared', 'b6dpqf7c', 'paid', '0', '1', '1', 'null', 'null', 'anytime'),
(479, 'carol ', 'locker 1', '0722338870', '123', 'becky', '', 'general item', 'seat', '2018-07-18', '2018-07-20', '11:27:00', '16:35:00', 'fragile', 'cleared', '3i1497fo ', 'paid', '0', '1', '1', 'null', 'null', 'anytime'),
(481, 'carol ', 'locker 1', '0722338870', '123', 'lovena 0713150768', '', 'general item', 'seat', '2018-07-18', '0000-00-00', '11:27:00', '00:00:00', 'fragile', '', 'psdwulyx ', 'paid', '0', '1', '1', '', '', 'anytime'),
(483, 'carol ', 'locker 1', '0722338870', '123', 'lovena 0713150768', '', 'general item', 'seat', '2018-07-18', '0000-00-00', '11:27:00', '00:00:00', 'fragile', '', '2xjtl9g5 ', 'paid', '0', '1', '1', '', '', 'anytime'),
(485, 'carol ', 'locker 1', '0722338870', '123', 'rebecca.0723811070', '', 'general item', 'seat', '2018-07-18', '0000-00-00', '11:27:00', '00:00:00', 'fragile', '', 'bea0wexm ', 'paid', '0', '1', '1', '', '', 'anytime'),
(487, 'carol ', 'locker 1', '0722338870', '123', 'jemiah,0721803998', '', 'general item', 'seat', '2018-07-18', '2018-07-28', '11:27:00', '18:48:00', 'fragile', 'cleared', 'hmmehhu4 ', 'paid', '0', '1', '1', 'null', 'null', 'anytime'),
(489, 'carol ', 'locker 1', '0722338870', '123', 'betty 071170710', '', 'general item', 'seat', '2018-07-18', '0000-00-00', '11:27:00', '00:00:00', 'fragile', '', 'k53ebi49 ', 'paid', '0', '1', '1', '', '', 'anytime'),
(491, 'wanjiru ', 'j', '21', '12', 'null', '', 'general item', '1', '2018-07-18', '2018-07-18', '13:07:00', '14:37:00', 'not fragile', 'cleared', '26ruh6tj ', 'paid', '25', '1', '1', 'null', 'null', '1'),
(493, 'steve ', 'mwandi', '07115083551', '28639752', 'null', '', 'general item', 'bag', '2018-07-18', '0000-00-00', '13:07:00', '00:00:00', 'not fragile', '', 'mrr9mg6k ', 'paid', '25', '1', '1', '', '', '1'),
(495, 'Esther', 'Ndungu ', '0729880250', '27433904', 'null', '', 'general item', '4', '2018-07-18', '2018-07-18', '14:13:00', '17:29:00', 'not fragile', 'cleared', '5i7ytttp ', 'not paid', '200', '7', '12', 'null', 'null', '4'),
(496, 'joseph ', 'oundo', '0729046803', '29322548', 'null', '', 'general item', 'bag', '2018-07-19', '2018-07-19', '08:10:00', '22:06:00', 'not fragile', 'cleared', 'qhe6kxqp ', 'paid', '200', '9', '25', 'null', 'null', 'whole day'),
(497, 'YVONNE', 'wanjiru', '0728824514', '123', 'null', '', 'general item', 'masai shuka', '2018-07-20', '0000-00-00', '19:36:00', '00:00:00', 'not fragile', '', 'lwvogc1v ', 'not paid', '170', '5', '22', '', '', 'over night'),
(499, 'Frances ', 'kaigu', '0718392338', '33143970', 'null', '', 'general item', 'cloths ', '2018-07-20', '0000-00-00', '20:18:00', '21:55:00', 'not fragile', 'cleared', 'pm99ngb', 'paid', '100', '7', '13', 'null', 'null', '3'),
(500, 'dANIEL', 'Kimani', '0717413445', '31405227', 'null', '', 'general item', 'Clothes', '2018-07-21', '0000-00-00', '11:58:00', '00:00:00', 'not fragile', '', '9f8mb5km', 'not paid', '0', '4', '1', '', '', '3'),
(501, 'james', 'James ', '0770410350', '116874989', 'null', '', 'general item', 'cloths  ', '2018-07-23', '2018-07-23', '08:40:00', '12:25:00', 'not fragile', 'cleared', 'd047lfyt ', 'paid', '93', '1', '33', 'null', 'null', '3'),
(502, 'ciru', 'Njuguna ', '0707047834', '30806817', 'null ', '', 'general item', 'hand bag', '2018-07-24', '2018-07-24', '14:07:00', '17:25:00', 'not fragile', 'cleared', '6u0bq3sr ', 'paid', '75', '2', '13', 'null', 'null.', '3'),
(503, 'Alice ', 'Nyokabi ', '0738016269', '32220296', 'null ', '', 'general item', 'Cap cakes', '2018-07-25', '0000-00-00', '07:41:00', '00:00:00', 'fragile', '', 'rf6y0sji ', 'paid', '220', '2', 'chiller', '', '', 'whole day'),
(505, 'LUCIA', 'WANJIKU', '0705218430', '123', 'RACHAEL ', '', 'general item', 'CAKE', '2018-07-25', '0000-00-00', '10:57:00', '00:00:00', 'fragile', '', 's8g4gss4', 'paid', '220', '2', 'chiller', '', '', 'WHOLE DAY'),
(565, 'LUCIA', 'WANJIKU', '0705218430', '123', 'ESTHER', '', 'general item', 'CAKE', '2018-07-25', '0000-00-00', '11:02:00', '00:00:00', 'fragile', '', 'rz2wdlft ', 'paid', '220', '2', 'chiller', '', '', 'WHOLE DAY'),
(567, 'bender ', 'nyagasi', '0738271509', '24436441', 'collect, 0708038839', '', 'general item', 'glasses', '2018-07-25', '0000-00-00', '14:37:00', '00:00:00', 'fragile', '', 'grhx55xt ', 'paid', '100', '1', '11', '', '', '5'),
(569, 'geeny ', 'love', '0707245428', '123', 'collect, 0708038839', '', 'general item', 'oil', '2018-07-25', '0000-00-00', '14:43:00', '00:00:00', 'not fragile', '', 'ipwwaz4e ', 'paid', '25', '1', '12', '', '', '1'),
(571, 'valentine  ', 'valentine ', '0702004968', '123', 'noel', '', 'general item', 'shoe ', '2018-07-25', '2018-07-28', '17:01:00', '17:36:00', 'fragile', 'cleared', '9svexjth ', 'paid', '150', '1', '21', 'null', 'null', '1'),
(573, 'Timo', 'anyango', '0728596722', '32040601', 'null', '', 'general item', 'cloths ', '2018-07-25', '2018-07-25', '17:25:00', '19:14:00', 'fragile', '', '1vj7w9jq ', 'paid', '150', '3', '23', 'null', 'null', '3'),
(574, 'linet ', 'linet ', '0725414842', '123', 'null', '', 'general item', 'shopping ', '2018-07-26', '2018-07-26', '18:53:00', '21:15:00', 'not fragile', 'cleared', 'dxp8d5g8 ', 'paid', '25', '3', '21', 'null', 'null\r\n', '1'),
(575, 'wangari', 'nazlin', '0727421899', '30747496', '0725288541', '', 'general item', 'handbags', '2018-07-27', '0000-00-00', '14:37:00', '00:00:00', 'not fragile', '', 'hvf2fyuf ', 'not paid', '0', '4.2', '16', '', '', '8:00pm'),
(585, 'wangari', 'nazlin', '0727421899', '30747496', '0725288541', '', 'general item', 'handbags', '2018-07-27', '2018-07-27', '14:37:00', '20:43:00', 'not fragile', 'cleared', '3hxugg1g ', 'not paid', '0150', '4.2', '16', 'null', 'null', '8:00pm'),
(587, 'Lilian ', 'Njogu', '0727213990', '123', 'Doreen ', '', 'general item', 'PILLOW COVER  ', '2018-07-27', '0000-00-00', '15:47:00', '00:00:00', 'fragile', '', 'dujdaxdg ', 'not paid', '50', '1', '23', '', '', '1'),
(589, 'geeny', 'love', '0707245428', '30348550', 'faith 0713947626', '', 'general item', 'hair spray', '2018-07-27', '0000-00-00', '17:04:00', '00:00:00', 'not fragile', '', 'ger15zx8 ', 'not paid', '0', '0', '26', '', '', '6pm'),
(591, 'geeny', 'love', '0707245428', '123', 'faith', '', 'general item', 'hair spray', '2018-07-27', '0000-00-00', '17:07:00', '00:00:00', 'not fragile', '', 'ij9idz02 ', 'not paid', '0', '0', '26', '', '', '6pm'),
(593, 'geeny', 'love', '0707245428', '123', 'faith', '', 'general item', 'hair spray', '2018-07-27', '2018-07-27', '17:11:00', '18:46:00', 'not fragile', 'cleared', 'nyhxmrth ', 'paid', '50', '0', '24', 'null', 'null', '6pm'),
(595, 'zuhurah', 'nyambura', '0720610359', '123', 'null', '', 'general item', 'cake', '2018-07-27', '2018-07-27', '18:25:00', '20:21:00', 'fragile', '', '39b0evva', 'paid', '50', '1', '27', 'null', 'null', '2hrs'),
(597, 'tracy', 'kanja', '0702743978', '33833210', 'judah kirimi 0786207134', '', 'general item', 'doughnuts', '2018-07-27', '0000-00-00', '15:13:00', '20:31:00', 'fragile', 'cleared', 'qpz2q8qp ', 'paid', '100', '1', 'chiller', 'null', 'null', '2'),
(598, 'Top ', 'sERVE', '0722329064', '123', 'WAHU. 0715824388', '', 'general item', 'PRESTIGE ', '2018-07-28', '2018-07-28', '17:22:00', '19:17:00', 'fragile', 'cleared', 'd7fkuet1 ', 'paid', '50', '2', '32', 'null', 'null', '2'),
(600, 'NANCY', 'mathenge ', '0724646310', '24804803', 'masila, 0720048732', '', 'general item', 'cloth', '2018-07-28', '0000-00-00', '17:26:00', '00:00:00', 'fragile', '', 'irh4a27d ', 'paid', '150', '2', '37', '', '', '3'),
(602, 'NANCY', 'mathenge ', '0724646310', '24804803', 'carol mwatha 0707563305', '', 'general item', 'cloth', '2018-07-28', '0000-00-00', '17:26:00', '00:00:00', 'fragile', '', '11kmuk2r ', 'paid', '150', '2', '37', '', '', '3'),
(604, 'NANCY', 'mathenge ', '0724646310', '24804803', 'julia 0713403002', '', 'general item', 'cloth', '2018-07-28', '2018-07-30', '17:26:00', '13:21:00', 'fragile', 'cleared', 'hwjvfq21 ', 'paid', '150', '2', '37', 'null', 'null', '3'),
(606, 'NANCY', 'mathenge ', '0724646310', '24804803', 'mary, 0727288030', '', 'general item', 'cloth', '2018-07-28', '0000-00-00', '17:26:00', '00:00:00', 'fragile', '', '7nl9k9lm ', 'paid', '150', '2', '37', '', '', '3'),
(608, 'NANCY', 'mathenge ', '0724646310', '24804803', 'caroline, 0738405128', '', 'general item', 'cloth', '2018-07-28', '0000-00-00', '17:26:00', '00:00:00', 'fragile', '', 'fp37bnah  ', 'paid', '150', '2', '37', '', '', '3'),
(610, 'lesley', 'gatobu', '0710613708', '28753417', 'null', '', 'general item', 'cloths', '2018-07-28', '2018-07-28', '17:32:00', '20:15:00', 'fragile', 'cleared', 'lys2oi9a   ', 'paid', '200', '31', '22', 'null', 'null', '4'),
(612, 'liz', 'nuthu', '0715427950', '27236055', 'Juliet , 0705801977', '', 'general item', 'cake', '2018-07-28', '2018-07-28', '18:35:00', '20:53:00', 'fragile', 'cleared', 'bxie5nmr ', 'paid', '150', '2', 'chiller', 'null', 'null', '2'),
(613, 'ESTHER', 'IMPORTER ', '0706458708', '123', 'CUSTOMERS', '', 'general item', 'IMPORTED ', '2018-07-30', '0000-00-00', '10:58:00', '00:00:00', 'fragile', '', 'sjuzcu82 ', 'not paid', '0', '40', '24, 31, 32', '', '', 'FEW DAYS'),
(615, 'ZUNI', 'Hachila ', '0720538149', '31678539', 'null', '', 'general item', 'clothes', '2018-07-30', '2018-07-30', '12:23:00', '18:31:00', 'not fragile', 'cleared', 'pwma9tyb ', 'paid', '200', '7', '21', 'null', 'null', '4'),
(617, 'jemimah ', 'Owiti', '0722330744', '25585341', 'null', '', 'general item', 'shoes', '2018-07-30', '0000-00-00', '14:07:00', '00:00:00', 'fragile', '', 'ri3weklo ', 'paid', '025', '1', '21', '', '', '2'),
(619, 'noel', 'okuaru', '0716179224', '28408941', '0711594125 ', '', 'general item', 'lipstick ', '2018-07-30', '0000-00-00', '17:10:00', '00:00:00', 'fragile', '', 'q7cj48ta ', 'not paid', '50', '2', '16', '', '', '2'),
(620, 'JOHN/ JC', 'OKENO', '0725899103', '24495025', 'NANGA, 0729743467', '', 'general item', 'BEAUTY PRODUCT ', '2018-07-31', '0000-00-00', '08:51:00', '09:55:00', 'fragile', 'cleared', 'gxo42qm9 ', 'not paid', '50', '2', '21', 'null', 'null', '2'),
(622, 'jc', 'okelo ', '0725899103', '24495025', 'jackie ng\'ang\'a 0729743467', '', 'general item', 'coconut oil', '2018-07-31', '2018-07-31', '00:12:43', '15:15:00', 'fragile', 'cleared', 'd14cfu2z ', 'not paid', '74', '02', '23', 'null', 'null', '1'),
(624, 'Nelima ', 'nelima', '0715995636', '123', 'null', '', 'general item', 'cloths ', '2018-07-31', '2018-07-31', '13:13:00', '14:30:00', 'fragile', 'cleared', '5a4vh0yu ', 'not paid', '64', '5', '43', 'null', 'null', '2'),
(626, 'gennie', 'achie', '0721145413', '28491249', 'null', '', 'general item', 'shopping ', '2018-07-31', '0000-00-00', '16:43:00', '00:00:00', 'not fragile', '', '70a2u48f ', 'paid', '100', '19', '31', '', '', '2');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`user_id`, `name`, `email`, `username`, `password`) VALUES
(1, 'ken', 'kennethkaigu@gmail.com', 'ken', '78e0b1fdb55ecbc60a8da0168ce87daa0e7ba2b44ffa0cf61a8f0a6c5b423d7a'),
(4, 'pp', 'pp@pp.pp', 'pp', 'd53315bea08cec50d2591fcaf3b32dc5d289cdc6c16b7e8bed8c8e3f7ceaa34e'),
(5, 'kk', 'kk@kk.kk', 'kk', 'ad370ed99b189921e7fe26057c40aab9f4fee8385e47606f50f348b9a5530af0'),
(16, 'peter', 'peterchege442@gmail.com', 'peter', '026ad9b14a7453b7488daa0c6acbc258b1506f52c441c7c465474c1a564394ff'),
(15, 'ciru', 'ciru@gmail.com', 'ciru', '16442bdbc972bf3c84f1ef2c94ed2a6994ae49eee68528c09d8a2fca284b8b3f'),
(14, 'john', 'johnmbald@gmail.com', 'JB', '7a3e6b16cb75f48fb897eff3ae732f3154f6d203b53f33660f01b4c3b6bc2df9');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `name`, `email`, `username`, `password`) VALUES
(4, 'Admin', 'admin@shikilia.com', 'Admin', 'd53315bea08cec50d2591fcaf3b32dc5d289cdc6c16b7e8bed8c8e3f7ceaa34e');

-- --------------------------------------------------------

--
-- Table structure for table `shelf`
--

CREATE TABLE `shelf` (
  `id` int(11) NOT NULL,
  `shelf_number` varchar(20) NOT NULL,
  `status` int(50) NOT NULL,
  `product_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shelf`
--

INSERT INTO `shelf` (`id`, `shelf_number`, `status`, `product_image`) VALUES
(1, 'ELECTRONICS 1', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(2, 'ELECTRONICS 2', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(3, 'LOCKER 1', 1, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(4, 'DRAWER 1', 0, 'http://localhost/shikilia/script/uploads/1521845367_locker1.jpg'),
(5, 'ELECTRONIC 3', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(6, 'ELECTRONIC 4', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(7, 'ELECTRONIC 5', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(8, 'ELECTRONIC 6', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(9, 'ELECTRONIC 7', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(10, 'ELECTRONIC 8', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(11, 'ELECTRONIC 9', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(12, 'ELECTRONIC 10', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(13, 'ELECTRONIC 11', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(14, 'ELECTRONIC 12', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(15, 'ELECTRONIC 13', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(16, 'ELECTRONIC 14', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(17, 'ELECTRONIC 15', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(18, 'ELECTRONIC 16', 0, 'http://localhost/shikilia/script/uploads/1521841989_elec1.jpg'),
(19, 'Open shelf 1', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(20, 'Open shelf 2', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(21, 'Open shelf 3', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(22, 'Open shelf 4', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(23, 'Open shelf 5', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(24, 'Open shelf 6', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(25, 'Open shelf 7', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(26, 'Open shelf 8', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(27, 'Open shelf 9', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(28, 'Open shelf 10', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(29, 'Open shelf 11', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(30, 'Open shelf 12', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(31, 'Open shelf 13', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(32, 'Open shelf 14', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(33, 'Open shelf 15', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(34, 'Open shelf 16', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(35, 'Open shelf 17', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(36, 'Open shelf 18', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(37, 'Open shelf 19', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(38, 'Open shelf 20', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(39, 'Open shelf 21', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(40, 'Open shelf 22', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(41, 'Open shelf 23', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(42, 'Open shelf 24', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(43, 'Open shelf 25', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(44, 'Open shelf 26', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(45, 'Open shelf 27', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(46, 'Open shelf 28', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(47, 'Open shelf 29', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(48, 'Open shelf 30', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(49, 'Open shelf 31', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(50, 'Open shelf 32', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(51, 'Open shelf 33', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(52, 'Open shelf 34', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(53, 'Open shelf 35', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(54, 'Open shelf 36', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(55, 'Open shelf 37', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(56, 'Open shelf 38', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(57, 'Open shelf 39', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(58, 'Open shelf 40', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(59, 'Open shelf 41', 0, 'http://localhost/shikilia/script/uploads/1521845481_opn1.jpg'),
(60, 'LOCKER 2', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(61, 'LOCKER 3', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(62, 'LOCKER 4', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(63, 'LOCKER 5', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(64, 'LOCKER 6', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(65, 'LOCKER 7', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(66, 'LOCKER 8', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(67, 'LOCKER 9', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(68, 'LOCKER 10', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(69, 'LOCKER 11', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(70, 'LOCKER 12', 0, 'http://localhost/shikilia/script/uploads/1521845321_locker2.jpg'),
(71, 'SPACE 1', 0, 'http://localhost/shikilia/script/uploads/1521845444_space3.jpg'),
(72, 'SPACE 2', 0, 'http://localhost/shikilia/script/uploads/1521845444_space3.jpg'),
(73, 'DRAWER 2', 0, 'http://localhost/shikilia/script/uploads/1521845367_locker1.jpg'),
(74, 'REFRIGERATOR 1', 0, 'http://localhost/shikilia/script/uploads/1521845402_ref1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `shelf`
--
ALTER TABLE `shelf`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shelf_number` (`shelf_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=628;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `shelf`
--
ALTER TABLE `shelf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
