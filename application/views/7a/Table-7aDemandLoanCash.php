<?php
// echo "<pre>";
// print_r($data_7a);
// die;

// if (isset($_GET['form7a_id'])) {
// $form7a_id = $_GET['form7a_id'];
// $sql = "delete from form7a where form7a_id = '$form7a_id'";
// $conn->query($sql);
// header("Location: Table-7aDemandLoanCash.php");
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>7.a Demand Loan-Cash</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body>
  <a href="<?php echo base_url(); ?>index.php/welcome/table7a_insert" target="_blank"> Add New</a>
  <table>
    <caption>
      Table-7.a Demand Loan-Cash
    </caption>
    <h2> <?php if ($this->session->flashdata('message_name')) {
            echo $this->session->flashdata('message_name');
          } ?>
    </h2>
    <thead>
      <tr>
        <th rowspan="3">Action</th>
        <th rowspan="3">Sl. No.</th>
        <th>1</th>
        <th colspan="4">2</th>
        <th colspan="6">3</th>
        <th colspan="2">4</th>
        <th colspan="4">5</th>
        <th colspan="2">6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
        <th colspan="2">11</th>
        <th colspan="2">12</th>
        <th>13</th>
        <th>14</th>
      </tr>

      <tr>
        <th rowspan="2">Nature Of Credit</th>
        <th colspan="4">Notional Limit</th>
        <th colspan="6">Particulars Related to Letter of Credit</th>
        <th colspan="2">Document Received in Branch</th>
        <th colspan="4">Scrutiny of Documents</th>
        <th colspan="2">Creation of PAD</th>
        <th rowspan="2">Source of Adjustment</th>
        <th rowspan="2">Bill of Entry Matching Date</th>
        <th rowspan="2">Amount Since Adjusted</th>
        <th rowspan="2">Present outstanding</th>
        <th colspan="2">Information of Forced Loan/Demand Loan</th>
        <th colspan="2">Date and Status of Classification</th>
        <th rowspan="2">Litigable Amount</th>
        <th rowspan="2">Rmarks</th>
      </tr>

      <tr>
        <th>Sanction Date</th>
        <th>Amount</th>
        <th>Expiry</th>
        <th>Sanctioning Authority</th>
        <th>Number</th>
        <th>Date</th>
        <th>Tenor</th>
        <th>Value(FC)</th>
        <th>Value (BDT)</th>
        <th>% Margin</th>
        <th>Date</th>
        <th>Value</th>
        <th>Lodgement Date</th>
        <th>Date of Discrepency Notice</th>
        <th>Due Date</th>
        <th>Acceptance/Payment Date</th>
        <th>Date</th>
        <th>Amount</th>

        <th>Date of Creation</th>
        <th>Reason for Creation</th>

        <th>Present Classification Status</th>
        <th>Date of Present Classification</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($data_7a as $row) : ?>
        <tr>
          <td>
            <a target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7a_update/<?php echo $row['form7a_id']; ?>">Edit</a>
            <a target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7a_delete/<?php echo $row['form7a_id']; ?>" onClick="return confirm('Are You sure to Delete?')">Delete</a>
          </td>
          <td><?php echo $i++; ?></td>
          <td><?php echo $row['form7a_natureOfCredit']; ?></td>
          <td><?php echo $row['form7a_notionalLimitSanctionDate']; ?></td>
          <td><?php echo $row['form7a_notionalLimitAmount']; ?></td>
          <td><?php echo $row['form7a_notionalLimitExpiry']; ?></td>
          <td><?php echo $row['form7a_sanctioningAuthority']; ?></td>
          <td><?php echo $row['form7a_lcNo']; ?></td>
          <td><?php echo $row['form7a_lcDate']; ?></td>
          <td><?php echo $row['form7a_lcTenor']; ?></td>
          <td><?php echo $row['form7a_lcValueFc']; ?></td>
          <td><?php echo $row['form7a_lcValueBdt']; ?></td>
          <td><?php echo $row['form7a_lcMarginPercentage']; ?></td>
          <td><?php echo $row['form7a_dateDocumentReceivedInBranch']; ?></td>
          <td><?php echo $row['form7a_documentValue']; ?></td>
          <td><?php echo $row['form7a_lodgementDate']; ?></td>
          <td><?php echo $row['form7a_dateDiscrepencyNotice']; ?></td>
          <td><?php echo $row['form7a_dueDate']; ?></td>
          <td><?php echo $row['form7a_acceptancePaymentDate']; ?></td>
          <td><?php echo $row['form7a_padCreatoionDate']; ?></td>
          <td><?php echo $row['form7a_padAmount']; ?></td>
          <td><?php echo $row['form7a_sourceOfAdjustment']; ?></td>
          <td><?php echo $row['form7a_billEntryMatchingDate']; ?></td>
          <td><?php echo $row['form7a_amountSinceeAdjusted']; ?></td>
          <td><?php echo $row['form7a_presentOutstanding']; ?></td>
          <td><?php echo $row['form7a_forcedLoanCreationDate']; ?></td>
          <td><?php echo $row['form7a_forcedLoanCreationReason']; ?></td>
          <td><?php echo $row['form7a_classificationStatus']; ?></td>
          <td><?php echo $row['form7a_classificationDate']; ?></td>
          <td><?php echo $row['form7a_litigableAmount']; ?></td>
          <td><?php echo $row['form7a_remarks']; ?></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</body>

</html>