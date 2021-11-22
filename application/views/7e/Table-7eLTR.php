<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table-7.e LTR (FC)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body class="container bg-light">
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/welcome/table7e_insert" target="_blank"> Add New</a>
    <table class="table table-primary table-striped table-bordered table-hover caption-top text-center">
        <caption>
            Table-7.e LTR (FC)
        </caption>
        <thead>
            <tr>
                <th class="align-middle" rowspan="3">Action</th>
                <th class="align-middle" rowspan="3">Sl. No.</th>
                <th class="align-middle">1</th>
                <th class="align-middle" colspan="5">2</th>
                <th class="align-middle" colspan="4">3</th>
                <th class="align-middle" colspan="2">4</th>
                <th class="align-middle" colspan="2">5</th>
                <th class="align-middle">6</th>
                <th class="align-middle">7</th>
                <th class="align-middle" colspan="2">8</th>
                <th class="align-middle">9</th>
                <th class="align-middle">10</th>
            </tr>

            <tr>
                <th class="align-middle" rowspan="2">Nature Of Credit</th>
                <th class="align-middle" colspan="5">Particulars of Sanction</th>
                <th class="align-middle" colspan="4">Particulars of Import Letter of Credit</th>
                <th class="align-middle" colspan="2">Documents Received in Br.</th>
                <th class="align-middle" colspan="2">Creation of LTR(FC)</th>
                <th class="align-middle" rowspan="2">Amount Since Adjusted</th>
                <th class="align-middle" rowspan="2">Present outstanding</th>
                <th class="align-middle" colspan="2">Date and Status of Classification</th>
                <th class="align-middle" rowspan="2">Litigable Amount</th>
                <th class="align-middle" rowspan="2">Remarks</th>
            </tr>

            <tr>
                <th class="align-middle">Date</th>
                <th class="align-middle">Amount(FC)</th>
                <th class="align-middle">Amount(BDT)</th>
                <th class="align-middle">% Of Fund-Buildup</th>
                <th class="align-middle">Sanctioning Authority</th>

                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Value(FC)</th>
                <th class="align-middle">Value(BDT)</th>

                <th class="align-middle">Date</th>
                <th class="align-middle">Value</th>

                <th class="align-middle">Date</th>
                <th class="align-middle">Value</th>

                <th class="align-middle">Classification Status</th>
                <th class="align-middle">Classification Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo "<pre>";
            // print_r($data_7e);
            // die;
            ?>
            <?php $i = 1; ?>
            <?php foreach ($data_7e as $row) : ?>
                <tr>
                    <td>
                        <a class="btn btn-warning" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7e_update/<?php echo $row['form7e_id']; ?>">Edit</a>
                        <a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7e_delete/<?php echo $row['form7e_id']; ?>" onClick="return confirm('Are You sure to Delete?')">Delete</a>
                    </td>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['form7e_natureOfCredit']; ?></td>
                    <td><?php echo $row['form7e_sanctionDate']; ?></td>
                    <td><?php echo $row['form7e_sanctionAmountFc']; ?></td>
                    <td><?php echo $row['form7e_sanctionAmountBdt']; ?></td>
                    <td><?php echo $row['form7e_fundBuildupPercentage']; ?></td>
                    <td><?php echo $row['form7e_sanctioningAuthority']; ?></td>
                    <td><?php echo $row['form7e_importLcNo']; ?></td>
                    <td><?php echo $row['form7e_importLcDate']; ?></td>
                    <td><?php echo $row['form7e_importLcValueFc']; ?></td>
                    <td><?php echo $row['form7e_importLcValueBdt']; ?></td>
                    <td><?php echo $row['form7e_documentRecdiveDate']; ?></td>
                    <td><?php echo $row['form7e_documentValue']; ?></td>
                    <td><?php echo $row['form7e_LtrCreationDate']; ?></td>
                    <td><?php echo $row['form7e_LtrCreationValue']; ?></td>
                    <td><?php echo $row['form7e_amountAdjusted']; ?></td>
                    <td><?php echo $row['form7e_presentOutstanding']; ?></td>
                    <td><?php echo $row['form7e_classificationStatus']; ?></td>
                    <td><?php echo $row['form7e_classificationDate']; ?></td>
                    <td><?php echo $row['form7e_litigableAmount']; ?></td>
                    <td><?php echo $row['form7e_remarks']; ?></td>
                </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</body>

</html>