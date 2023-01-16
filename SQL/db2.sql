-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 21, 2022 at 06:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCategory` int(3) NOT NULL,
  `nameCategory` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `nameCategory`) VALUES
(24, 'Roman'),
(27, 'History'),
(28, 'Poem'),
(29, 'Science'),
(30, 'Informatics');

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `idCommand` int(3) NOT NULL,
  `idUserCommand` int(3) DEFAULT NULL,
  `amountCommand` int(3) NOT NULL,
  `dateCommand` datetime NOT NULL,
  `stateCommand` varchar(280) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `command`
--

INSERT INTO `command` (`idCommand`, `idUserCommand`, `amountCommand`, `dateCommand`, `stateCommand`) VALUES
(15, 16, 55, '2023-01-13 19:53:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `detailscommand`
--

CREATE TABLE `detailscommand` (
  `idDetailsCommand` int(3) NOT NULL,
  `idCommandDetailsCommand` int(3) DEFAULT NULL,
  `idProductDetailsCommand` int(3) DEFAULT NULL,
  `quantityDetailsCommand` int(3) NOT NULL,
  `priceDetailsCommand` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailscommand`
--

INSERT INTO `detailscommand` (`idDetailsCommand`, `idCommandDetailsCommand`, `idProductDetailsCommand`, `quantityDetailsCommand`, `priceDetailsCommand`) VALUES
(15, 15, 17, 1, 35),
(14, 15, 18, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idMember` int(3) NOT NULL,
  `pseudoMember` varchar(20) NOT NULL,
  `passwordMember` varchar(300) NOT NULL,
  `nameMember` varchar(20) NOT NULL,
  `firstnameMember` varchar(20) NOT NULL,
  `emailMember` varchar(50) NOT NULL,
  `cityMember` varchar(20) NOT NULL,
  `postalCodeMember` varchar(5) NOT NULL,
  `adressMember` varchar(50) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idMember`, `pseudoMember`, `passwordMember`, `nameMember`, `firstnameMember`, `emailMember`, `cityMember`, `postalCodeMember`, `adressMember`, `isAdmin`) VALUES
(18, 'user', 'user', 'user', 'user', 'user@gmail.com', 'Skopje', '10000', 'adresa', 0),
(17, 'admin', 'admin', 'admin', 'admin', 'admin@gmail.com', 'Probishtip', '22100', 'Lisa gara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(3) NOT NULL,
  `nameProduct` varchar(100) NOT NULL,
  `descriptionProduct` text NOT NULL,
  `imageProduct` varchar(250) NOT NULL,
  `priceProduct` int(3) NOT NULL,
  `stockProduct` int(3) NOT NULL,
  `idCategoryProduct` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `nameProduct`, `descriptionProduct`, `imageProduct`, `priceProduct`, `stockProduct`, `idCategoryProduct`) VALUES
(18, 'PHP', 'PHP', 'ezqj_php.png', 20, 10, 30),
(20, 'Monte-Cristo', 'Roman', 'cjzqf_monte-cristo.jpg', 35, 10, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`idCommand`),
  ADD KEY `idUserCommand` (`idUserCommand`);

--
-- Indexes for table `detailscommand`
--
ALTER TABLE `detailscommand`
  ADD PRIMARY KEY (`idDetailsCommand`),
  ADD KEY `idProductDetailsCommand` (`idProductDetailsCommand`),
  ADD KEY `idCommandDetailsCommand` (`idCommandDetailsCommand`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idMember`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `idCategoryProduct` (`idCategoryProduct`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `command`
--
ALTER TABLE `command`
  MODIFY `idCommand` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `detailscommand`
--
ALTER TABLE `detailscommand`
  MODIFY `idDetailsCommand` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idMember` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
