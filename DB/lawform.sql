-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 06:33 PM
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
(1, 'Demand Loan-Cash edited', '2021-12-31', '4554.00', '2021-12-31', 'do', 12356, '2021-12-31', 600, '10.00', '800.00', 10, '2021-12-31', '20.00', '2021-12-01', '2021-12-01', '2021-12-01', '2021-12-01', '2021-12-01', '4000.00', '50', '2020-12-31', '6.00', '9.00', '2021-12-03', 'edited', 'BL', '2021-12-31', '10000.00', 'test after clas'),
(5, 'Demand Loan-Cash', '2021-01-01', '10000.00', '2021-02-01', 'do', 123, '2021-01-01', 60, '10.00', '800.00', 10, '2021-01-01', '20.00', '2021-01-01', '2021-01-01', '2021-01-01', '2021-01-01', '2021-01-01', '300.00', '50', '2021-01-01', '6060.00', '900.00', '2021-01-01', 'dfdasfadsf', 'BL; 01.09.', '2021-01-01', '10000.00', 'test after clas');

-- --------------------------------------------------------

--
-- Table structure for table `form7b`
--

CREATE TABLE `form7b` (
  `form7b_id` int(11) NOT NULL,
  `form7b_natureOfCredit` varchar(100) DEFAULT NULL,
  `form7b_notionalLimitSanctionDate` date DEFAULT NULL,
  `form7b_notionalLimitAmount` decimal(15,2) DEFAULT NULL,
  `form7b_notionalLimitExpiry` date DEFAULT NULL,
  `form7b_sanctioningAuthority` varchar(20) DEFAULT NULL,
  `form7b_lcNumber` int(11) NOT NULL,
  `form7b_lcDate` date DEFAULT NULL,
  `form7b_lcValueFc` decimal(15,2) DEFAULT NULL,
  `form7b_dateOfObtainingBuyersCreditReport` date DEFAULT NULL,
  `form7b_bblcNumber` int(11) NOT NULL,
  `form7b_bblcDate` date DEFAULT NULL,
  `form7b_bblcValueFc` decimal(15,2) DEFAULT NULL,
  `form7b_bblcValueBdt` decimal(15,2) DEFAULT NULL,
  `form7b_bblcDocumentDate` date DEFAULT NULL,
  `form7b_bblcDocumentValue` decimal(15,2) DEFAULT NULL,
  `form7b_bblcDiscrepant` varchar(20) DEFAULT NULL,
  `form7b_totalExportAgainstLc` decimal(15,2) DEFAULT NULL,
  `form7b_dateOfDemandLoanBackToBack` date DEFAULT NULL,
  `form7b_amountOfDemandLoanBackToBack` decimal(15,2) DEFAULT NULL,
  `form7b_amountSinceeAdjusted` decimal(15,2) DEFAULT NULL,
  `form7b_presentOutstanding` decimal(15,2) DEFAULT NULL,
  `form7b_classificationStatus` varchar(10) DEFAULT NULL,
  `form7b_classificationDate` date DEFAULT NULL,
  `form7b_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7b_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form7b`
--

INSERT INTO `form7b` (`form7b_id`, `form7b_natureOfCredit`, `form7b_notionalLimitSanctionDate`, `form7b_notionalLimitAmount`, `form7b_notionalLimitExpiry`, `form7b_sanctioningAuthority`, `form7b_lcNumber`, `form7b_lcDate`, `form7b_lcValueFc`, `form7b_dateOfObtainingBuyersCreditReport`, `form7b_bblcNumber`, `form7b_bblcDate`, `form7b_bblcValueFc`, `form7b_bblcValueBdt`, `form7b_bblcDocumentDate`, `form7b_bblcDocumentValue`, `form7b_bblcDiscrepant`, `form7b_totalExportAgainstLc`, `form7b_dateOfDemandLoanBackToBack`, `form7b_amountOfDemandLoanBackToBack`, `form7b_amountSinceeAdjusted`, `form7b_presentOutstanding`, `form7b_classificationStatus`, `form7b_classificationDate`, `form7b_litigableAmount`, `form7b_remarks`) VALUES
(3, 'Demand Loan-BBLC', '2021-01-01', '1.00', '2021-01-01', 'br', 4, '2021-01-01', '55.00', '2021-01-01', 22, '2021-01-01', '88.00', '888.00', '2021-01-01', '555.00', 'clean', '5555.00', '2021-01-01', '66.00', '55.00', '11.00', '556', '2021-01-01', '21.00', '212121');

-- --------------------------------------------------------

--
-- Table structure for table `form7c`
--

CREATE TABLE `form7c` (
  `form7c_id` int(11) NOT NULL,
  `form7c_natureOfCredit` varchar(100) DEFAULT NULL,
  `form7c_sanctionDate` date DEFAULT NULL,
  `form7c_limitAmount` decimal(15,2) DEFAULT NULL,
  `form7c_limitExpiry` date DEFAULT NULL,
  `form7c_limitSantionAuthority` varchar(20) DEFAULT NULL,
  `form7c_lcNumber` varchar(20) DEFAULT NULL,
  `form7c_lcDate` date DEFAULT NULL,
  `form7c_lcValueFc` decimal(15,2) DEFAULT NULL,
  `form7c_nameOfTransferingBr` varchar(20) DEFAULT NULL,
  `form7c_transferRefNo` varchar(20) DEFAULT NULL,
  `form7c_transferDate` date DEFAULT NULL,
  `form7c_exportDocumentsSubmissionDate` date DEFAULT NULL,
  `form7c_fdbpNumber` int(11) NOT NULL,
  `form7c_fdbpDate` date DEFAULT NULL,
  `form7c_fdbpDocumentsValue` decimal(15,2) DEFAULT NULL,
  `form7c_isDiscrepantFdbp` varchar(20) DEFAULT NULL,
  `form7c_fdbpValue` decimal(15,2) DEFAULT NULL,
  `form7c_fdbpMaturityDate` date DEFAULT NULL,
  `form7c_fdbpPresentingBank` varchar(20) DEFAULT NULL,
  `form7c_reasonForNonRepartition` varchar(20) DEFAULT NULL,
  `form7c_amountSinceeAdjusted` decimal(15,2) DEFAULT NULL,
  `form7c_presentOutstanding` decimal(15,2) DEFAULT NULL,
  `form7c_classificationStatus` varchar(20) DEFAULT NULL,
  `form7c_classificationDate` date DEFAULT NULL,
  `form7c_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7c_remarks` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form7a`
--
ALTER TABLE `form7a`
  ADD PRIMARY KEY (`form7a_id`);

--
-- Indexes for table `form7b`
--
ALTER TABLE `form7b`
  ADD PRIMARY KEY (`form7b_id`);

--
-- Indexes for table `form7c`
--
ALTER TABLE `form7c`
  ADD PRIMARY KEY (`form7c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form7a`
--
ALTER TABLE `form7a`
  MODIFY `form7a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form7b`
--
ALTER TABLE `form7b`
  MODIFY `form7b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form7c`
--
ALTER TABLE `form7c`
  MODIFY `form7c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
