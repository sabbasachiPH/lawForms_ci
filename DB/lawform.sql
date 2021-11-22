-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 09:31 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `form7d`
--

CREATE TABLE `form7d` (
  `form7d_id` int(11) NOT NULL,
  `form7d_natureOfCredit` varchar(100) DEFAULT NULL,
  `form7d_lcOrEcNo` int(11) NOT NULL,
  `form7d_lcOrEcDate` date DEFAULT NULL,
  `form7d_lcOrEcValueFc` decimal(15,2) DEFAULT NULL,
  `form7d_totalExportLcOrEc` decimal(15,2) DEFAULT NULL,
  `form7d_pcNo` varchar(20) DEFAULT NULL,
  `form7d_pcDate` date DEFAULT NULL,
  `form7d_pcValue` decimal(15,2) DEFAULT NULL,
  `form7d_pcExpiry` date DEFAULT NULL,
  `form7d_amountSinceeAdjusted` decimal(15,2) DEFAULT NULL,
  `form7d_presentOutstanding` decimal(15,2) DEFAULT NULL,
  `form7d_classificationStatus` varchar(20) DEFAULT NULL,
  `form7d_classificationDate` date DEFAULT NULL,
  `form7d_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7d_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form7d`
--

INSERT INTO `form7d` (`form7d_id`, `form7d_natureOfCredit`, `form7d_lcOrEcNo`, `form7d_lcOrEcDate`, `form7d_lcOrEcValueFc`, `form7d_totalExportLcOrEc`, `form7d_pcNo`, `form7d_pcDate`, `form7d_pcValue`, `form7d_pcExpiry`, `form7d_amountSinceeAdjusted`, `form7d_presentOutstanding`, `form7d_classificationStatus`, `form7d_classificationDate`, `form7d_litigableAmount`, `form7d_remarks`) VALUES
(2, 'packing edit ', 1, '2021-11-22', '1.00', '1.00', '1', '2021-11-23', '1.00', '2021-11-24', '1.00', '1.00', 'bl edit', '2021-12-10', '1.00', 'remarks');

-- --------------------------------------------------------

--
-- Table structure for table `form7e`
--

CREATE TABLE `form7e` (
  `form7e_id` int(11) NOT NULL,
  `form7e_natureOfCredit` varchar(100) DEFAULT NULL,
  `form7e_sanctionDate` date DEFAULT NULL,
  `form7e_sanctionAmountFc` decimal(15,2) DEFAULT NULL,
  `form7e_sanctionAmountBdt` decimal(15,2) DEFAULT NULL,
  `form7e_fundBuildupPercentage` int(11) NOT NULL,
  `form7e_sanctioningAuthority` varchar(100) DEFAULT NULL,
  `form7e_importLcNo` varchar(50) DEFAULT NULL,
  `form7e_importLcDate` date DEFAULT NULL,
  `form7e_importLcValueFc` decimal(15,2) DEFAULT NULL,
  `form7e_importLcValueBdt` decimal(15,2) DEFAULT NULL,
  `form7e_documentRecdiveDate` date DEFAULT NULL,
  `form7e_documentValue` decimal(15,2) DEFAULT NULL,
  `form7e_LtrCreationDate` date DEFAULT NULL,
  `form7e_LtrCreationValue` decimal(15,2) DEFAULT NULL,
  `form7e_amountAdjusted` decimal(15,2) DEFAULT NULL,
  `form7e_presentOutstanding` decimal(15,2) DEFAULT NULL,
  `form7e_classificationStatus` varchar(15) DEFAULT NULL,
  `form7e_classificationDate` date DEFAULT NULL,
  `form7e_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7e_remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form7e`
--

INSERT INTO `form7e` (`form7e_id`, `form7e_natureOfCredit`, `form7e_sanctionDate`, `form7e_sanctionAmountFc`, `form7e_sanctionAmountBdt`, `form7e_fundBuildupPercentage`, `form7e_sanctioningAuthority`, `form7e_importLcNo`, `form7e_importLcDate`, `form7e_importLcValueFc`, `form7e_importLcValueBdt`, `form7e_documentRecdiveDate`, `form7e_documentValue`, `form7e_LtrCreationDate`, `form7e_LtrCreationValue`, `form7e_amountAdjusted`, `form7e_presentOutstanding`, `form7e_classificationStatus`, `form7e_classificationDate`, `form7e_litigableAmount`, `form7e_remarks`) VALUES
(1, 'LTR Edit', '2021-11-26', '2.00', '2.00', 10, 'BR', '33', '2021-12-09', '22.00', '33.00', '2021-11-25', '456.00', '2021-11-10', '89898.00', '21312.00', '123.00', 'BL', '2021-12-01', '1122.00', 'ASDFASDF');

-- --------------------------------------------------------

--
-- Table structure for table `form7f`
--

CREATE TABLE `form7f` (
  `form7f_id` int(11) NOT NULL,
  `form7f_natureOfCredit` varchar(100) DEFAULT NULL,
  `form7f_sanctionDate` date DEFAULT NULL,
  `form7f_sanctionAmount` decimal(15,2) DEFAULT NULL,
  `form7f_expiryDate` date DEFAULT NULL,
  `form7f_sanctioningAuthority` varchar(100) DEFAULT NULL,
  `form7f_bblcNo` varchar(100) DEFAULT NULL,
  `form7f_bblcDate` date DEFAULT NULL,
  `form7f_bblcValueFc` decimal(15,2) DEFAULT NULL,
  `form7f_bblcValueBdt` decimal(15,2) DEFAULT NULL,
  `form7f_issuingBank` varchar(100) DEFAULT NULL,
  `form7f_isAuthenticated` varchar(100) DEFAULT NULL,
  `form7f_importerName` varchar(100) DEFAULT NULL,
  `form7f_doucumentSubmissionDate` date DEFAULT NULL,
  `form7f_doucumentValueFc` decimal(15,2) DEFAULT NULL,
  `form7f_doucumentValueBdt` decimal(15,2) DEFAULT NULL,
  `form7f_isDiscrepant` varchar(100) DEFAULT NULL,
  `form7f_dueDate` date DEFAULT NULL,
  `form7f_ldbpNo` varchar(100) DEFAULT NULL,
  `form7f_ldbpDate` date DEFAULT NULL,
  `form7f_ldbpValueBdt` decimal(15,2) DEFAULT NULL,
  `form7f_amountAdjusted` decimal(15,2) DEFAULT NULL,
  `form7f_presentOutstanding` decimal(15,2) DEFAULT NULL,
  `form7f_classificationStatus` varchar(50) DEFAULT NULL,
  `form7f_classificationDate` date DEFAULT NULL,
  `form7f_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7f_remarks` varchar(100) DEFAULT NULL
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
-- Indexes for table `form7d`
--
ALTER TABLE `form7d`
  ADD PRIMARY KEY (`form7d_id`);

--
-- Indexes for table `form7e`
--
ALTER TABLE `form7e`
  ADD PRIMARY KEY (`form7e_id`);

--
-- Indexes for table `form7f`
--
ALTER TABLE `form7f`
  ADD PRIMARY KEY (`form7f_id`);

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

--
-- AUTO_INCREMENT for table `form7d`
--
ALTER TABLE `form7d`
  MODIFY `form7d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form7e`
--
ALTER TABLE `form7e`
  MODIFY `form7e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form7f`
--
ALTER TABLE `form7f`
  MODIFY `form7f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
