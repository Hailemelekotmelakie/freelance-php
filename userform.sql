-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 11:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `timeAgo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `email`, `password`, `timeAgo`) VALUES
('', 'admin1@gmail.com', '$2y$10$ro7TmjkFbZVMHMXpXTQmiuEReQyV6/Ex9/d.lYoq01YZOzmaN6gtm', 0),
('', 'hailemelekotmelakie1991@gmail.com', '866adc2a3950a1502890d6eb2b8b0e1a', 1656872482);

-- --------------------------------------------------------

--
-- Table structure for table `bankrecords`
--

CREATE TABLE `bankrecords` (
  `recordID` int(11) NOT NULL,
  `fundID` int(11) NOT NULL,
  `funderName` mediumtext NOT NULL,
  `funderEmail` mediumtext NOT NULL,
  `fundAmount` double NOT NULL,
  `fundType` mediumtext NOT NULL,
  `fundedDate` text NOT NULL,
  `bankType` text NOT NULL,
  `BankAccount` text NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `fundState` int(11) NOT NULL,
  `funderID` int(11) NOT NULL,
  `accountBalance` double NOT NULL,
  `temporaryBalance` double NOT NULL,
  `fundedDay` text NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankrecords`
--

INSERT INTO `bankrecords` (`recordID`, `fundID`, `funderName`, `funderEmail`, `fundAmount`, `fundType`, `fundedDate`, `bankType`, `BankAccount`, `timeAgo`, `fundState`, `funderID`, `accountBalance`, `temporaryBalance`, `fundedDay`, `tel`) VALUES
(169, 0, 'Tewodras Kassa Afro', 'teddyafro1990@gmail.com', 0, '', '21/06/2022', '1', '1000000000000', 1655842881, 0, 62, 217.85, 0, 'Tuesday', 946464648),
(170, 0, 'Tewodras k A', 'teddyafro1990@gmail.com', 0, '+', '21/06/2022', '1', '9999999999999', 1655845830, 1, 62, 217.85, 99, 'Tuesday', 946464648),
(171, 0, 'workineh Zfirst dangias', 'workinehzefirst@gmail.com', 0, '', '21/06/2022', '1', '1111111111111', 1655846122, 0, 60, 0, 0, 'Tuesday', 948064789),
(172, 0, 'B B A', 'bukayaw@g.c', 0, '', '22/06/2022', '1', '0000000000000', 1655884853, 0, 32, 1000, 0, 'Wednesday', 947474747),
(173, 0, '33333 iie cien', 'bukayaw@g.c', 0, '+', '22/06/2022', '1', '4444444444444', 1655886374, 1, 32, 1000, 2000, 'Wednesday', 947474747),
(174, 0, '33333 iie cien', 'bukayaw@g.c', 0, '+', '22/06/2022', '1', '4444444444444', 1655886399, 1, 32, 1000, 200, 'Wednesday', 947474747),
(175, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '22/06/2022', '1', '0000000000000', 1655886465, 1, 62, 217.85, 190, 'Wednesday', 946464648),
(176, 0, '33333 iie cien', 'bukayaw@g.c', 0, '-', '22/06/2022', '1', '4444444444444', 1655886465, 1, 32, 1000, 200, 'Wednesday', 947474747),
(177, 0, '33333 iie cien', 'bukayaw@g.c', 0, '-', '22/06/2022', '1', '4444444444444', 1655886612, 1, 32, 1000, 1000, 'Wednesday', 947474747),
(178, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '', '28/06/2022', '1', '1000282828282', 1656404521, 0, 58, 5900.9, 0, 'Tuesday', 954646676),
(179, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '-', '28/06/2022', '1', '0000000000000', 1656452329, 1, 62, 217.85, 90, 'Tuesday', 946464648),
(180, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '28/06/2022', '1', '0000000000000', 1656405832, 1, 62, 217.85, 21.85, 'Tuesday', 946464648),
(181, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '-', '28/06/2022', '1', '0000000000000', 1656405832, 1, 62, 217.85, 23, 'Tuesday', 946464648),
(182, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '-', '28/06/2022', '1', '0000000000000', 1656405863, 2, 62, 217.85, 23, 'Tuesday', 946464648),
(183, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '28/06/2022', '1', '1000282828282', 1656451319, 1, 58, 5900.9, 10000, 'Tuesday', 954646676),
(184, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '28/06/2022', '1', '0000000000000', 1656451376, 1, 62, 312.85, 95, 'Tuesday', 946464648),
(185, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '28/06/2022', '1', '1000282828282', 1656451376, 1, 58, 5900.9, 100, 'Tuesday', 954646676),
(186, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '28/06/2022', '1', '0000000000000', 1656451455, 1, 62, 407.85, 95, 'Tuesday', 946464648),
(187, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '28/06/2022', '1', '1000282828282', 1656451455, 1, 58, 5900.9, 100, 'Tuesday', 954646676),
(188, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '28/06/2022', '1', '0000000000000', 1656451821, 1, 62, 502.85, 95, 'Tuesday', 946464648),
(189, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '28/06/2022', '1', '1000282828282', 1656451821, 1, 58, 5900.9, 100, 'Tuesday', 954646676),
(190, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '28/06/2022', '1', '1000282828282', 1656452072, 1, 58, 5900.9, 700, 'Tuesday', 954646676),
(191, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '28/06/2022', '1', '1000282828282', 1656452205, 1, 58, 5900.9, 96.9, 'Tuesday', 954646676),
(192, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '-', '28/06/2022', '1', '0000000000000', 1656452205, 1, 62, 400.85, 102, 'Tuesday', 946464648),
(193, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656570565, 2, 58, 5900.9, 800, 'Thursday', 954646676),
(194, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656571033, 1, 62, 1341.35, 940.5, 'Thursday', 946464648),
(195, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656571033, 1, 58, 5900.9, 990, 'Thursday', 954646676),
(196, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656577295, 1, 62, 1347.05, 5.7, 'Thursday', 946464648),
(197, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656577295, 1, 58, 5900.9, 6, 'Thursday', 954646676),
(198, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656577317, 1, 62, 1355.6, 8.55, 'Thursday', 946464648),
(199, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656577317, 1, 58, 5900.9, 9, 'Thursday', 954646676),
(200, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656577408, 1, 62, 1362.25, 6.65, 'Thursday', 946464648),
(201, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656577408, 1, 58, 5900.9, 7, 'Thursday', 954646676),
(202, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656577429, 1, 62, 1366.05, 3.8, 'Thursday', 946464648),
(203, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656577429, 1, 58, 5900.9, 4, 'Thursday', 954646676),
(204, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656616470, 1, 62, 1442.05, 76, 'Thursday', 946464648),
(205, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656616470, 1, 58, 5900.9, 80, 'Thursday', 954646676),
(206, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656616656, 1, 62, 1450.6, 8.55, 'Thursday', 946464648),
(207, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656616656, 1, 58, 5900.9, 9, 'Thursday', 954646676),
(208, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656616813, 1, 62, 1451.55, 0.95, 'Thursday', 946464648),
(209, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656616813, 1, 58, 5900.9, 1, 'Thursday', 954646676),
(210, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656616908, 1, 62, 1460.1, 8.55, 'Thursday', 946464648),
(211, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656616908, 1, 58, 5900.9, 9, 'Thursday', 954646676),
(212, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656616972, 1, 62, 1468.65, 8.55, 'Thursday', 946464648),
(213, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656616972, 1, 58, 5900.9, 9, 'Thursday', 954646676),
(214, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617054, 1, 62, 1476.25, 7.6, 'Thursday', 946464648),
(215, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617054, 1, 58, 5900.9, 8, 'Thursday', 954646676),
(216, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617106, 1, 62, 1484.8, 8.55, 'Thursday', 946464648),
(217, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617106, 1, 58, 5900.9, 9, 'Thursday', 954646676),
(218, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617162, 1, 62, 1489.55, 4.75, 'Thursday', 946464648),
(219, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617162, 1, 58, 5900.9, 5, 'Thursday', 954646676),
(220, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617277, 1, 62, 1537.05, 47.5, 'Thursday', 946464648),
(221, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617277, 1, 58, 5900.9, 50, 'Thursday', 954646676),
(222, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617463, 1, 62, 1632.05, 95, 'Thursday', 946464648),
(223, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617463, 1, 58, 5900.9, 100, 'Thursday', 954646676),
(224, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617548, 1, 62, 1641.55, 9.5, 'Thursday', 946464648),
(225, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617548, 1, 58, 5900.9, 10, 'Thursday', 954646676),
(226, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617571, 1, 62, 1679.55, 38, 'Thursday', 946464648),
(227, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617571, 1, 58, 5900.9, 40, 'Thursday', 954646676),
(228, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656617903, 1, 62, 1688.1, 8.55, 'Thursday', 946464648),
(229, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656617903, 1, 58, 5900.9, 9, 'Thursday', 954646676),
(230, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656618717, 1, 62, 1697.6, 9.5, 'Thursday', 946464648),
(231, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656618816, 1, 62, 1699.5, 11.4, 'Thursday', 946464648),
(232, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656618816, 1, 58, 5900.9, 12, 'Thursday', 954646676),
(233, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656619432, 1, 62, 1794.5, 95, 'Thursday', 946464648),
(234, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656619432, 1, 58, 5900.9, 100, 'Thursday', 954646676),
(235, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '30/06/2022', '1', '0000000000000', 1656621228, 1, 62, 1822.05, 27.55, 'Thursday', 946464648),
(236, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '30/06/2022', '1', '1000282828282', 1656621228, 1, 58, 5900.9, 29, 'Thursday', 954646676),
(237, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '01/07/2022', '1', '1000282828282', 1656627410, 2, 58, 5900.9, 900, 'Friday', 954646676),
(238, 0, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '+', '01/07/2022', '1', '0000000000000', 1656627629, 1, 62, 2677.05, 855, 'Friday', 946464648),
(239, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '-', '01/07/2022', '1', '1000282828282', 1656627629, 1, 58, 5000.9, 900, 'Friday', 954646676),
(240, 0, 'Haile ghh hhf', 'hailemariamaddisu21@gmail.com', 0, '', '03/07/2022', '1', '1023456789126', 1656863493, 0, 75, 0, 0, 'Sunday', 939523659),
(241, 0, 'Haile ghh hhf', 'hailemariamaddisu21@gmail.com', 0, '+', '03/07/2022', '1', '1023456789126', 1656863673, 1, 75, 10000, 10000, 'Sunday', 939523659),
(242, 0, 'Haile ggsgd duhd', 'hailemelekotmelakie1991@gmail.com', 0, '', '03/07/2022', '1', '1883838383838', 1656864386, 0, 57, 0, 0, 'Sunday', 947053537),
(243, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '', '03/07/2022', '1', '1000127904077', 1656864490, 0, 74, 50, 0, 'Sunday', 924041650),
(244, 0, 'Haile ggsgd duhd', 'hailemelekotmelakie1991@gmail.com', 0, '+', '03/07/2022', '1', '1883838383838', 1656864534, 1, 57, 10000, 10000, 'Sunday', 947053537),
(245, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '+', '03/07/2022', '1', '1000127904077', 1656864683, 1, 74, 50, 950, 'Sunday', 924041650),
(246, 0, 'Haile ggsgd duhd', 'hailemelekotmelakie1991@gmail.com', 0, '-', '03/07/2022', '1', '1883838383838', 1656864683, 1, 57, 9000, 1000, 'Sunday', 947053537),
(247, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '-', '03/07/2022', '1', '1000127904077', 1656864791, 2, 74, 50, 900, 'Sunday', 924041650),
(248, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '03/07/2022', '1', '1000282828282', 1656866652, 1, 58, 15000.9, 10000, 'Sunday', 954646676),
(249, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '03/07/2022', '1', '1000282828282', 1656866687, 1, 58, 65000.9, 50000, 'Sunday', 954646676),
(250, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '03/07/2022', '1', '1000282828282', 1656866705, 1, 58, 115000.9, 50000, 'Sunday', 954646676),
(251, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '03/07/2022', '1', '1000282828282', 1656866766, 1, 58, 214999.9, 99999, 'Sunday', 954646676),
(252, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '03/07/2022', '1', '1000282828282', 1656866776, 1, 58, 314998.9, 99999, 'Sunday', 954646676),
(253, 0, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '+', '03/07/2022', '1', '1000282828282', 1656866795, 1, 58, 364998.9, 50000, 'Sunday', 954646676),
(254, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '+', '03/07/2022', '1', '1000127904077', 1656866898, 1, 74, 100049, 99999, 'Sunday', 924041650),
(255, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '+', '03/07/2022', '1', '1000127904077', 1656866909, 1, 74, 200048, 99999, 'Sunday', 924041650),
(256, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '+', '03/07/2022', '1', '1000127904077', 1656866917, 1, 74, 300047, 99999, 'Sunday', 924041650),
(257, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '+', '03/07/2022', '1', '1000127904077', 1656866931, 1, 74, 400046, 99999, 'Sunday', 924041650),
(258, 0, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '+', '03/07/2022', '1', '1000127904077', 1656866941, 1, 74, 400050, 4, 'Sunday', 924041650);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bidID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `bidderID` mediumtext NOT NULL,
  `eligibleToBid` text NOT NULL,
  `bidderEmail` mediumtext NOT NULL,
  `biddedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `commentName` text NOT NULL,
  `commentEmail` text NOT NULL,
  `commentMessage` text NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `DateTimeStamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `commentSeen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentID`, `commentName`, `commentEmail`, `commentMessage`, `timeAgo`, `DateTimeStamp`, `commentSeen`) VALUES
