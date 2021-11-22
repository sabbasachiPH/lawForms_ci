<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table-7.c FDBP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body class="container bg-light">
    <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/welcome/table7c_insert" target="_blank"> Add New</a>
    <table class="table table-primary table-striped table-bordered table-hover caption-top text-center">
        <caption>
            Table-7.c FDBP
        </caption>
        <div class="alert alert-success" role="alert">
            <h2> <?php if (null !== $this->session->flashdata('message_name')) {
                        echo $this->session->flashdata('message_name');
                    } ?>
            </h2>
        </div>
        <thead>
            <tr>
                <th class="align-middle" rowspan="3">Action</th>
                <th class="align-middle" rowspan="3">Sl. No.</th>
                <th class="align-middle">1</th>
                <th class="align-middle" colspan="4">2</th>
                <th class="align-middle" colspan="3">3</th>
                <th class="align-middle" colspan="3">4</th>
                <th class="align-middle">5</th>
                <th class="align-middle" colspan="8">6</th>
                <th class="align-middle">7</th>
                <th class="align-middle">8</th>
                <th class="align-middle" colspan="2">9</th>
                <th class="align-middle">10</th>
                <th class="align-middle">11</th>
            </tr>

            <tr>
                <th class="align-middle" rowspan="2">Nature Of Credit</th>
                <th class="align-middle" colspan="4">Particulars of Limit</th>
                <th class="align-middle" colspan="3">
                    Particulars of Export Letter of Credit/ Export Contract
                </th>
                <th class="align-middle" colspan="3">Particulars of Transfer</th>
                <th class="align-middle" rowspan="2">Date of Export Documents Submission to the Br.</th>
                <th class="align-middle" colspan="8">Particulars of FDBP</th>
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

                <th class="align-middle">Name of Transferring Bar.</th>
                <th class="align-middle">Ref. No.</th>
                <th class="align-middle">Date</th>

                <th class="align-middle">Number</th>
                <th class="align-middle">Date</th>
                <th class="align-middle">Documents Value</th>
                <th class="align-middle">Discrepant / Clean</th>
                <th class="align-middle">FDBP Value</th>
                <th class="align-middle">Maturity Date</th>
                <th class="align-middle">Name Presenting Bank</th>
                <th class="align-middle">Reason for non-repartition</th>

                <th class="align-middle">Classification Status</th>
                <th class="align-middle">Date of Present Classification</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_7c as $row) : ?>
                <tr>
                    <td>
                        <a class="btn btn-warning" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7c_update/<?php echo $row['form7c_id']; ?>">Edit</a>
                        <a class="btn btn-danger" target="_blank" href="<?php echo base_url(); ?>index.php/welcome/table7c_delete/<?php echo $row['form7c_id']; ?>" onClick="return confirm('Are You sure to Delete?')">Delete</a>
                    </td>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['form7c_natureOfCredit']; ?></td>
                    <td><?php echo $row['form7c_sanctionDate']; ?></td>
                    <td><?php echo $row['form7c_limitAmount']; ?></td>
                    <td><?php echo $row['form7c_limitExpiry']; ?></td>
                    <td><?php echo $row['form7c_limitSantionAuthority']; ?></td>
                    <td><?php echo $row['form7c_lcNumber']; ?></td>
                    <td><?php echo $row['form7c_lcDate']; ?></td>
                    <td><?php echo $row['form7c_lcValueFc']; ?></td>
                    <td><?php echo $row['form7c_nameOfTransferingBr']; ?></td>
                    <td><?php echo $row['form7c_transferRefNo']; ?></td>
                    <td><?php echo $row['form7c_transferDate']; ?></td>
                    <td><?php echo $row['form7c_exportDocumentsSubmissionDate']; ?></td>
                    <td><?php echo $row['form7c_fdbpNumber']; ?></td>
                    <td><?php echo $row['form7c_fdbpDate']; ?></td>
                    <td><?php echo $row['form7c_fdbpDocumentsValue']; ?></td>
                    <td><?php echo $row['form7c_isDiscrepantFdbp']; ?></td>
                    <td><?php echo $row['form7c_fdbpValue']; ?></td>
                    <td><?php echo $row['form7c_fdbpMaturityDate']; ?></td>
                    <td><?php echo $row['form7c_fdbpPresentingBank']; ?></td>
                    <td><?php echo $row['form7c_reasonForNonRepartition']; ?></td>
                    <td><?php echo $row['form7c_amountSinceeAdjusted']; ?></td>
                    <td><?php echo $row['form7c_presentOutstanding']; ?></td>
                    <td><?php echo $row['form7c_classificationStatus']; ?></td>
                    <td><?php echo $row['form7c_classificationDate']; ?></td>
                    <td><?php echo $row['form7c_litigableAmount']; ?></td>
                    <td><?php echo $row['form7c_remarks']; ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>