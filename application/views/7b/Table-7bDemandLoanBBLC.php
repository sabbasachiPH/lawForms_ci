<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table-7.b Demand Loan-BBLC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body class="container bg-light">
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/welcome/table7b_insert" target="_blank"> Add New</a>
    <table class="table table-primary table-striped table-bordered table-hover caption-top text-center">
        <caption>
            Table-7.b Demand Loan-BBLC
        </caption>
        <div class="alert alert-success" role="alert">
            <h2> <?php if ($this->session->flashdata('message_name')) {
                        echo $this->session->flashdata('message_name');
                    } ?>
            </h2>
        </div>
        <thead>
            <tr>
                <th class="align-middle" rowspan="3">Action</th>
                <th class="align-middle" rowspan="3">Sl. No.</th>
                <th>1</th>
                <th colspan="4">2</th>
                <th colspan="4">3</th>
                <th colspan="4">4</th>
                <th colspan="3">5</th>
                <th>6</th>
                <th colspan="2">7</th>
                <th>8</th>
                <th>9</th>
                <th colspan="2">10</th>
                <th>11</th>
                <th>12</th>

            </tr>

            <tr>
                <th class="align-middle" rowspan="2">Nature Of Credit</th>
                <th class="align-middle" colspan="4">Notional Limit</th>
                <th class="align-middle" colspan="4">
                    Information related to Export Letter of Credit/ Export Contract
                </th>
                <th class="align-middle" colspan="4">Particulars of Back to Back Letter of Credit</th>
                <th class="align-middle" colspan="3">
                    Documents related information of Back to Back Letter of Credit
                </th>
                <th class="align-middle" rowspan="2">
                    Total Export against Letter of Credit/ Export Contract
                </th>
                <th class="align-middle" colspan="2">Particulars of Demand Loan Back to Back`</th>
                <th class="align-middle" rowspan="2">Amount Since Adjusted</th>
                <th class="align-middle" rowspan="2">Present outstanding</th>
                <th class="align-middle" colspan="2">Date and Status of Classification</th>
                <th class="align-middle" rowspan="2">Litigable Amount</th>
                <th class="align-middle" rowspan="2">Remarks</th>
            </tr>

            <tr>
                <th class="align-middle">Sanction Date</th>
                <th class="align-middle">Amount</th>
                <th class="align-middle">Expiry</th>
                <th class="align-middle">Sanctioning Authority</th>

                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Value(FC)</th>
                <th class="align-middle">Date of Obtaining Buyer's Credit Report</th>

                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Value(FC)</th>
                <th class="align-middle">Value(BDT)</th>

                <th class="align-middle">Date of Documents</th>
                <th class="align-middle">Value</th>
                <th class="align-middle">Discrepant/Clean</th>

                <th class="align-middle">Date</th>
                <th class="align-middle">Amount</th>

                <th class="align-middle">Present Classification Status</th>
                <th class="align-middle">Date of Present Classification</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_7b as $row) : ?>
                <tr>
                    <td>
                        <a class="btn btn-warning" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7b_update/<?php echo $row['form7b_id']; ?>">Edit</a>
                        <a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7b_delete/<?php echo $row['form7b_id']; ?>" onClick="return confirm('Are You sure to Delete?')">Delete</a>
                    </td>
                    <td><?php echo $i++; ?></td>

                    <td><?php echo $row['form7b_natureOfCredit']; ?></td>
                    <td><?php echo $row['form7b_notionalLimitSanctionDate']; ?></td>
                    <td><?php echo $row['form7b_notionalLimitAmount']; ?></td>
                    <td><?php echo $row['form7b_notionalLimitExpiry']; ?></td>
                    <td><?php echo $row['form7b_sanctioningAuthority']; ?></td>
                    <td><?php echo $row['form7b_lcNumber']; ?></td>
                    <td><?php echo $row['form7b_lcDate']; ?></td>
                    <td><?php echo $row['form7b_lcValueFc']; ?></td>
                    <td><?php echo $row['form7b_dateOfObtainingBuyersCreditReport']; ?></td>
                    <td><?php echo $row['form7b_bblcNumber']; ?></td>
                    <td><?php echo $row['form7b_bblcDate']; ?></td>
                    <td><?php echo $row['form7b_bblcValueFc']; ?></td>
                    <td><?php echo $row['form7b_bblcValueBdt']; ?></td>
                    <td><?php echo $row['form7b_bblcDocumentDate']; ?></td>
                    <td><?php echo $row['form7b_bblcDocumentValue']; ?></td>
                    <td><?php echo $row['form7b_bblcDiscrepant']; ?></td>
                    <td><?php echo $row['form7b_totalExportAgainstLc']; ?></td>
                    <td><?php echo $row['form7b_dateOfDemandLoanBackToBack']; ?></td>
                    <td><?php echo $row['form7b_amountOfDemandLoanBackToBack']; ?></td>
                    <td><?php echo $row['form7b_amountSinceeAdjusted']; ?></td>
                    <td><?php echo $row['form7b_presentOutstanding']; ?></td>
                    <td><?php echo $row['form7b_classificationStatus']; ?></td>
                    <td><?php echo $row['form7b_classificationDate']; ?></td>
                    <td><?php echo $row['form7b_litigableAmount']; ?></td>
                    <td><?php echo $row['form7b_remarks']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>