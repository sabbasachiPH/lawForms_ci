<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table-7.d Packing Credit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body class="container bg-light">
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/welcome/table7d_insert" target="_blank"> Add New</a>
    <table class="table table-primary table-striped table-bordered table-hover caption-top text-center">
        <caption>
            Table-7.d Packing Credit
        </caption>
        <thead>
            <tr>
                <th class="align-middle" rowspan="3">Action</th>
                <th class="align-middle" rowspan="3">Sl. No.</th>
                <th class="align-middle">1</th>
                <th class="align-middle" colspan="4">2</th>
                <th class="align-middle" colspan="4">3</th>
                <th class="align-middle">4</th>
                <th class="align-middle">5</th>
                <th class="align-middle" colspan="2">6</th>
                <th class="align-middle">7</th>
                <th class="align-middle">8</th>
            </tr>

            <tr>
                <th class="align-middle" rowspan="2">Nature Of Credit</th>
                <th class="align-middle" colspan="4">
                    Particulars of Export Letter of Credit / Export Contract
                </th>
                <th class="align-middle" colspan="4">Information Related to Packing Credit</th>
                <th class="align-middle" rowspan="2">Amount Since Adjusted</th>
                <th class="align-middle" rowspan="2">Present outstanding</th>
                <th class="align-middle" colspan="2">Date and Status of Classification</th>
                <th class="align-middle" rowspan="2">Litigable Amount</th>
                <th class="align-middle" rowspan="2">Remarks</th>
            </tr>

            <tr>
                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Value(FC)</th>
                <th class="align-middle">Total Export against Letter of Credit/ Export Contract</th>

                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Value</th>
                <th class="align-middle">Expiry</th>
                <th class="align-middle">Classification Status</th>
                <th class="align-middle">Classification Date</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_7d as $row) : ?>
                <tr>
                    <td>
                        <a class="btn btn-warning" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7d_update/<?php echo $row['form7d_id']; ?>">Edit</a>
                        <a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7d_delete/<?php echo $row['form7d_id']; ?>" onClick="return confirm('Are You sure to Delete?')">Delete</a>
                    </td>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['form7d_natureOfCredit']; ?></td>
                    <td><?php echo $row['form7d_lcOrEcNo']; ?></td>
                    <td><?php echo $row['form7d_lcOrEcDate']; ?></td>
                    <td><?php echo $row['form7d_lcOrEcValueFc']; ?></td>
                    <td><?php echo $row['form7d_totalExportLcOrEc']; ?></td>
                    <td><?php echo $row['form7d_pcNo']; ?></td>
                    <td><?php echo $row['form7d_pcDate']; ?></td>
                    <td><?php echo $row['form7d_pcValue']; ?></td>
                    <td><?php echo $row['form7d_pcExpiry']; ?></td>
                    <td><?php echo $row['form7d_amountSinceeAdjusted']; ?></td>
                    <td><?php echo $row['form7d_presentOutstanding']; ?></td>
                    <td><?php echo $row['form7d_classificationStatus']; ?></td>
                    <td><?php echo $row['form7d_classificationDate']; ?></td>
                    <td><?php echo $row['form7d_litigableAmount']; ?></td>
                    <td><?php echo $row['form7d_remarks']; ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>