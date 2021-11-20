<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Entry Form Table-7.b Demand Loan-BBLC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" /> -->
</head>

<body class="container bg-light">
  <form action="<?php echo base_url(); ?>index.php/welcome/table7b_insert" method="post">
    <table class="table table-bordered table-striped caption-top">
      <caption>
        <h3>Entry Form-7.b Demand Loan-BBLC</h3>
      </caption>
      <thead>
        <tr colspan="2">
          <th>Sl. No.</th>
          <th colspan="2">Description</th>
          <th>Data</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>1</th>
          <th colspan="2">Nature Of Credit</th>
          <td>
            <input type="text" name="form7b_natureOfCredit" id="form7b_natureOfCredit" />
          </td>
        </tr>

        <tr>
          <th rowspan="4">2</th>
          <th rowspan="4">Notional Limit</th>
          <th>Sanction Date</th>
          <td>
            <input type="date" name="form7b_notionalLimitSanctionDate" id="form7b_notionalLimitSanctionDate" />
          </td>
        </tr>
        <tr>
          <th>Amount</th>
          <td>
            <input type="text" name="form7b_notionalLimitAmount" id="form7b_notionalLimitAmount" />
          </td>
        </tr>
        <tr>
          <th>Expiry</th>
          <td>
            <input type="date" name="form7b_notionalLimitExpiry" id="form7b_notionalLimitExpiry" />
          </td>
        </tr>
        <tr>
          <th>Sanctioning Authority</th>
          <td>
            <input type="text" name="form7b_sanctioningAuthority" id="form7b_sanctioningAuthority" />
          </td>
        </tr>

        <tr>
          <th rowspan="4">3</th>
          <th rowspan="4">
            Information related to Export Letter of Credit/ Export Contract
          </th>
          <th>Number</th>
          <td>
            <input type="text" name="form7b_lcNumber" id="form7b_lcNumber" />
          </td>
        </tr>
        <tr>
          <th>Date</th>
          <td>
            <input type="date" name="form7b_lcDate" id="form7b_lcDate" />
          </td>
        </tr>
        <tr>
          <th>Value(FC)</th>
          <td>
            <input type="text" name="form7b_lcValueFc" id="form7b_lcValueFc" />
          </td>
        </tr>
        <tr>
          <th>Date of Obtaining Buyer's Credit Report</th>
          <td>
            <input type="date" name="form7b_dateOfObtainingBuyersCreditReport" id="form7b_dateOfObtainingBuyersCreditReport" />
          </td>
        </tr>

        <tr>
          <th rowspan="4">4</th>
          <th rowspan="4">Particulars of Back to Back Letter of Credit</th>
          <th>Number</th>
          <td>
            <input type="text" name="form7b_bblcNumber" id="form7b_bblcNumber" />
          </td>
        </tr>
        <tr>
          <th>Date</th>
          <td>
            <input type="date" name="form7b_bblcDate" id="form7b_bblcDate" />
          </td>
        </tr>
        <tr>
          <th>Value(FC)</th>
          <td>
            <input type="text" name="form7b_bblcValueFc" id="form7b_bblcValueFc" />
          </td>
        </tr>
        <tr>
          <th>Value(BDT)</th>
          <td>
            <input type="text" name="form7b_bblcValueBdt" id="form7b_bblcValueBdt" />
          </td>
        </tr>

        <tr>
          <th rowspan="3">5</th>
          <th rowspan="3">
            Documents related information of Back to Back Letter of Credit
          </th>
          <th>Date of Documents</th>
          <td>
            <input type="date" name="form7b_bblcDocumentDate" id="form7b_bblcDocumentDate" />
          </td>
        </tr>
        <tr>
          <th>Value</th>
          <td>
            <input type="text" name="form7b_bblcDocumentValue" id="form7b_bblcDocumentValue" />
          </td>
        </tr>
        <tr>
          <th>Discrepant/Clean</th>
          <td>
            <input type="text" name="form7b_bblcDiscrepant" id="form7b_bblcDiscrepant" />
          </td>
        </tr>
        <tr>
          <th>6</th>
          <th colspan="2">
            Total Export against Letter of Credit/ Export Contract
          </th>
          <td>
            <input type="text" name="form7b_totalExportAgainstLc" id="form7b_totalExportAgainstLc" />
          </td>
        </tr>

        <tr>
          <th rowspan="2">7</th>
          <th rowspan="2">Particulars of Demand Loan Back to Back</th>
          <th>Date</th>
          <td>
            <input type="Date" name="form7b_dateOfDemandLoanBackToBack" id="form7b_dateOfDemandLoanBackToBack" />
          </td>
        </tr>
        <tr>
          <th>Amount</th>
          <td>
            <input type="text" name="form7b_amountOfDemandLoanBackToBack" id="form7b_amountOfDemandLoanBackToBack" />
          </td>
        </tr>
        <tr>
          <th>8</th>
          <th colspan="2">Amount Since Adjusted</th>
          <td>
            <input type="text" name="form7b_amountSinceeAdjusted" id="form7b_amountSinceeAdjusted" />
          </td>
        </tr>
        <tr>
          <th>9</th>
          <th colspan="2">Present outstanding</th>
          <td>
            <input type="text" name="form7b_presentOutstanding" id="form7b_presentOutstanding" />
          </td>
        </tr>
        <tr>
          <th rowspan="2">10</th>
          <th rowspan="2">Date and Status of Classification</th>
          <th>Classification Status</th>
          <td>
            <input type="text" name="form7b_classificationStatus" id="form7b_classificationStatus" />
          </td>
        </tr>
        <tr>
          <th>Date of Present Classification</th>
          <td>
            <input type="date" name="form7b_classificationDate" id="form7b_classificationDate" />
          </td>
        </tr>

        <tr>
          <th>11</th>
          <th colspan="2">Litigable Amount</th>
          <td>
            <input type="text" name="form7b_litigableAmount" id="form7b_litigableAmount" />
          </td>
        </tr>
        <tr>
          <th>12</th>
          <th colspan="2">Remarks</th>
          <td>
            <input type="text" name="form7b_remarks" id="form7b_remarks" />
          </td>
        </tr>
      </tbody>
    </table>
    <input type="submit" name="submit7b" value="Submit" id="form7b_remarks" />
  </form>
</body>

</html>