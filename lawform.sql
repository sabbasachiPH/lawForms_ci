-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 07:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawform`
--

-- --------------------------------------------------------

--
-- Table structure for table `form7a`
--

CREATE TABLE `form7a` (
  `form7a_id` int(11) NOT NULL,
  `form7a_natureOfCredit` varchar(100) DEFAULT NULL,
  `form7a_notionalLimitSanctionDate` date DEFAULT NULL,
  `form7a_notionalLimitAmount` decimal(15,2) DEFAULT NULL,
  `form7a_notionalLimitExpiry` date DEFAULT NULL,
  `form7a_sanctioningAuthority` varchar(20) DEFAULT NULL,
  `form7a_lcNo` int(11) NOT NULL,
  `form7a_lcDate` date DEFAULT NULL,
  `form7a_lcTenor` int(11) DEFAULT NULL,
  `form7a_lcValueFc` decimal(15,2) DEFAULT NULL,
  `form7a_lcValueBdt` decimal(15,2) DEFAULT NULL,
  `form7a_lcMarginPercentage` int(11) DEFAULT NULL,
  `form7a_dateDocumentReceivedInBranch` date DEFAULT NULL,
  `form7a_documentValue` decimal(15,2) DEFAULT NULL,
  `form7a_lodgementDate` date DEFAULT NULL,
  `form7a_dateDiscrepencyNotice` date DEFAULT NULL,
  `form7a_dueDate` date DEFAULT NULL,
  `form7a_acceptancePaymentDate` date DEFAULT NULL,
  `form7a_padCreatoionDate` date DEFAULT NULL,
  `form7a_padAmount` decimal(15,2) DEFAULT NULL,
  `form7a_sourceOfAdjustment` varchar(20) DEFAULT NULL,
  `form7a_billEntryMatchingDate` date DEFAULT NULL,
  `form7a_amountSinceeAdjusted` decimal(15,2) DEFAULT NULL,
  `form7a_presentOutstanding` decimal(15,2) DEFAULT NULL,
  `form7a_forcedLoanCreationDate` date DEFAULT NULL,
  `form7a_forcedLoanCreationReason` varchar(100) DEFAULT NULL,
  `form7a_classificationStatus` varchar(10) DEFAULT NULL,
  `form7a_classificationDate` date DEFAULT NULL,
  `form7a_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7a_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form7a`
--

INSERT INTO `form7a` (`form7a_id`, `form7a_natureOfCredit`, `form7a_notionalLimitSanctionDate`, `form7a_notionalLimitAmount`, `form7a_notionalLimitExpiry`, `form7a_sanctioningAuthority`, `form7a_lcNo`, `form7a_lcDate`, `form7a_lcTenor`, `form7a_lcValueFc`, `form7a_lcValueBdt`, `form7a_lcMarginPercentage`, `form7a_dateDocumentReceivedInBranch`, `form7a_documentValue`, `form7a_lodgementDate`, `form7a_dateDiscrepencyNotice`, `form7a_dueDate`, `form7a_acceptancePaymentDate`, `form7a_padCreatoionDate`, `form7a_padAmount`, `form7a_sourceOfAdjustment`, `form7a_billEntryMatchingDate`, `form7a_amountSinceeAdjusted`, `form7a_presentOutstanding`, `form7a_forcedLoanCreationDate`, `form7a_forcedLoanCreationReason`, `form7a_classificationStatus`, `form7a_classificationDate`, `form7a_litigableAmount`, `form7a_remarks`) VALUES
(1, 'Demand Loan-Cash edited', '2021-12-31', '4554.00', '2021-12-31', 'do', 12356, '2021-12-31', 600, '10.00', '800.00', 10, '2021-12-31', '20.00', '2021-12-01', '2021-12-01', '2021-12-01', '2021-12-01', '2021-12-01', '4000.00', '50', '2020-12-31', '6.00', '9.00', '2021-12-03', 'edited', 'BL', '2021-12-31', '10000.00', 'test after clas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form7a`
--
ALTER TABLE `form7a`
  ADD PRIMARY KEY (`form7a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form7a`
--
ALTER TABLE `form7a`
  MODIFY `form7a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
