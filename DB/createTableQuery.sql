CREATE TABLE IF NOT EXISTS form7a(
form7a_id int(11) NOT NULL primary key AUTO_INCREMENT,
form7a_natureOfCredit            VARCHAR(100),
form7a_notionalLimitSanctionDate DATE,
form7a_notionalLimitAmount       DECIMAL(15,2),
form7a_notionalLimitExpiry       DATE,
form7a_sanctioningAuthority      VARCHAR(20),
form7a_lcDate                    DATE,
form7a_lcTenor                   INT,
form7a_lcValueFc                 DECIMAL(15,2),
form7a_lcValueBdt                DECIMAL(15,2),
form7a_lcMarginPercentage        INT,
form7a_dateDocumentReceivedInBranch DATE,
form7a_documentValue             DECIMAL(15,2),
form7a_lodgementDate             DATE,
form7a_dateDiscrepencyNotice     DATE, 
form7a_dueDate                   DATE,
form7a_acceptancePaymentDate     DATE,
form7a_padCreatoionDate          DATE,
form7a_padAmount                 DECIMAL(15,2),
form7a_sourceOfAdjustment        VARCHAR(20),
form7a_billEntryMatchingDate     DATE,
form7a_amountSinceeAdjusted      DECIMAL(15,2),
form7a_presentOutstanding        DECIMAL(15,2),
form7a_forcedLoanCreationDate    DATE,
form7a_forcedLoanCreationReason  VARCHAR(100),
form7a_classificationStatus      VARCHAR(10),
form7a_litigableAmount           DECIMAL(15,2),
form7a_remarks                   VARCHAR(100)
)


CREATE TABLE IF NOT EXISTS form7b(
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
 
  `form7b_totalExportAgainstLc`decimal(15,2) DEFAULT NULL,
 
  `form7b_dateOfDemandLoanBackToBack`date DEFAULT NULL,
  `form7b_amountOfDemandLoanBackToBack`decimal(15,2) DEFAULT NULL,

  `form7b_amountSinceeAdjusted` decimal(15,2) DEFAULT NULL,
  `form7b_presentOutstanding` decimal(15,2) DEFAULT NULL,
  
  `form7b_classificationStatus` varchar(10) DEFAULT NULL,
  `form7b_classificationDate` date DEFAULT NULL,
  `form7b_litigableAmount` decimal(15,2) DEFAULT NULL,
  `form7b_remarks` varchar(100) DEFAULT NULL
)



CREATE TABLE IF NOT EXISTS form7c(
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
)