(16, 'ha19', 'hailemelekotmelakie19@gmail.com', 'k', 1655585885, '2022-06-18 20:58:05', 0),
(17, 'ha19', 'hailemelekotmelakie19@gmail.com', 'Message', 1655625206, '2022-06-19 07:53:26', 0),
(18, 'bukayaw', 'bukayaw@g.c', 'way', 1655674244, '2022-06-19 21:30:44', 0),
(19, 'bukayaw', 'bukayaw@g.c', 'hi am', 1655886299, '2022-06-22 08:24:59', 0),
(20, 'ምምም', 'jsjjd@dmd.djjd', 'ክጅ ን።ክጅን<br>From Gust', 1656275850, '2022-06-26 20:37:30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detailedinfo`
--

CREATE TABLE `detailedinfo` (
  `Email` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Skill` text NOT NULL,
  `ExpLevel` varchar(100) NOT NULL,
  `Language` text NOT NULL,
  `LangLevel` varchar(100) NOT NULL,
  `Education` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Residence` varchar(100) NOT NULL,
  `Document` varchar(100) NOT NULL,
  `phoneNumber` int(13) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `NationalID` varchar(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `FieldOfStudy` varchar(200) NOT NULL,
  `profilePicture` mediumtext NOT NULL,
  `eligibleToPost` text NOT NULL,
  `eligibleToBid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailedinfo`
--

INSERT INTO `detailedinfo` (`Email`, `Description`, `Skill`, `ExpLevel`, `Language`, `LangLevel`, `Education`, `Date`, `Residence`, `Document`, `phoneNumber`, `gender`, `NationalID`, `College`, `FieldOfStudy`, `profilePicture`, `eligibleToPost`, `eligibleToBid`) VALUES
('', '', '', '', '', '', '', '2022-06-21 21:13:06', '', '', 0, '', '', '', '', '', '', ''),
('0947053537Haile@gmail.com', '', '', '', '', '', '', '2022-06-25 22:11:12', '', '', 0, '', '', '', '', 'profilePicture/Y7nGb0947053537Haile@gmail.comdebretabor.png', '', ''),
('bukayaw@g.c', 'I am a full stack python developer.', 'web dev', 'Junior', 'English', 'Intermidate', 'PHD', '2022-06-19 21:29:36', 'Injibara', 'pdf/New Text Document.txt', 947053537, 'Male', 'uploadedPhotosOfID/Asset-2@4x.png', 'Adama', 'Computer Science', 'profilePicture/HiOglbukayaw@g.c287606354_1760148037665550_8203582979829837121_n.jpg', '', ''),
('creativecommons1991@gmail.com', '', '', '', '', '', '', '2022-06-23 20:30:48', '', '', 0, '', '', '', '', '', '', ''),
('hailemelekotmelakie1991@gmail.com', 'ewgrgerg', '', '', '', '', 'BACHELAR', '2022-06-25 06:05:01', 'mkuhb', '111502-Article Text-308423-1-10-20150119.pdf', 947053536, 'Male', 'profilePicture/QVZM1hailemelekotmelakie1991@gmail.comWIN_20220303_18_20_41_Pro.jpg', 'AAU', 'Computer', 'profilePicture/bVqqUhailemelekotmelakie1991@gmail.comTHUMBNAIL.jpg', '', ''),
('hailemelekotmelakie19@gmail.com', '', '', '', 'bv', 'senier', '', '2022-06-29 20:18:03', '', '', 0, '', '', '', '', 'profilePicture/d1wxbhailemelekotmelakie19@gmail.comwebsite.png', '', ''),
('john@examplel.com', '', '', '', '', '', '', '2022-03-03 06:59:44', '', '', 0, '', '', '', '', '', '', ''),
('ligabawmita@gmail.com', '', '', '', 'አማርኛ', 'expert', '', '2022-05-09 19:36:16', '', '', 0, '', 'uploadedPhotosOfID/131899408_213512996968601_2067757806064914905_n.jpg', '', '', 'profilePicture/d34Sgligabawmita@gmail.com1-19476_valentines-day-png-valentines-day-couple-clipart-transparent.png', '', ''),
('Mogesmelakie2002@gmail.com', '', '', '', '', '', '', '2022-06-07 06:21:47', '', '', 0, '', '', '', '', '', '', ''),
('respectjomera@gmail.com', '', '', '', '', '', '', '2022-03-08 08:18:44', '', '', 0, '', '', '', '', '', '', ''),
('teddyafro1990@gmail.com', '', '', '', '', '', '', '2022-07-01 17:00:00', '', '', 0, '', '', '', '', 'profilePicture/euEgqteddyafro1990@gmail.comInsa.jpg', '', ''),
('today@g.c', 'modalTopup', 'graphics', 'basics', 'ESPANOL', 'basics', 'degree', '2022-03-06 06:29:19', 'AA', 'WIN_20220303_18_20_33_Pro.jpg', 945675755, 'Male', 'uploadedPhotosOfID/WIN_20220303_18_20_26_Pro.jpg', 'AA University', 'CS', '', '', ''),
('workinehzefirst@gmail.com', 'hfuktv, jnm ', '', '', '', '', '', '2022-05-23 19:27:05', '', '', 0, '', '', '', '', 'profilePicture/hNjyWworkinehzefirst@gmail.com448411935_440236.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fundtransactions`
--

CREATE TABLE `fundtransactions` (
  `fundID` int(11) NOT NULL,
  `funderName` mediumtext NOT NULL,
  `funderEmail` mediumtext NOT NULL,
  `fundAmount` double NOT NULL,
  `fundType` mediumtext NOT NULL,
  `fundedDate` text NOT NULL,
  `bankType` text NOT NULL,
  `BankAccount` text NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `fundState` int(11) NOT NULL,
  `funderID` int(11) NOT NULL,
  `accountBalance` double NOT NULL,
  `temporaryBalance` double NOT NULL,
  `fundedDay` mediumint(9) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fundtransactions`
--

INSERT INTO `fundtransactions` (`fundID`, `funderName`, `funderEmail`, `fundAmount`, `fundType`, `fundedDate`, `bankType`, `BankAccount`, `timeAgo`, `fundState`, `funderID`, `accountBalance`, `temporaryBalance`, `fundedDay`, `tel`) VALUES
(164, 'tessema melakie tewopwb', 'teddyafro1990@gmail.com', 0, '', '21/06/2022', '1', '0000000000000', 1655848538, 0, 62, 2677.05, 100, 0, 946464648),
(165, 'tb mhe jje', 'workinehzefirst@gmail.com', 0, '', '21/06/2022', '1', '0000000000000', 1655848034, 0, 60, 0, 0, 0, 927272727),
(166, '33333 iie cien', 'bukayaw@g.c', 0, '', '22/06/2022', '1', '4444444444444', 1655885902, 0, 32, 1000, 0, 0, 947474747),
(167, 'haile melakie tewokef', 'hailemelekotmelakie19@gmail.com', 0, '', '28/06/2022', '1', '1000282828282', 1656404521, 0, 58, 364998.9, 0, 0, 954646676),
(168, 'Haile ghh hhf', 'hailemariamaddisu21@gmail.com', 0, '', '03/07/2022', '1', '1023456789126', 1656863493, 0, 75, 10000, 0, 0, 939523659),
(169, 'Haile ggsgd duhd', 'hailemelekotmelakie1991@gmail.com', 0, '', '03/07/2022', '1', '1883838383838', 1656864386, 0, 57, 9000, 0, 0, 947053537),
(170, 'Mekdim tamirat hailu', 'jrmekdim50@gmail.com', 0, '', '03/07/2022', '1', '1000127904077', 1656864490, 0, 74, 400050, 0, 0, 924041650);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `jobID` int(11) NOT NULL,
  `jobPosterEmail` mediumtext NOT NULL,
  `jobDescription` longtext NOT NULL,
  `jobCategory` mediumtext NOT NULL,
  `jobDeadline` date NOT NULL,
  `jobBudget` int(11) NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `jobShow` int(11) NOT NULL,
  `jobOwnerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`jobID`, `jobPosterEmail`, `jobDescription`, `jobCategory`, `jobDeadline`, `jobBudget`, `timeAgo`, `jobShow`, `jobOwnerID`) VALUES
(88, 'hailemelekotmelakie19@gmail.com', 'I need somepla developer for ethiopian ', 'Writing', '2022-06-03', 366, 1651901792, 0, 58),
(89, 'hailemelekotmelakie19@gmail.com', 'I need somepla developer for ethiopian ', 'Writing', '2022-06-03', 366, 1651901831, 0, 58),
(90, 'hailemelekotmelakie1991@gmail.com', 'Detailing your needs lets us get you with great sellers who’ll give you the best service.Detailing your needs lets us get you with great sellers who’ll give you the best service.Detailing your needs lets us get you with great sellers who’ll give you the best service.Detailing your needs lets us get you with great sellers who’ll give you the best service.', 'Other', '2022-06-07', 775, 1651903249, 0, 57),
(91, 'hailemelekotmelakie19@gmail.com', 'I need graphics design for my website.\r\n\r\nif someone has please inbox me.\r\n', 'Entry', '2022-05-25', 50, 1651911305, 0, 58),
(92, 'hailemelekotmelakie19@gmail.com', 'I need graphics design for my website.\r\n\r\nif someone has please inbox me.\r\n\r\nI need graphics design for my website.\r\n\r\nif someone has please inbox me.', 'Designer', '2022-05-20', 30, 1651911339, 0, 58),
(95, 'workinehzefirst@gmail.com', 'i byheyh57j6r7kt67it6u7rtu6r5y65r5', 'Translating', '2022-05-25', 56, 1653333957, 0, 60),
(96, 'hailemelekotmelakie1991@gmail.com', '7757557o48tu45ith5ibg,tjjtgg', 'Translating', '2022-05-17', 11, 1653468435, 0, 57),
(99, 'hailemelekotmelakie19@gmail.com', 'HI I need text writer for my document.\r\nplease someone inbox me.', 'Translating', '2022-06-06', 30, 1653851995, 0, 58),
(100, 'hailemelekotmelakie19@gmail.com', 'I need website builder for my site if there is someone who helps me unto contact me.', 'Website', '2022-05-31', 300, 1653852477, 0, 58),
(101, 'hailemelekotmelakie19@gmail.com', 'i nedd nfjil3rjfpd piunrfin 09swq dp9ec epi9hpuer f', 'Website Developer and builder', '2022-05-31', 3334, 1653852606, 0, 58),
(102, 'hailemelekotmelakie1991@gmail.com', 'i need a web designer', 'Data Entry and Converting photos to editable text', '2022-05-31', 500, 1653852922, 0, 57),
(103, 'hailemelekotmelakie19@gmail.com', 'w\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\nw\r\n', 'Other', '2022-06-01', 33, 1653866883, 0, 58),
(104, 'hailemelekotmelakie1991@gmail.com', 'dsddsddfvddvdfffffffffffffffffffffff', 'Logo and Graphics Designer', '2022-06-04', 1444, 1653894575, 0, 57),
(106, 'hailemelekotmelakie19@gmail.com', 'zxvc ne eiu eiyfo8 b ekf ', 'Writer & translator', '2022-06-14', 344, 1654196157, 0, 58),
(107, 'hailemelekotmelakie1991@gmail.com', 'oi3hri;onf4 fli3uhdlb3 ld3rfl ,r4j,uy', 'Document, Content Writer and Proposal Writer', '2022-06-16', 333, 1654196338, 0, 57),
(108, 'hailemelekotmelakie19@gmail.com', 'lk;hoji3rnklfodhie b', 'Document, Content Writer and Proposal Writer', '2022-06-23', 44, 1654196503, 2, 58),
(110, 'hailemelekotmelakie1991@gmail.com', 'ዶክመንት እሚጥስፍ ሰው እፈልጋለሁ።\r\nካለ በዉስት መስመር ያዋራኚ።\r\nአመሰኛለሁ።', 'Writer & translator', '2022-06-10', 50, 1654283716, 0, 57),
(111, 'Mogesmelakie2002@gmail.com', 'Detailing your needs lets us get you with great sellers who’ll give you the best service.', 'Audio and Vidio Editor', '2022-06-28', 500000, 1654581338, 2, 63),
(113, 'hailemelekotmelakie19@gmail.com', 'wedfgffgvsdcfwecfecdcedc devwercef', 'Other', '2022-06-24', 25, 1654887882, 2, 58),
(114, 'hailemelekotmelakie1991@gmail.com', 'I need a web builder contact me now if someone about.', 'Website Developer and builder', '2022-06-10', 499, 1654892597, 2, 57),
(115, 'hailemelekotmelakie1991@gmail.com', 'i need content writter.', 'Writer & translator', '2022-06-17', 599, 1654893151, 2, 57),
(116, 'hailemelekotmelakie1991@gmail.com', '000000000000000000000000000000000000', 'Other', '2022-06-30', 888, 1654895848, 2, 57),
(117, 'hailemelekotmelakie1991@gmail.com', 'khie3.fdw ds9cuh;eijfd ifelujv n n rehfr p09r3ufi3ru9frfvbr vrie', 'Writer & translator', '2022-06-24', 777, 1655497251, 2, 57),
(120, 'teddyafro1990@gmail.com', 'i need software developer expertist for my website.', 'Data Entry and Converting photos to editable text', '2022-06-14', 88, 1656097436, 0, 62),
(121, 'teddyafro1990@gmail.com', 'or you\r\nDetailing your needs lets us get you with great sellers who’ll give you the bor you\r\nDetailing your needs lets us get you with great sellers who’ll give you the bor you\r\nDetailing your needs lets us get you with great sellers who’ll give you the bor you\r\nDetailing your needs lets us get you with great sellers who’ll give you the b', 'Website Developer and builder', '2022-06-25', 34, 1656097574, 2, 62),
(122, 'hailemelekotmelakie19@gmail.com', 'ኩድጅንህለጅ።ምደክጅነ ችፈኢኡፍንድ፤ኦእኡፍጀን ፍቼኦ፤ፍንች እች፤ኢኡእን ቸኦ፤', 'Writer & translator', '2022-07-04', 500, 1656361521, 0, 58),
(123, 'hailemelekotmelakie19@gmail.com', 'ክጅስንድም እችጅክ።3 ቸች እክጅ ቾኤ 3፤ች፤ ፕ32ኢ ፍች3ኢ፤  ቭ0ኦቺ እች0ኤ3ቭ ቾቢቭ', 'Other', '2022-07-05', 1000, 1656367886, 0, 58),
(124, 'hailemelekotmelakie19@gmail.com', 'sdvgagxfgng  eentrh rtrh th', 'Writer & translator', '2022-07-05', 45, 1656434522, 0, 58),
(125, 'bukayaw@g.c', 'i neggwhei3ueb ju1,d3bd 3j', 'Website Developer and builder', '2022-07-07', 400, 1656570226, 2, 32),
(127, 'hailemelekotmelakie19@gmail.com', 'uitg4fhr,3fhur f,iru4fikr4 fvur4yfbr fukr4f r4jf', 'Website Developer and builder', '2022-07-08', 300, 1656628449, 0, 58),
(128, 'hailemariamaddisu21@gmail.com', 'Hehsjhgx bbxdhhd llo I fdhujjdt', 'Website Developer and builder', '2022-07-20', 100, 1656863714, 0, 75);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messages_ID` int(11) NOT NULL,
  `outgoing` int(11) NOT NULL,
  `incoming` int(11) NOT NULL,
  `messages` longtext NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `messageStatus` int(11) NOT NULL,
  `messageType` text NOT NULL,
  `zipName` text NOT NULL,
  `fileSize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messages_ID`, `outgoing`, `incoming`, `messages`, `timeAgo`, `messageStatus`, `messageType`, `zipName`, `fileSize`) VALUES
(428, 57, 62, '<p>hi</p>', 1654553696, 0, 'text', '', 0),
(429, 57, 62, '<p>heeeee</p>', 1654553704, 0, 'text', '', 0),
(430, 57, 62, '<p>jjdud</p>', 1654553709, 0, 'text', '', 0),
(431, 57, 62, '<p>jjjje</p>', 1654553714, 0, 'text', '', 0),
(432, 57, 62, '', 1654553732, 0, 'both', '1654553732--chatApp.zip', 10593658),
(433, 57, 62, '<p>mmd</p>', 1654554490, 0, 'text', '', 0),
(434, 57, 62, '<p>hf</p>', 1654554642, 0, 'text', '', 0),
(435, 57, 62, '', 1654554651, 0, 'both', '1654554651--We are website developer-logos.jpeg', 181153),
(436, 57, 62, '', 1654554664, 0, 'both', '1654554664--366-3669638_transparent-youtube-image-png-youtube-channel-grow-png.png', 26764),
(437, 57, 62, '', 1654554696, 0, 'both', '1654554696--tr b.pptx', 24463872),
(438, 62, 60, '<p>Hiteddy&nbsp;</p>', 1654556403, 0, 'text', '', 0),
(439, 60, 62, '<h2>hi workineh am teddy</h2>', 1654556465, 0, 'text', '', 0),
(440, 62, 60, '<p>hi youtube me nw please</p>', 1654556499, 0, 'both', '1654556499--366-3669638_transparent-youtube-image-png-youtube-channel-grow-png.png', 26764),
(441, 60, 62, '<p>hhfhf</p><p>jfjjf</p><p>fjfj</p>', 1654556690, 0, 'text', '', 0),
(442, 60, 62, '', 1654556802, 0, 'both', '1654556802--Complete File Upload & Download System Using PHP & MySQL.zip', 143052),
(443, 60, 62, '<p>hhhhhhhhhh</p>', 1654556857, 0, 'both', '1654556857--tr b.pptx', 24463872),
(444, 62, 60, '<p>hi i am hailemelekot melkie from DTU</p>', 1654557231, 0, 'both', '1654557231--tr b.pptx', 24463872),
(445, 60, 62, '<p>mossess</p>', 1654557571, 0, 'both', '1654557571--Yehunie Belay   ይሁኔ በላይ  አደላላታለሁ   Adelalatalehu    New Ethiopian Music   2022 Yehuniebelay ይሁኔበላይ.mp3', 11550240),
(446, 60, 62, '', 1654557595, 0, 'both', '1654557595--Yehunie Belay   ይሁኔ በላይ  አደላላታለሁ   Adelalatalehu    New Ethiopian Music   2022 Yehuniebelay ይሁኔበላይ.mp3', 11550240),
(447, 62, 60, '', 1654557706, 0, 'both', '1654557706--We are website developer-logos (1).jpeg', 181153),
(448, 62, 60, '', 1654557750, 0, 'both', '1654557750--photo_2022-04-08_09-09-26.jpg', 175937),
(449, 62, 60, '<p>youtube icon</p>', 1654557774, 0, 'both', '1654557774--youtube-circle-button-icon-d-dark-bakcgorund-elegant-template-blank-space-203087436.jpg', 18865),
(450, 60, 62, 'gghyj', 1654630018, 0, 'text', '', 0),
(451, 60, 62, '', 1654630034, 0, 'both', '1654630034--chatApp.zip', 10593658),
(452, 60, 62, 'll', 1654630126, 0, 'text', '', 0),
(453, 60, 62, '', 1654630139, 0, 'both', '1654630139--Presentation Freelancers Platform.rar', 1418752),
(454, 58, 60, 'hi', 1654669122, 0, 'text', '', 0),
(455, 58, 60, 'kkx', 1654669132, 0, 'text', '', 0),
(456, 58, 60, 'xdd', 1654669145, 0, 'text', '', 0),
(457, 58, 60, '', 1654669152, 0, 'both', '1654669152--366-3669638_transparent-youtube-image-png-youtube-channel-grow-png.png', 26764),
(458, 58, 60, 'hi', 1654669204, 0, 'both', '1654669204--1-19476_valentines-day-png-valentines-day-couple-clipart-transparent.png', 70047),
(459, 58, 60, 'hi miss i am a man from', 1654669229, 0, 'both', '1654669229--278568450_299231689060741_5142407785673228360_n.jpg', 110827),
(460, 58, 60, 'eoj122344`', 1654669246, 0, 'text', '', 0),
(461, 58, 60, '\"', 1654669302, 0, 'text', '', 0),
(462, 60, 62, 'ho', 1654760204, 0, 'text', '', 0),
(463, 62, 60, 'gg', 1654760878, 0, 'text', '', 0),
(464, 58, 58, '<p>hi</p>', 1654776527, 0, '', '', 0),
(465, 58, 58, '<p>miss</p>', 1654776537, 0, '', '', 0),
(466, 58, 58, '<p>jj</p>', 1654778023, 0, '', '', 0),
(467, 60, 58, 'js', 1654778360, 0, 'text', '', 0),
(468, 60, 60, 'miss you', 1654778391, 0, 'text', '', 0),
(469, 58, 60, '<p>jj</p>', 1654778498, 0, '', '', 0),
(470, 58, 60, '<p>yet</p>', 1654778504, 0, '', '', 0),
(471, 60, 62, 'n', 1654778923, 0, 'text', '', 0),
(472, 60, 60, 'jushe', 1654779169, 0, 'text', '', 0),
(473, 60, 60, 'mommmmmmmmmmm', 1654779190, 0, 'text', '', 0),
(474, 60, 60, '<b>jhj<b>', 1654779210, 0, 'text', '', 0),
(475, 60, 60, '<b>urr</b>', 1654779231, 0, 'text', '', 0),
(476, 60, 62, '<strong>and this is some important text.</strong>', 1654779349, 0, 'text', '', 0),
(477, 58, 60, '<p>jk.za</p>', 1654779374, 0, '', '', 0),
(478, 58, 60, '<p>zbz</p>', 1654779385, 0, '', '', 0),
(479, 58, 57, 'gy', 1654887336, 0, 'text', '', 0),
(480, 58, 57, '', 1654887356, 0, 'both', '1654887356--maxresdefault.jpg', 75039),
(481, 58, 57, 'zsfwewrfgwrgethdte4hytrhst', 1654887370, 0, 'both', '1654887370--maxresdefault.jpg', 75039),
(482, 57, 58, 'sdvef', 1654887675, 0, 'text', '', 0),
(483, 60, 58, '', 1655492679, 0, 'both', '1655492679--286229100_1760148247665529_5447755586343531505_n.jpg', 68436),
(484, 58, 57, 'xcf', 1655492809, 0, 'text', '', 0),
(485, 58, 57, '', 1655492830, 0, 'both', '1655492830--286229100_1760148247665529_5447755586343531505_n.jpg', 68436),
(486, 58, 57, 'kjbk,jkihp/oj', 1655493500, 0, 'text', '', 0),
(487, 58, 57, '', 1655493532, 0, 'both', '1655493532--Binary Admin Free Website Template - Free-CSS.com.zip', 641146),
(488, 57, 60, 'lijd', 1655494717, 0, 'text', '', 0),
(489, 57, 58, 'me \r\nnee\r\nenneffhr\r\nde\r\nde\r\ned<strong>\r\ned</strong>\r\n', 1655494998, 0, 'text', '', 0),
(490, 57, 58, '<strong>fsyxsu</strong>\r\nwigysw', 1655495014, 0, 'text', '', 0),
(491, 57, 60, 'a ananananann annna  annna nna n a  an\r\nabebe enjera bela', 1655496321, 0, 'text', '', 0),
(492, 58, 58, 'hi', 1655497440, 0, 'text', '', 0),
(493, 57, 58, '', 1655497497, 0, 'both', '1655497497--287196739_1760148087665545_3885302674625820315_n.jpg', 77063),
(494, 57, 58, 'n', 1655497524, 0, 'text', '', 0),
(495, 60, 57, 'jm', 1655501451, 1, 'text', '', 0),
(496, 60, 57, 'md3liemd 3liemd 3liemd3liemd3 liemd3liemd3liemd3liemd3li emd3liemd3liem d3liemd3liem d3liemd3liem d3liemd3liemd3lie md3liemd3liemd3li \r\nemd3liemd3l iemd3liemd3liemd 3liemd3liemd3liemd3 \r\nliemd3liemd3liemd3 liemd3liemd3liem d3liemd3liemd3lieoihd\r\nfef0j4\r\n3fj-f\r\n4\r\n3\r\n3\r\n', 1655501682, 1, 'text', '', 0),
(497, 57, 58, 'mm', 1655554355, 0, 'text', '', 0),
(498, 57, 58, 'HI', 1655584055, 0, 'text', '', 0),
(499, 60, 57, 'jj', 1655987317, 1, 'text', '', 0),
(500, 60, 57, '', 1655987332, 1, 'both', '1655987332--IMG_20201021_165834_134.jpg', 1660210),
(501, 60, 57, '', 1655987347, 1, 'both', '1655987347--2022-05-27-154223158.mp4', 17499305),
(502, 58, 57, 'nnn', 1656077000, 0, 'text', '', 0),
(503, 60, 62, 'j', 1656144888, 1, 'text', '', 0),
(504, 58, 42, 'hi\r\n', 1656278142, 0, 'text', '', 0),
(505, 58, 42, 'ምም', 1656278815, 0, 'text', '', 0),
(506, 58, 42, 'ጅጅ', 1656278818, 0, 'text', '', 0),
(507, 58, 42, '', 1656279087, 0, 'both', '1656279087--DJ MUSIC.jpg', 489081),
(508, 58, 42, 'ክድንጀ', 1656279417, 0, 'text', '', 0),
(509, 58, 42, '፣ክ', 1656279538, 0, 'text', '', 0),
(510, 42, 58, 'nn', 1656449793, 0, 'text', '', 0),
(511, 60, 58, 'jj', 1656537841, 1, 'text', '', 0),
(512, 42, 58, '', 1656570819, 0, 'both', '1656570819--Flag-Ethiopia.jpg', 730),
(513, 57, 62, 'hi', 1656623681, 0, 'text', '', 0),
(514, 58, 62, 'hi', 1656623769, 0, 'text', '', 0),
(515, 58, 58, 'sdfr', 1656627900, 0, 'text', '', 0),
(516, 58, 58, 'hai jhedgiegdej\r\n', 1656627919, 0, 'text', '', 0),
(517, 62, 58, '', 1656699134, 1, 'both', '1656699134--ABEL BIRHANU.jpg', 123534),
(518, 62, 58, '', 1656699511, 1, 'both', '1656699511--Chapter 4 document worknh.docx', 215901),
(519, 62, 58, '', 1656700015, 1, 'both', '1656700015--proposal.docx', 126500),
(520, 62, 58, '', 1656700025, 1, 'both', '1656700025--Proposal.pdf', 311838),
(521, 62, 58, '', 1656700097, 1, 'both', '1656700097--287196739_1760148087665545_3885302674625820315_n.jpg', 77063),
(522, 62, 58, '', 1656700129, 1, 'both', '1656700129--03.zip', 119634),
(523, 58, 42, '', 1656700294, 0, 'both', '1656700294--We are website developer-logos.jpeg', 181153),
(524, 58, 42, 'UWIDJNEKFBRUI3N4F', 1656700305, 0, 'both', '1656700305--We are website developer-logos.jpeg', 181153),
(525, 42, 58, '', 1656701119, 0, 'both', '1656701119--Binary Admin Free Website Template - Free-CSS.com.zip', 641146),
(526, 62, 57, 'cc', 1656708248, 1, 'text', '', 0),
(527, 60, 57, '', 1656742222, 1, 'both', '1656742222--CaptureM.JPG', 25446),
(528, 60, 57, 'Hi I am Hailemelekot see this deep.', 1656742263, 1, 'text', '', 0),
(529, 62, 57, 'Hi', 1656861853, 1, 'text', '', 0),
(530, 62, 57, '', 1656861922, 1, 'both', '1656861922--IMG_20220703_091326_778.jpg', 2990837),
(531, 58, 75, 'hi', 1656863190, 0, 'text', '', 0),
(532, 75, 75, 'uuu', 1656863784, 0, 'text', '', 0),
(533, 75, 75, '', 1656863820, 0, 'both', '1656863820--20220702_143422.jpg', 1383307),
(534, 57, 74, 'Hiii ', 1656864013, 0, 'text', '', 0),
(535, 74, 57, 'Hi man', 1656864046, 0, 'text', '', 0),
(536, 57, 74, 'Tolo amlesim end', 1656864048, 0, 'text', '', 0),
(537, 57, 74, 'Wayy tolo melskal leka', 1656864059, 0, 'text', '', 0),
(538, 57, 74, '', 1656864080, 0, 'both', '1656864080--16568640634133684762500415920462.jpg', 1645117),
(539, 74, 57, 'How  are you, see this', 1656864081, 0, 'both', '1656864081--1656073935493.jpg', 270240),
(540, 60, 74, 'I want job', 1656864163, 1, 'text', '', 0),
(541, 57, 74, 'Hi', 1656864261, 0, 'text', '', 0),
(542, 57, 74, '1000127904077', 1656864609, 0, 'text', '', 0),
(543, 57, 74, 'Bel bel 1000', 1656864642, 0, 'text', '', 0),
(544, 57, 57, '5Y', 1656865326, 0, 'text', '', 0),
(545, 75, 58, 'hi', 1656882313, 1, 'text', '', 0),
(546, 42, 58, 'man', 1656917492, 1, 'both', '1656917492--ቴዎድሮስ አንተ ፊት.mp3', 5603985);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationID` int(11) NOT NULL,
  `noticeReceiverEmail` text NOT NULL,
  `subject` text NOT NULL,
  `notificationStatus` int(11) NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `noticeReceiverID` int(11) NOT NULL,
  `notice` longtext NOT NULL,
  `notifiedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationID`, `noticeReceiverEmail`, `subject`, `notificationStatus`, `timeAgo`, `noticeReceiverID`, `notice`, `notifiedDate`) VALUES
(349, 'hailemelekotmelakie19@gmail.com', 'vgn', 0, 1655581720, 0, 'dgnhg', '2022-06-18 19:54:59'),
(350, 'bukayaw@g.c', 'multi casting working', 0, 1655581752, 0, 'multi casting working', '2022-06-19 19:59:49'),
(351, 'tessema@g.c', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:12'),
(352, 'awoke@g.c', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:12'),
(353, 'MILLIYONDESTAW@GMAIL.COM', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:12'),
(354, 'abebe@gmail.com', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:13'),
(355, 'trial@g.com', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:13'),
(356, '0947053537Haile@gmail.com', 'multi casting working', 0, 1655581752, 0, 'multi casting working', '2022-06-25 22:03:27'),
(357, 'respectjemora@gmail.com', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:13'),
(358, 'hailemelekotmelakie1991@gmail.com', 'multi casting working', 0, 1655581752, 0, 'multi casting working', '2022-06-18 19:56:16'),
(359, 'hailemelekotmelakie19@gmail.com', 'multi casting working', 0, 1655581752, 0, 'multi casting working', '2022-06-18 19:54:59'),
(360, 'ligabawmita@gmail.com', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:13'),
(361, 'workinehzefirst@gmail.com', 'multi casting working', 0, 1655581752, 0, 'multi casting working', '2022-06-18 19:59:07'),
(362, 'teddyafro1990@gmail.com', 'multi casting working', 0, 1655581752, 0, 'multi casting working', '2022-06-24 19:15:55'),
(363, 'Mogesmelakie2002@gmail.com', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:13'),
(364, 'prealoader123@gmail.com', 'multi casting working', 1, 1655581752, 0, 'multi casting working', '2022-06-18 19:49:13'),
(365, 'bukayaw@g.c', ' ', 0, 1655581826, 0, ' ', '2022-06-19 19:59:49'),
(366, 'tessema@g.c', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(367, 'awoke@g.c', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(368, 'MILLIYONDESTAW@GMAIL.COM', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(369, 'abebe@gmail.com', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(370, 'trial@g.com', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(371, '0947053537Haile@gmail.com', ' ', 0, 1655581826, 0, ' ', '2022-06-25 22:03:27'),
(372, 'respectjemora@gmail.com', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(373, 'hailemelekotmelakie1991@gmail.com', ' ', 0, 1655581826, 0, ' ', '2022-06-18 19:56:16'),
(374, 'hailemelekotmelakie19@gmail.com', ' ', 0, 1655581826, 0, ' ', '2022-06-18 19:54:59'),
(375, 'ligabawmita@gmail.com', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(376, 'workinehzefirst@gmail.com', ' ', 0, 1655581826, 0, ' ', '2022-06-18 19:59:07'),
(377, 'teddyafro1990@gmail.com', ' ', 0, 1655581826, 0, ' ', '2022-06-24 19:15:55'),
(378, 'Mogesmelakie2002@gmail.com', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(379, 'prealoader123@gmail.com', ' ', 1, 1655581826, 0, ' ', '2022-06-18 19:50:27'),
(380, 'bukayaw@g.c', ' ', 0, 1655581839, 0, ' ', '2022-06-19 19:59:49'),
(381, 'tessema@g.c', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(382, 'awoke@g.c', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(383, 'MILLIYONDESTAW@GMAIL.COM', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(384, 'abebe@gmail.com', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(385, 'trial@g.com', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(386, '0947053537Haile@gmail.com', ' ', 0, 1655581839, 0, ' ', '2022-06-25 22:03:27'),
(387, 'respectjemora@gmail.com', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(388, 'hailemelekotmelakie1991@gmail.com', ' ', 0, 1655581839, 0, ' ', '2022-06-18 19:56:16'),
(389, 'hailemelekotmelakie19@gmail.com', ' ', 0, 1655581839, 0, ' ', '2022-06-18 19:54:59'),
(390, 'ligabawmita@gmail.com', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:39'),
(391, 'workinehzefirst@gmail.com', ' ', 0, 1655581839, 0, ' ', '2022-06-18 19:59:07'),
(392, 'teddyafro1990@gmail.com', ' ', 0, 1655581839, 0, ' ', '2022-06-24 19:15:55'),
(393, 'Mogesmelakie2002@gmail.com', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:40'),
(394, 'prealoader123@gmail.com', ' ', 1, 1655581839, 0, ' ', '2022-06-18 19:50:40'),
(397, 'bukayaw@g.c', 'k.jned.kjnce', 0, 1655582849, 0, 'nk.jnec', '2022-06-19 19:59:49'),
(398, 'tessema@g.c', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(399, 'awoke@g.c', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(400, 'MILLIYONDESTAW@GMAIL.COM', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(401, 'abebe@gmail.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(402, 'trial@g.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(403, '0947053537Haile@gmail.com', 'k.jned.kjnce', 0, 1655582849, 0, 'nk.jnec', '2022-06-25 22:03:27'),
(404, 'respectjemora@gmail.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(405, 'hailemelekotmelakie1991@gmail.com', 'k.jned.kjnce', 0, 1655582849, 0, 'nk.jnec', '2022-06-19 07:58:52'),
(406, 'hailemelekotmelakie19@gmail.com', 'k.jned.kjnce', 0, 1655582849, 0, 'nk.jnec', '2022-06-19 07:55:23'),
(407, 'ligabawmita@gmail.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(408, 'workinehzefirst@gmail.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(409, 'teddyafro1990@gmail.com', 'k.jned.kjnce', 0, 1655582849, 0, 'nk.jnec', '2022-06-24 19:15:55'),
(410, 'Mogesmelakie2002@gmail.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(411, 'prealoader123@gmail.com', 'k.jned.kjnce', 1, 1655582849, 0, 'nk.jnec', '2022-06-18 20:07:30'),
(412, 'hailemelekotmelakie19@gmail.com', 'Replay', 0, 1655625276, 0, 'Thank you for your commenting!!!', '2022-06-19 07:55:23'),
(413, 'hailemelekotmelakie19@gmail.com', 'trial again', 0, 1655625492, 0, 'Good job', '2022-06-27 17:08:24'),
(414, 'hailemelekotmelakie19@gmail.com', 'trial again', 0, 1655625749, 0, 'Good job', '2022-06-27 17:08:24'),
(415, 'hailemelekotmelakie19@gmail.com', 'trial again', 0, 1655625940, 0, 'Good job', '2022-06-27 17:08:24'),
(416, 'bukayaw@g.c', '', 0, 1655987865, 0, 'HAMLWERR', '2022-06-30 06:27:39'),
(417, 'tessema@g.c', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:45'),
(418, 'awoke@g.c', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:45'),
(419, 'MILLIYONDESTAW@GMAIL.COM', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:45'),
(420, 'abebe@gmail.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:45'),
(421, 'trial@g.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:45'),
(422, '0947053537Haile@gmail.com', '', 0, 1655987865, 0, 'HAMLWERR', '2022-06-25 22:03:27'),
(423, 'respectjemora@gmail.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:46'),
(424, 'hailemelekotmelakie1991@gmail.com', '', 0, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:38:00'),
(425, 'hailemelekotmelakie19@gmail.com', '', 0, 1655987865, 0, 'HAMLWERR', '2022-06-27 17:08:24'),
(426, 'ligabawmita@gmail.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:46'),
(427, 'workinehzefirst@gmail.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:46'),
(428, 'teddyafro1990@gmail.com', '', 0, 1655987865, 0, 'HAMLWERR', '2022-06-24 19:15:55'),
(429, 'Mogesmelakie2002@gmail.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:46'),
(430, 'prealoader123@gmail.com', '', 1, 1655987865, 0, 'HAMLWERR', '2022-06-23 12:37:46'),
(431, 'creativecommons1991@gmail.com', '', 0, 1655987865, 0, 'HAMLWERR', '2022-06-23 20:31:08'),
(432, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com	', 0, 1656021462, 0, 'hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	hailemelekotmelakie19@gmail.com	', '2022-06-27 17:08:24'),
(433, 'hailemelekotmelakie1991@gmail.com', 'hailemelekotmelakie1991@gmail.com	', 0, 1656021513, 0, 'hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	hailemelekotmelakie1991@gmail.com	', '2022-06-24 21:15:40'),
(434, 'hailemelekotmelakie1991@gmail.com', 'NOTICE FOR YOU!!!', 0, 1656021794, 0, 'MAN YOU ARE FAKE.', '2022-06-24 21:15:40'),
(435, 'hailemelekotmelakie1991@gmail.com', 'NOTICE FOR YOU!!!', 0, 1656023596, 0, 'kk', '2022-06-24 21:15:40'),
(436, 'hailemelekotmelakie1991@gmail.com', 'hailemelekotmelakie19@gmail.com	', 0, 1656023967, 0, 'work', '2022-06-24 21:15:40'),
(437, 'hailemelekotmelakie1991@gmail.com', 'NOTICE FOR YOU!!!', 0, 1656024000, 0, '4frf', '2022-06-24 21:15:40'),
(438, 'hailemelekotmelakie1991@gmail.com', 'l', 0, 1656024070, 0, 'k', '2022-06-24 21:15:40'),
(439, 'hailemelekotmelakie1991@gmail.com', 'nn', 0, 1656024349, 0, 'jj', '2022-06-24 21:15:40'),
(440, 'bukayaw@g.c', 'multicast email', 0, 1656024376, 0, 'multicast email', '2022-06-30 06:27:39'),
(441, 'tessema@g.c', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:16'),
(442, 'awoke@g.c', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:16'),
(443, 'MILLIYONDESTAW@GMAIL.COM', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(444, 'abebe@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(445, 'trial@g.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(446, '0947053537Haile@gmail.com', 'multicast email', 0, 1656024376, 0, 'multicast email', '2022-06-25 22:03:27'),
(447, 'respectjemora@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(448, 'hailemelekotmelakie1991@gmail.com', 'multicast email', 0, 1656024376, 0, 'multicast email', '2022-06-24 21:15:40'),
(449, 'hailemelekotmelakie19@gmail.com', 'multicast email', 0, 1656024376, 0, 'multicast email', '2022-06-27 17:08:24'),
(450, 'ligabawmita@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(451, 'workinehzefirst@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(452, 'teddyafro1990@gmail.com', 'multicast email', 0, 1656024376, 0, 'multicast email', '2022-06-24 19:15:55'),
(453, 'Mogesmelakie2002@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(454, 'prealoader123@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(455, 'creativecommons1991@gmail.com', 'multicast email', 1, 1656024376, 0, 'multicast email', '2022-06-23 22:46:17'),
(456, 'hailemelekotmelakie1991@gmail.com', 'kxs', 0, 1656024431, 0, 'ks', '2022-06-24 21:15:40'),
(457, 'bukayaw@g.c', 'multicast email', 0, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-30 06:27:39'),
(458, 'tessema@g.c', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:47'),
(459, 'awoke@g.c', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:47'),
(460, 'MILLIYONDESTAW@GMAIL.COM', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(461, 'abebe@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(462, 'trial@g.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(463, '0947053537Haile@gmail.com', 'multicast email', 0, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-25 22:03:27'),
(464, 'respectjemora@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(465, 'hailemelekotmelakie1991@gmail.com', 'multicast email', 0, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-24 21:15:40'),
(466, 'hailemelekotmelakie19@gmail.com', 'multicast email', 0, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-27 17:08:24'),
(467, 'ligabawmita@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(468, 'workinehzefirst@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(469, 'teddyafro1990@gmail.com', 'multicast email', 0, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-24 19:15:55'),
(470, 'Mogesmelakie2002@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(471, 'prealoader123@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(472, 'creativecommons1991@gmail.com', 'multicast email', 1, 1656024527, 0, 'http://localhost/2014/Freelancer/Admin%20pages/Notices.php', '2022-06-23 22:48:48'),
(473, 'bukayaw@g.c', '1', 0, 1656024610, 0, '1', '2022-06-30 06:27:39'),
(474, 'tessema@g.c', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(475, 'awoke@g.c', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(476, 'MILLIYONDESTAW@GMAIL.COM', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(477, 'abebe@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(478, 'trial@g.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(479, '0947053537Haile@gmail.com', '1', 0, 1656024610, 0, '1', '2022-06-25 22:03:27'),
(480, 'respectjemora@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(481, 'hailemelekotmelakie1991@gmail.com', '1', 0, 1656024610, 0, '1', '2022-06-24 21:15:40'),
(482, 'hailemelekotmelakie19@gmail.com', '1', 0, 1656024610, 0, '1', '2022-06-27 17:08:24'),
(483, 'ligabawmita@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(484, 'workinehzefirst@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(485, 'teddyafro1990@gmail.com', '1', 0, 1656024610, 0, '1', '2022-06-24 19:15:55'),
(486, 'Mogesmelakie2002@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(487, 'prealoader123@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(488, 'creativecommons1991@gmail.com', '1', 1, 1656024610, 0, '1', '2022-06-23 22:50:10'),
(489, 'bukayaw@g.c', '1', 0, 1656024650, 0, '1', '2022-06-30 06:27:39'),
(490, 'tessema@g.c', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:50'),
(491, 'awoke@g.c', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:50'),
(492, 'MILLIYONDESTAW@GMAIL.COM', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:50'),
(493, 'abebe@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:50'),
(494, 'trial@g.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:50'),
(495, '0947053537Haile@gmail.com', '1', 0, 1656024650, 0, '1', '2022-06-25 22:03:27'),
(496, 'respectjemora@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:51'),
(497, 'hailemelekotmelakie1991@gmail.com', '1', 0, 1656024650, 0, '1', '2022-06-24 21:15:40'),
(498, 'hailemelekotmelakie19@gmail.com', '1', 0, 1656024650, 0, '1', '2022-06-27 17:08:24'),
(499, 'ligabawmita@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:51'),
(500, 'workinehzefirst@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:51'),
(501, 'teddyafro1990@gmail.com', '1', 0, 1656024650, 0, '1', '2022-06-24 19:15:55'),
(502, 'Mogesmelakie2002@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:51'),
(503, 'prealoader123@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:51'),
(504, 'creativecommons1991@gmail.com', '1', 1, 1656024650, 0, '1', '2022-06-23 22:50:51'),
(505, 'bukayaw@g.c', '1', 0, 1656024704, 0, '1', '2022-06-30 06:27:39'),
(506, 'tessema@g.c', '1', 1, 1656024704, 0, '1', '2022-06-23 22:51:47'),
(507, 'awoke@g.c', '1', 1, 1656024704, 0, '1', '2022-06-23 22:51:51'),
(508, 'MILLIYONDESTAW@GMAIL.COM', '1', 1, 1656024704, 0, '1', '2022-06-23 22:51:54'),
(509, 'abebe@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:51:57'),
(510, 'trial@g.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:00'),
(511, '0947053537Haile@gmail.com', '1', 0, 1656024704, 0, '1', '2022-06-25 22:03:27'),
(512, 'respectjemora@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:06'),
(513, 'hailemelekotmelakie1991@gmail.com', '1', 0, 1656024704, 0, '1', '2022-06-24 21:15:40'),
(514, 'hailemelekotmelakie19@gmail.com', '1', 0, 1656024704, 0, '1', '2022-06-27 17:08:24'),
(515, 'ligabawmita@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:16'),
(516, 'workinehzefirst@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:19'),
(517, 'teddyafro1990@gmail.com', '1', 0, 1656024704, 0, '1', '2022-06-24 19:15:55'),
(518, 'Mogesmelakie2002@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:26'),
(519, 'prealoader123@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:30'),
(520, 'creativecommons1991@gmail.com', '1', 1, 1656024704, 0, '1', '2022-06-23 22:52:33'),
(521, 'hailemelekotmelakie1991@gmail.com', 'NOTICE FOR YOU!!!', 0, 1656025262, 0, 'https://www.youtube.com/channel/UCXCu3LIWOIbwnxBue1ztUBQ', '2022-06-24 21:15:40'),
(522, 'bukayaw@g.c', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:17'),
(523, 'tessema@g.c', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:20'),
(524, 'awoke@g.c', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:24'),
(525, 'MILLIYONDESTAW@GMAIL.COM', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:27'),
(526, 'abebe@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:30'),
(527, 'trial@g.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:33'),
(528, '0947053537Haile@gmail.com', 'ikknert', 0, 1656629177, 0, 'uhrk4', '2022-07-01 18:32:42'),
(529, 'respectjemora@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:40'),
(530, 'hailemelekotmelakie1991@gmail.com', 'ikknert', 0, 1656629177, 0, 'uhrk4', '2022-07-03 18:19:05'),
(531, 'hailemelekotmelakie19@gmail.com', 'ikknert', 0, 1656629177, 0, 'uhrk4', '2022-06-30 22:47:51'),
(532, 'ligabawmita@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:49'),
(533, 'workinehzefirst@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:52'),
(534, 'teddyafro1990@gmail.com', 'ikknert', 0, 1656629177, 0, 'uhrk4', '2022-07-01 16:53:14'),
(535, 'Mogesmelakie2002@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:46:59'),
(536, 'prealoader123@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:47:02'),
(537, 'creativecommons1991@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:47:05'),
(538, 'admin1@gmail.com', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:47:08'),
(539, 'kednjdhb@ihujfe.ifj', 'ikknert', 1, 1656629177, 0, 'uhrk4', '2022-06-30 22:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportID` int(11) NOT NULL,
  `reportedID` int(11) NOT NULL,
  `reportDiscussion` mediumtext NOT NULL,
  `reportedName` text NOT NULL,
  `reportedEmail` text NOT NULL,
  `reporterEmail` text NOT NULL,
  `timeAgo` int(11) NOT NULL,
  `ReporteDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportID`, `reportedID`, `reportDiscussion`, `reportedName`, `reportedEmail`, `reporterEmail`, `timeAgo`, `ReporteDate`) VALUES
(1, 59, 'hi steal me', 'metawork ligabaw', 'ligabawmita@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653942635, '2022-05-30 20:30:35'),
(2, 58, 'kkdk', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653944539, '2022-05-30 21:02:19'),
(3, 58, 'kk', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653944897, '2022-05-30 21:08:17'),
(4, 58, 'ee', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653944940, '2022-05-30 21:09:00'),
(5, 58, 'than', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653944953, '2022-05-30 21:09:13'),
(6, 58, 'kke', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653945017, '2022-05-30 21:10:17'),
(7, 58, 'k', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653945069, '2022-05-30 21:11:09'),
(8, 58, 'w', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653945101, '2022-05-30 21:11:41'),
(9, 58, 'w', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1653945113, '2022-05-30 21:11:53'),
(10, 58, 'uu', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', 1653980806, '2022-05-31 07:06:46'),
(11, 58, 'xdhrgfkmjhm', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', 1653982460, '2022-05-31 07:34:20'),
(12, 58, 'xx', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', 1654039678, '2022-05-31 23:27:58'),
(13, 57, 'k.4thi;o5h', 'haile melakei', 'hailemelekotmelakie1991@gmail.com', 'hailemelekotmelakie19@gmail.com', 1654069859, '2022-06-01 07:50:59'),
(14, 58, 'juy4rifu', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1654108232, '2022-06-01 18:30:32'),
(15, 58, 'mkdmdkdm', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', 1654236144, '2022-06-03 06:02:24'),
(16, 57, 'ke', 'haile melakei', 'hailemelekotmelakie1991@gmail.com', 'teddyafro1990@gmail.com', 1654434976, '2022-06-05 13:16:16'),
(17, 57, 'nb', 'haile melakei', 'hailemelekotmelakie1991@gmail.com', 'teddyafro1990@gmail.com', 1654436469, '2022-06-05 13:41:09'),
(18, 57, 'kkkwe', 'haile melakei', 'hailemelekotmelakie1991@gmail.com', 'teddyafro1990@gmail.com', 1654543257, '2022-06-06 19:20:57'),
(19, 58, 'hr,fkthjnp5jogt5o', 'ha19', 'hailemelekotmelakie19@gmail.com', 'teddyafro1990@gmail.com', 1654547942, '2022-06-06 20:39:02'),
(20, 57, 'HE is Scammer bra please be carefull.', 'haile melakei', 'hailemelekotmelakie1991@gmail.com', 'hailemelekotmelakie19@gmail.com', 1655584094, '2022-06-18 20:28:14'),
(21, 60, 'bu bu bu', 'workineh ALENE', 'workinehzefirst@gmail.com', 'hailemelekotmelakie1991@gmail.com', 1655987425, '2022-06-23 12:30:25'),
(22, 58, 'እክደ', 'ha19', 'hailemelekotmelakie19@gmail.com', '0947053537Haile@gmail.com', 1656279428, '2022-06-26 21:37:08'),
(23, 58, 'jug,igyuh', 'ha19', 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', 1656629333, '2022-06-30 22:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `revenues`
--

CREATE TABLE `revenues` (
  `RevenuesID` int(11) NOT NULL,
  `RevenuesUserName` text NOT NULL,
  `RevenuesUserID` int(11) NOT NULL,
  `RevenuesUserBalance` double NOT NULL,
  `RevenuesProfit` double NOT NULL,
  `RevenuesTotal` double NOT NULL,
  `RevenuesBankAccount` int(11) NOT NULL,
  `RevenuesReceiverUserEmail` text NOT NULL,
  `RevenuesSenderUserEmail` text NOT NULL,
  `fundedDay` text NOT NULL,
  `fundedDate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `revenues`
--

INSERT INTO `revenues` (`RevenuesID`, `RevenuesUserName`, `RevenuesUserID`, `RevenuesUserBalance`, `RevenuesProfit`, `RevenuesTotal`, `RevenuesBankAccount`, `RevenuesReceiverUserEmail`, `RevenuesSenderUserEmail`, `fundedDay`, `fundedDate`) VALUES
(1, 'workineh the first', 60, 100, 0, 2000, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '20/05/2022', 'Friday'),
(2, 'workineh the first', 60, 13.2, 0, 264, 2147483647, 'hailemelekotmelakie1991@gmail.com', 'workinehzefirst@gmail.com', '20/05/2022', 'Friday'),
(3, 'workineh the first', 60, 20, 20, 400, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '20/05/2022', 'Friday'),
(4, 'workineh the first', 60, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '20/05/2022', 'Friday'),
(5, 'workineh the first', 60, 50, 50, 1000, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '20/05/2022', 'Friday'),
(6, 'rjhhj jrb fj', 60, 0.55, 0.55, 11, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '21/05/2022', 'Saturday'),
(7, 'rjhhj jrb fj', 60, 2.75, 2.75, 55, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '21/05/2022', 'Saturday'),
(8, 'rjhhj jrb fj', 60, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '21/05/2022', 'Saturday'),
(9, 'tessema', 57, 100, 100, 2000, 2147483647, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', '21/05/2022', 'Saturday'),
(10, 'tessema', 57, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', '21/05/2022', 'Saturday'),
(11, 'uruu rjjrjr jjj', 60, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '23/05/2022', 'Monday'),
(12, 'tessema', 57, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', '26/05/2022', 'Thursday'),
(13, 'tessema', 57, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie1991@gmail.com', '26/05/2022', 'Thursday'),
(14, 'Hailemelekot Mlekie tekef', 58, 2.75, 2.75, 55, 2147483647, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', '31/05/2022', 'Tuesday'),
(15, 'Hailemelekot Mlekie tekef', 58, 5, 5, 100, 2147483647, 'hailemelekotmelakie19@gmail.com', 'hailemelekotmelakie19@gmail.com', '01/06/2022', 'Wednesday'),
(16, 'uruu rjjrjr jjj', 60, 50, 50, 1000, 2147483647, 'hailemelekotmelakie1991@gmail.com', 'workinehzefirst@gmail.com', '07/06/2022', 'Tuesday'),
(17, 'uruu rjjrjr jjj', 60, 9.7, 9.7, 194, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '09/06/2022', 'Thursday'),
(18, 'uruu rjjrjr jjj', 60, 50, 50, 1000, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '17/06/2022', 'Friday'),
(19, 'uruu rjjrjr jjj', 60, 10, 10, 200, 2147483647, 'hailemelekotmelakie19@gmail.com', 'workinehzefirst@gmail.com', '21/06/2022', 'Tuesday'),
(20, 'uruu rjjrjr jjj', 60, 4.55, 4.55, 91, 2147483647, 'teddyafro1990@gmail.com', 'workinehzefirst@gmail.com', '21/06/2022', 'Tuesday'),
(21, '33333 iie cien', 32, 10, 10, 200, 2147483647, 'teddyafro1990@gmail.com', 'bukayaw@g.c', '22/06/2022', 'Wednesday'),
(22, 'tessema melakie tewopwb', 62, 1.15, 1.15, 23, 0, 'teddyafro1990@gmail.com', 'teddyafro1990@gmail.com', '28/06/2022', 'Tuesday'),
(23, 'haile melakie tewokef', 58, 5, 5, 100, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '28/06/2022', 'Tuesday'),
(24, 'haile melakie tewokef', 58, 5, 5, 100, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '28/06/2022', 'Tuesday'),
(25, 'haile melakie tewokef', 58, 5, 5, 100, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '28/06/2022', 'Tuesday'),
(26, 'tessema melakie tewopwb', 62, 5.1, 5.1, 102, 0, 'hailemelekotmelakie19@gmail.com', 'teddyafro1990@gmail.com', '28/06/2022', 'Tuesday'),
(27, 'haile melakie tewokef', 58, 49.5, 49.5, 990, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(28, 'haile melakie tewokef', 58, 0.3, 0.3, 6, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(29, 'haile melakie tewokef', 58, 0.45, 0.45, 9, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(30, 'haile melakie tewokef', 58, 0.35, 0.35, 7, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(31, 'haile melakie tewokef', 58, 0.2, 0.2, 4, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(32, 'haile melakie tewokef', 58, 4, 4, 80, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(33, 'haile melakie tewokef', 58, 0.45, 0.45, 9, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(34, 'haile melakie tewokef', 58, 0.05, 0.05, 1, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(35, 'haile melakie tewokef', 58, 0.45, 0.45, 9, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(36, 'haile melakie tewokef', 58, 0.45, 0.45, 9, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(37, 'haile melakie tewokef', 58, 0.4, 0.4, 8, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(38, 'haile melakie tewokef', 58, 0.45, 0.45, 9, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(39, 'haile melakie tewokef', 58, 0.25, 0.25, 5, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(40, 'haile melakie tewokef', 58, 2.5, 2.5, 50, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(41, 'haile melakie tewokef', 58, 5, 5, 100, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(42, 'haile melakie tewokef', 58, 0.5, 0.5, 10, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(43, 'haile melakie tewokef', 58, 2, 2, 40, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(44, 'haile melakie tewokef', 58, 0.45, 0.45, 9, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(45, 'haile melakie tewokef', 58, 0.6, 0.6, 12, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(46, 'haile melakie tewokef', 58, 5, 5, 100, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(47, 'haile melakie tewokef', 58, 1.45, 1.45, 29, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '30/06/2022', 'Thursday'),
(48, 'haile melakie tewokef', 58, 45, 45, 900, 2147483647, 'teddyafro1990@gmail.com', 'hailemelekotmelakie19@gmail.com', '01/07/2022', 'Friday'),
(49, 'Haile ggsgd duhd', 57, 50, 50, 1000, 2147483647, 'jrmekdim50@gmail.com', 'hailemelekotmelakie1991@gmail.com', '03/07/2022', 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL,
  `reviewerSender` text NOT NULL,
  `reviewerReceiver` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `timeAgo` int(11) NOT NULL,
  `temporaryBalance` double NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewID`, `reviewerSender`, `reviewerReceiver`, `date`, `timeAgo`, `temporaryBalance`, `review`) VALUES
(1, 'hailemelekotmelakie19@gmail.com', '', '2022-06-30 20:04:02', 0, 0, 'he is aiedjeuid');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `dateOfRegister` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role` text NOT NULL,
  `banning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`, `dateOfRegister`, `role`, `banning`) VALUES
(32, 'bukayaw', 'bukayaw@g.c', '$2y$10$K9FoJy9HgDKKukB0UACQA.T2ve.LyJs7gvCB6ZMFE26EwSj.l6y9e', 959644, 'verified', '2022-06-23 21:55:12', '', ''),
(33, 'tessema', 'tessema@g.c', '$2y$10$bTuwAl3TpU8yRyb/cr3ED.04aa9lOCkoLAXaA9f2Aercecqbn5.BK', 0, 'verified', '2022-03-07 21:58:16', '', ''),
(34, 'awoke', 'awoke@g.c', '$2y$10$OZa8LOifWvcCuxZQv7qduukJwCKLa48ax0mZdq5HoZpF8CivdLT5K', 0, 'verified', '2022-03-07 21:58:16', '', ''),
(35, 'MILLIYON', 'MILLIYONDESTAW@GMAIL.COM', '$2y$10$HkeXENVIcmqbGTJ7Gpoicex8buY0D1WeuaujWyyTOffQpQnW.OAjq', 0, 'verified', '2022-03-07 21:58:16', '', ''),
(36, 'abebe', 'abebe@gmail.com', '$2y$10$jk3Pc0K4DAbmDKBVCleMCedWym3ANjXDNggE6gsN58utHJlgkJXc.', 0, 'verified', '2022-03-07 21:58:16', '', ''),
(39, 'trial', 'trial@g.com', '$2y$10$LlNrJMYX/g.Rj0.41EX9/uh/Kn3g8zUuq0QmKkWwYcxHJk4DT4F1K', 0, 'verified', '2022-03-07 21:58:16', '', ''),
(42, 'php mailer', '0947053537Haile@gmail.com', '$2y$10$2i4/svS8biYuHCzZt8HBq.diD3N7JwWGTnDCyFnMcHAFBJcEDI5OK', 0, 'verified', '2022-06-25 06:32:45', '', ''),
(46, 'respectjem oragmailcom', 'respectjemora@gmail.com', '$2y$10$4lF5uxQ0LD2SvNlHSZA9bu6DWfAfdjR96pxJggxoAtCj6LhYo3rV.', 662180, 'verified', '2022-06-22 21:24:59', '', ''),
(57, 'haile melakei', 'hailemelekotmelakie1991@gmail.com', '$2y$10$8XctHDUAinC4y2lDMC8KB.SCI3pdD.bJvVa4o9IjKrxS4Xxol7ypq', 0, 'verified', '2022-07-04 08:00:32', 'Active', ''),
(58, 'ha19', 'hailemelekotmelakie19@gmail.com', '$2y$10$8mnCgvWJ0mvSE/6M9/K7lepIvDVEaNAnhidLKCfOImWLjjTb784UO', 661183, 'verified', '2022-07-04 08:21:07', 'Active', ''),
(59, 'metawork ligabaw', 'ligabawmita@gmail.com', '$2y$10$XDoUm1zGKL1GtOcMoL8q4.aQBB3BKfJ7XnpFx6R40avehJUDLfssy', 0, 'verified', '2022-05-09 19:31:23', '', ''),
(60, 'workineh ALENE', 'workinehzefirst@gmail.com', '$2y$10$VK.c3WF6mDSc4w9XklCNeuJS/IoFQO32kegHjzY24JY4KVfqiI18y', 0, 'verified', '2022-05-14 05:45:18', '', ''),
(62, 'Teddy Afro', 'teddyafro1990@gmail.com', '$2y$10$XaIvklwDB./bMPC18hD3BeiTcR4tOFu3zgdQjXIDReo3k7C4Tnc1e', 253890, 'verified', '2022-06-22 20:59:38', '', ''),
(63, 'm0ges melakie', 'Mogesmelakie2002@gmail.com', '$2y$10$DFxyrlFB8j5.TTLSBr2mPejQUop4ghdqXT5F49ciy4x2khSznH/Nq', 0, 'verified', '2022-06-07 05:47:21', '', ''),
(64, 'prealoader prealoader', 'prealoader123@gmail.com', '$2y$10$4Qu4AwHEstDg2Ntjn/PiwuZopDg7gQ8HSn0MJG1hljIg7g0q8au2e', 326402, 'verified', '2022-06-07 19:57:38', '', ''),
(71, 'creative commons', 'creativecommons1991@gmail.com', '$2y$10$zIiQJK75iHm2rvl8CrXtQuOQ4XB.gXj0nJs9rMV/0a9EnIjNQEVJC', 0, 'verified', '2022-06-23 20:32:15', '', ''),
(72, 'admin admin', 'admin1@gmail.com', '$2y$10$ro7TmjkFbZVMHMXpXTQmiuEReQyV6/Ex9/d.lYoq01YZOzmaN6gtm', 0, 'verified', '2022-06-25 13:43:19', 'Active', ''),
(73, 'udhhfuuur ekkyyfr', 'kednjdhb@ihujfe.ifj', '$2y$10$7BLjzkWs/qmG2V8vFGukSevm6ph6TMHcTNK43mMAGfoyZaf0sbPUO', 619305, 'notverified', '2022-06-28 22:08:11', '', ''),
(74, 'Mekdim tamirat', 'jrmekdim50@gmail.com', '$2y$10$E4wsnLLHfoqhH9t4OwJTlOtjm6wYVeCxNcsE/N4n3VcPqYlb9GWhi', 0, 'verified', '2022-07-03 15:59:07', '', ''),
(75, 'Hailemariam Addis', 'hailemariamaddisu21@gmail.com', '$2y$10$l9BLxTh3x6wSNfqojnIyDu3h7oYyV3ll/6ZnWBYhA31eA/sg2GqBG', 0, 'verified', '2022-07-03 15:42:48', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bankrecords`
--
ALTER TABLE `bankrecords`
  ADD PRIMARY KEY (`recordID`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bidID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `detailedinfo`
--
ALTER TABLE `detailedinfo`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fundtransactions`
--
ALTER TABLE `fundtransactions`
  ADD PRIMARY KEY (`fundID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messages_ID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportID`);

--
-- Indexes for table `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`RevenuesID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bankrecords`
--
ALTER TABLE `bankrecords`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bidID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fundtransactions`
--
ALTER TABLE `fundtransactions`
  MODIFY `fundID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messages_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=547;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `RevenuesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
