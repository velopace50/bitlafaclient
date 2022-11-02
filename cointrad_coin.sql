-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2022 at 07:32 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cointrad_coin`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `depositAmount` int(11) NOT NULL,
  `depositCurrency` varchar(50) NOT NULL,
  `depositDate` date NOT NULL,
  `depositMethod` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `kycdocuments`
--

CREATE TABLE `kycdocuments` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `docName` varchar(288) DEFAULT NULL,
  `docType` varchar(20) DEFAULT NULL,
  `docPath` varchar(288) DEFAULT NULL,
  `docSize` int(11) DEFAULT NULL,
  `docDate` date NOT NULL,
  `verfiedStatus` int(11) NOT NULL DEFAULT '0' COMMENT '0-not verified, 1-verified'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `loginhistory`
--

CREATE TABLE `loginhistory` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `loginDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `browser` varchar(50) NOT NULL,
  `ipAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `loginhistory`
--

INSERT INTO `loginhistory` (`id`, `userId`, `loginDate`, `browser`, `ipAddress`) VALUES
(5791, 9999, '2022-09-16 11:44:03', 'Google Chrome on linux', '185.125.171.120'),
(5792, 9999, '2022-10-13 13:37:44', 'Google Chrome on windows', '87.249.133.111'),
(5793, 9999, '2022-10-13 13:42:49', 'Google Chrome on windows', '87.249.133.111'),
(5794, 9999, '2022-10-13 14:50:47', 'Google Chrome on windows', '103.88.27.142'),
(5795, 9999, '2022-10-18 11:04:20', 'Google Chrome on linux', '95.214.52.189'),
(5796, 9999, '2022-10-18 12:49:39', 'Google Chrome on linux', '95.214.52.189'),
(5797, 9999, '2022-10-18 17:47:10', 'Google Chrome on linux', '204.85.191.7'),
(5798, 9999, '2022-10-20 14:51:25', 'Google Chrome on linux', '204.85.191.7'),
(5799, 9999, '2022-10-20 14:55:25', 'Google Chrome on linux', '204.85.191.7'),
(5800, 10004, '2022-10-20 17:38:51', 'Google Chrome on mac', '85.132.252.35'),
(5801, 10005, '2022-10-21 11:03:55', 'Google Chrome on linux', '45.134.225.36'),
(5802, 10003, '2022-10-21 16:16:33', 'Mozilla Firefox on linux', '139.162.177.117'),
(5803, 10005, '2022-10-21 17:51:52', 'Google Chrome on windows', '103.88.27.153'),
(5804, 10005, '2022-10-24 12:29:54', 'Google Chrome on windows', '115.186.169.106'),
(5805, 10005, '2022-10-24 16:38:18', 'Google Chrome on linux', '185.220.100.253'),
(5806, 10005, '2022-10-24 16:47:27', 'Google Chrome on windows', '45.248.76.188'),
(5807, 10005, '2022-10-25 17:18:30', 'Google Chrome on windows', '156.146.55.226'),
(5808, 10005, '2022-10-25 17:30:50', 'Google Chrome on windows', '188.43.235.177'),
(5809, 10005, '2022-10-25 17:40:54', 'Google Chrome on windows', '91.232.56.225'),
(5810, 10005, '2022-10-25 17:49:13', 'Google Chrome on windows', '156.146.55.226'),
(5811, 9999, '2022-10-25 18:07:17', 'Google Chrome on windows', '156.146.55.226'),
(5812, 9999, '2022-10-25 18:11:14', 'Google Chrome on windows', '156.146.55.226'),
(5813, 10005, '2022-10-26 21:03:02', 'Google Chrome on windows', '37.19.214.2'),
(5814, 10005, '2022-10-26 21:03:35', 'Google Chrome on windows', '188.43.235.177'),
(5815, 10005, '2022-10-26 21:04:34', 'Google Chrome on windows', '188.43.235.177'),
(5816, 10005, '2022-10-27 08:18:07', 'Google Chrome on windows', '185.149.143.94');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `senderUserId` int(11) NOT NULL,
  `receiverUserId` int(11) NOT NULL,
  `messageDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `department` varchar(50) NOT NULL,
  `isDeleteSender` int(11) NOT NULL DEFAULT '0',
  `isDeleteReceiver` int(11) NOT NULL DEFAULT '0',
  `isDraft` int(11) NOT NULL DEFAULT '0',
  `isNew` int(11) NOT NULL DEFAULT '1',
  `isnotified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `trades`
--

CREATE TABLE `trades` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `tradeDate` date NOT NULL,
  `tradeType` varchar(20) NOT NULL,
  `accountType` varchar(288) NOT NULL,
  `market` varchar(20) DEFAULT NULL,
  `tradeNumber` int(11) NOT NULL,
  `winlossTrade` varchar(30) NOT NULL,
  `profit` decimal(30,2) DEFAULT NULL,
  `currentBalance` decimal(30,2) NOT NULL,
  `screenshot` varchar(200) DEFAULT NULL,
  `profitpercentage` double NOT NULL,
  `totalprofit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(40) DEFAULT NULL,
  `lastName` varchar(40) DEFAULT NULL,
  `mainContactNumber` varchar(20) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `alternativeContact` varchar(255) DEFAULT NULL,
  `trialExpiryDate` date DEFAULT NULL,
  `dateCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `addressLine1` varchar(100) DEFAULT NULL,
  `addressLine2` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `bankName` varchar(100) DEFAULT NULL,
  `bankAddress` varchar(100) DEFAULT NULL,
  `bankAddress1` varchar(288) DEFAULT NULL,
  `bankAccountName` varchar(100) DEFAULT NULL,
  `bankAccountNumber` varchar(60) DEFAULT NULL,
  `bankSortCode` varchar(20) DEFAULT NULL,
  `bankSwiftBicCode` varchar(40) DEFAULT NULL,
  `bankIbanNumber` varchar(50) DEFAULT NULL,
  `accountManager` varchar(50) DEFAULT NULL,
  `accountType` varchar(50) DEFAULT NULL,
  `applicationType` varchar(50) DEFAULT NULL,
  `accountCurrency` varchar(288) DEFAULT NULL,
  `initialInvestment` int(11) DEFAULT NULL,
  `accountOpening` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dividendPayment` varchar(288) DEFAULT NULL,
  `kyc_aml_approve` varchar(50) DEFAULT 'no',
  `debitcard` varchar(50) DEFAULT 'no',
  `profilePath` varchar(288) DEFAULT '',
  `isSaveLoginHistory` int(11) DEFAULT '1',
  `active` int(11) DEFAULT '1',
  `agent` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstName`, `lastName`, `mainContactNumber`, `dateOfBirth`, `alternativeContact`, `trialExpiryDate`, `dateCreated`, `addressLine1`, `addressLine2`, `city`, `county`, `country`, `postalCode`, `bankName`, `bankAddress`, `bankAddress1`, `bankAccountName`, `bankAccountNumber`, `bankSortCode`, `bankSwiftBicCode`, `bankIbanNumber`, `accountManager`, `accountType`, `applicationType`, `accountCurrency`, `initialInvestment`, `accountOpening`, `dividendPayment`, `kyc_aml_approve`, `debitcard`, `profilePath`, `isSaveLoginHistory`, `active`, `agent`) VALUES
(9999, 'admin@cointraderclient.com', 'f7242af2a03360eeede10561194ab888', 'admin', '', NULL, '0000-00-00', NULL, NULL, '2021-01-28 11:11:48', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', 0, '0000-00-00 00:00:00', '', '', '', '', 1, 1, NULL),
(10000, 'admin@cointrader24.io', '3a58aae5aacbb5863586937f0c0fbcb0', 'test', 'esfd', '4444444444444444', '2022-04-08', '', '2022-12-15', '2022-09-16 12:10:08', 'w', 's', 's', '', 'Antigua and Barbuda', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tc', 'individual', 'USD', 250, '2022-09-16 12:10:08', NULL, 'no', 'no', '', 1, 1, NULL),
(10001, 'denisovviktor1969@gmail.com', 'e6468888380a1fb98829f3da9a0ea5ad', 'Viktor', 'Denisov', '6666666666666666666', '2023-05-15', '', '2023-01-18', '2022-10-20 14:28:13', 'tsdt', '', 'london', '', 'Andorra', '0000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tc', 'individual', 'USD', 678, '2022-10-20 14:28:13', NULL, 'no', 'no', '', 1, 1, NULL),
(10002, 'deyife4171@3mkz.com', '31856e5bb9f95c7969784edad2e8a31b', 'Viktor', 'Denisov', '6666666666666666666', '1974-06-12', '', '2023-01-18', '2022-10-20 14:36:50', 'tsdt', '', 'london', '', 'Andorra', '0000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tc', 'individual', 'USD', 678, '2022-10-20 14:36:50', NULL, 'no', 'no', '', 1, 1, NULL),
(10003, 'fortrashmails@tutanota.com', 'aeb481c8b725b3496798225b157d38be', 'Alex', 'Lee', '+134647566', '1990-10-29', '', '2023-01-18', '2022-10-20 17:24:14', '5 av', '', 'New York', '', 'United States', '10001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tc', 'individual', 'USD', 1000, '2022-10-20 17:24:14', NULL, 'no', 'no', '', 1, 1, NULL),
(10004, 'yipsepurto@vusra.com', '2ccf83f32d49c15b7c7af2f6d8a09444', 'James', 'White', '000000000000000', '2022-10-20', '', '2023-01-18', '2022-10-20 17:38:10', 'white', '', 'london', '', 'Andorra', 'londn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tc', 'individual', 'USD', 260, '2022-10-20 17:38:10', NULL, 'no', 'no', '', 1, 1, NULL),
(10005, 'nonuvaca.umigejog@jollyfree.com', '69ff11c4d10a47e35917eacb8065449c', 'Tes', 'Test', '00000000000000', '2024-06-11', '', '2023-01-19', '2022-10-21 11:02:27', 'fgd', 'hdtf', 'gd', '', 'Andorra', 'dhhf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tc', 'individual', 'USD', 1000, '2022-10-21 11:02:27', NULL, 'no', 'no', '', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `withdrawAmount` int(11) NOT NULL,
  `withdrawCurrency` varchar(50) NOT NULL,
  `withdrawDate` date NOT NULL,
  `withdrawMethod` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `kycdocuments`
--
ALTER TABLE `kycdocuments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `loginhistory`
--
ALTER TABLE `loginhistory`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `trades`
--
ALTER TABLE `trades`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `ind_user` (`userId`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `kycdocuments`
--
ALTER TABLE `kycdocuments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `loginhistory`
--
ALTER TABLE `loginhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5817;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trades`
--
ALTER TABLE `trades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36621;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10221;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trades`
--
ALTER TABLE `trades`
  ADD CONSTRAINT `trades_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
