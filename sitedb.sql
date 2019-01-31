-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 01:43 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `friendreq`
--

CREATE TABLE `friendreq` (
  `ID` int(11) NOT NULL,
  `From_F` int(10) NOT NULL,
  `To_F` int(10) NOT NULL,
  `Date_F` varchar(10) NOT NULL,
  `Accept_Friend` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendreq`
--

INSERT INTO `friendreq` (`ID`, `From_F`, `To_F`, `Date_F`, `Accept_Friend`) VALUES
(3, 17, 7, '2019/01/31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `ID` int(11) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Message` varchar(1024) NOT NULL,
  `To_M` int(11) NOT NULL,
  `From_M` int(11) NOT NULL,
  `Read_M` int(2) NOT NULL,
  `Date_M` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `Subject`, `Message`, `To_M`, `From_M`, `Read_M`, `Date_M`) VALUES
(1, 'Subiect', 'Mesaj', 8, 7, 1, ''),
(2, 'Salut!', 'Ce faci?', 10, 7, 1, ''),
(3, 'Salut!', 'Ce faci?', 7, 16, 1, ''),
(5, 'Salut!', '', 7, 16, 1, ''),
(6, 'Salut!', 'Ce faci?', 7, 16, 1, ''),
(7, 'rsarasfas', 'tastsaf', 16, 7, 0, '2019/01/31'),
(8, 'fasfsasfaf', 'sfasf asfasfasf asfasfas fasfasfa sfasfa sfasfasf asfas fasfasf asfasfa sfasfasfas fasfasf asfasf asfa sfas fasfa', 7, 16, 1, '2019/01/31'),
(9, 'Reply(rsarasfas)', 'fas', 7, 16, 1, '2019/01/31'),
(10, 'Reply(Reply(rsarasfa', 'fasfsafsa', 16, 7, 0, '2019/01/31'),
(11, 'Reply(Salut!)', 'fsafsa', 16, 7, 1, '2019/01/31'),
(12, '<?php exit(0); ?>', '<?php\r\n\r\n\r\n?>', 12, 7, 1, '2019/01/31'),
(13, 'Salut!', 'Sdasda', 12, 7, 1, '2019/01/31'),
(14, 'fasfas', 'fasfsa', 9, 7, 1, '2019/01/31'),
(15, 'fsafsa', 'fasfsa', 0, 7, 0, '2019/01/31'),
(16, 'fasfsa', 'fsafsa', 9, 7, 1, '2019/01/31'),
(17, 'fasfsa', 'fsafsa', 9, 7, 1, '2019/01/31'),
(18, 'Reply(Reply(rsarasfa', 'kjjkjkkjjk', 16, 7, 1, '2019/01/31'),
(19, 'Reply(Subiect)', 'uyuyuyuy', 7, 8, 1, '22019/01/31'),
(20, 'salut', 'ce fai?', 7, 17, 1, '2019/01/31'),
(21, 'Reply(salut)', 'bine, tu?', 17, 7, 1, '2019/01/31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Admin` int(2) NOT NULL,
  `Status_O` varchar(70) NOT NULL,
  `Logas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Password`, `Admin`, `Status_O`, `Logas`) VALUES
(7, 'Cezar397', 'ccatarau@gmail.com', '$2y$10$5t5nIMdmiPViYTlEuJlhLuA/x6ngF97zOQ9pOCWTJPO3J.vL0Kg1.', 4, '1521904575', 0),
(8, 'Matei', 'mateiutz@gmail.com', 'parolaeparola', 4, '0', 0),
(9, 'Cezar312', 'rororo@gmail.com', 'Parolaeparola', 0, '0', 0),
(10, 'Cezar312', 'rororo@gmail.com', '$2y$10$oJ03reidwrdHI6rJW9lnTej94zzz3zueuJE87AmYpNtiO6lr52dwO', 4, '0', 0),
(11, 'Cezar397', 'rontaila25@gmail.com', '$2y$10$jfTxMceU0f8JqudXWHxbgOxhn06.uWsvVhSBV2KBG5im11P9Xchy6', 0, '0', 0),
(12, 'Cezar397', 'ion@gmail.com', '$2y$10$vtlNgY4X2OrOWYHOu.28Oub50v6.dvzavEEsXqA1wVsRrcGt2hsbO', 4, '0', 0),
(13, 'Cezar397', 'asda@gmail.com', '$2y$10$N4dh26LFAhpYls0D69YNDOrO0F910j2vfGB0I39mSzwQVsMllLz9.', 0, '0', 0),
(14, 'Cezar397', 'sda@gmail.com', '$2y$10$pxun/pyFNl2ux1vnPwC50er6lUWOojczaeOZMYtxj7fik4WFz1qe2', 0, '0', 0),
(15, 'Cezar397', 'afasfa@gmail.com', '$2y$10$XIREW35A2KYRzJvkNkKIuu7f1f5Hy9135wD8KvqH.FfsU/Mt2BWCO', 2, '0', 0),
(16, 'Test', 'test@gmail.com', '$2y$10$xdMLQJjrTVUdz2HAN9yVqOmhNF7XGCpvAyV9CSLWXDWaw14vSDec2', 4, '0', 0),
(17, 'Florina', 'fandreia132@gmail.com', '$2y$10$XMEe7Sf5FueTKYQCGRR87OAKTqAsk8OXWE2B.1cpFPzIBMYItZrI2', 4, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friendreq`
--
ALTER TABLE `friendreq`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friendreq`
--
ALTER TABLE `friendreq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
