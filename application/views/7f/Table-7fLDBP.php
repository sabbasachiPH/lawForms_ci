<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table-7.F LDBP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body class="container bg-light">
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/welcome/table7f_insert" target="_blank"> Add New</a>
    <table class="table table-primary table-striped table-bordered table-hover caption-top text-center">
        <caption>
            Table-7.F LDBP
        </caption>
        <thead>
            <tr>
                <th class="align-middle" rowspan="3">Action</th>
                <th class="align-middle" rowspan="3">Sl. No.</th>
                <th class="align-middle">1</th>
                <th class="align-middle" colspan="4">2</th>
                <th class="align-middle" colspan="6">3</th>
                <th class="align-middle">4</th>
                <th class="align-middle" colspan="5">5</th>
                <th class="align-middle" colspan="3">6</th>
                <th class="align-middle">7</th>
                <th class="align-middle">8</th>
                <th class="align-middle">9</th>
                <th class="align-middle">10</th>
                <th class="align-middle">11</th>
            </tr>

            <tr>
                <th class="align-middle" rowspan="2">Nature Of Credit</th>
                <th class="align-middle" colspan="4">Particulars of Sanction</th>
                <th class="align-middle" colspan="6">
                    Particulars of Back to Back Letter of Credit Received
                </th>
                <th class="align-middle" rowspan="2">Name of Importer</th>
                <th class="align-middle" colspan="5">Information Related to Documents</th>
                <th class="align-middle" colspan="3">Particulars of LDBP</th>
                <th class="align-middle" rowspan="2">Amount Since Adjusted</th>
                <th class="align-middle" rowspan="2">Present outstanding</th>
                <th class="align-middle" rowspan="2">Date and Status of Classification</th>
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
                <th class="align-middle">Value(BDT)</th>
                <th class="align-middle">Name of Issuing Bank</th>
                <th class="align-middle">Weather Authenticated or Not</th>

                <th class="align-middle">Date of Documents Submission to the Br.</th>
                <th class="align-middle">Value(FC)</th>
                <th class="align-middle">Value(BDT)</th>
                <th class="align-middle">Discrepant/Clean</th>
                <th class="align-middle">Due Date</th>

                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Amount(BDT)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo "<pre>";
            // print_r($data_7f);
            // die;
            ?>
            <?php $i = 1; ?>
            <?php foreach ($data_7f as $row) : ?>
                <tr>
                    <td>
                        <a class="btn btn-warning" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7f_update/<?php echo $row['form7f_id']; ?>">Edit</a>
                        <a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7f_delete/<?php echo $row['form7f_id']; ?>" onClick="return confirm('Are You sure to Delete?')">Delete</a>
                    </td>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['form7f_natureOfCredit']; ?></td>
                    <td><?php echo $row['form7f_sanctionDate']; ?></td>
                    <td><?php echo $row['form7f_sanctionAmount']; ?></td>
                    <td><?php echo $row['form7f_expiryDate']; ?></td>
                    <td><?php echo $row['form7f_sanctioningAuthority']; ?></td>
                    <td><?php echo $row['form7f_bblcNo']; ?></td>
                    <td><?php echo $row['form7f_bblcDate']; ?></td>
                    <td><?php echo $row['form7f_bblcValueFc']; ?></td>
                    <td><?php echo $row['form7f_bblcValueBdt']; ?></td>
                    <td><?php echo $row['form7f_issuingBank']; ?></td>
                    <td><?php echo $row['form7f_isAuthenticated']; ?></td>
                    <td><?php echo $row['form7f_importerName']; ?></td>
                    <td><?php echo $row['form7f_doucumentSubmissionDate']; ?></td>
                    <td><?php echo $row['form7f_doucumentValueFc']; ?></td>
                    <td><?php echo $row['form7f_doucumentValueBdt']; ?></td>
                    <td><?php echo $row['form7f_isDiscrepant']; ?></td>
                    <td><?php echo $row['form7f_dueDate']; ?></td>
                    <td><?php echo $row['form7f_ldbpNo']; ?></td>
                    <td><?php echo $row['form7f_ldbpDate']; ?></td>
                    <td><?php echo $row['form7f_ldbpValueBdt']; ?></td>
                    <td><?php echo $row['form7f_amountAdjusted']; ?></td>
                    <td><?php echo $row['form7f_presentOutstanding']; ?></td>
                    <td><?php echo $row['form7f_classificationStatus']; ?></td>
                    <td><?php echo $row['form7f_classificationDate']; ?></td>
                    <td><?php echo $row['form7f_litigableAmount']; ?></td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</body>

</html>