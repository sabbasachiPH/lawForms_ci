<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entry Form-7.F LDBP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container bg-light">
    <form action="<?php echo base_url(); ?>index.php/welcome/table7f_update/<?php echo $existingData['form7f_id']; ?>" method="post">
        <table class="table table-bordered table-striped caption-top">
            <caption>
                <h3>Entry Form-7.F LDBP</h3>
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
                        <input value="<?php echo $existingData['form7f_natureOfCredit']; ?>" type="text" name="form7f_natureOfCredit" id="form7f_natureOfCredit" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">2</th>
                    <th rowspan="4">Particulars of Sanction</th>
                    <th>Sanction Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_sanctionDate']; ?>" type="date" name="form7f_sanctionDate" id="form7f_sanctionDate" />
                    </td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_sanctionAmount']; ?>" type="text" name="form7f_sanctionAmount" id="form7f_sanctionAmount" />
                    </td>
                </tr>
                <tr>
                    <th>Expiry Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_expiryDate']; ?>" type="date" name="form7f_expiryDate" id="form7f_expiryDate" />
                    </td>
                </tr>
                <tr>
                    <th>Sanctioning Authority</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_sanctioningAuthority']; ?>" type="text" name="form7f_sanctioningAuthority" id="form7f_sanctioningAuthority" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="6">3</th>
                    <th rowspan="6">
                        Particulars of Back to Back Letter of Credit Received
                    </th>
                    <th>Number</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_bblcNo']; ?>" type="text" name="form7f_bblcNo" id="form7f_bblcNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_bblcDate']; ?>" type="date" name="form7f_bblcDate" id="form7f_bblcDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_bblcValueFc']; ?>" type="text" name="form7f_bblcValueFc" id="form7f_bblcValueFc" />
                    </td>
                </tr>
                <tr>
                    <th>Value(BDT)</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_bblcValueBdt']; ?>" type="text" name="form7f_bblcValueBdt" id="form7f_bblcValueBdt" />
                    </td>
                </tr>
                <tr>
                    <th>Name of Issuing Bank</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_issuingBank']; ?>" type="text" name="form7f_issuingBank" id="form7f_issuingBank" />
                    </td>
                </tr>
                <tr>
                    <th>Weather Authenticated or Not</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_isAuthenticated']; ?>" type="text" name="form7f_isAuthenticated" id="form7f_isAuthenticated" />
                    </td>
                </tr>

                <tr>
                    <th>4</th>
                    <th colspan="2">Name of Importer</th>

                    <td>
                        <input value="<?php echo $existingData['form7f_importerName']; ?>" type="text" name="form7f_importerName" id="form7f_importerName" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="5">5</th>
                    <th rowspan="5">Information Related to Documents</th>
                    <th>Date of Documents Submission to the Branch</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_doucumentSubmissionDate']; ?>" type="date" name="form7f_doucumentSubmissionDate" id="form7f_doucumentSubmissionDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_doucumentValueFc']; ?>" type="text" name="form7f_doucumentValueFc" id="form7f_doucumentValueFc" />
                    </td>
                </tr>
                <tr>
                    <th>Value(BDT)</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_doucumentValueBdt']; ?>" type="text" name="form7f_doucumentValueBdt" id="form7f_doucumentValueBdt" />
                    </td>
                </tr>
                <tr>
                    <th>Discrepant/Clean</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_isDiscrepant']; ?>" type="text" name="form7f_isDiscrepant" id="form7f_isDiscrepant" />
                    </td>
                </tr>
                <tr>
                    <th>Due Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_dueDate']; ?>" type="date" name="form7f_dueDate" id="form7f_dueDate" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="3">6</th>
                    <th rowspan="3">Particulars of LDBP</th>
                    <th>Number</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_ldbpNo']; ?>" type="text" name="form7f_ldbpNo" id="form7f_ldbpNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_ldbpDate']; ?>" type="date" name="form7f_ldbpDate" id="form7f_ldbpDate" />
                    </td>
                </tr>
                <tr>
                    <th>Amount(BDT)</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_ldbpValueBdt']; ?>" type="text" name="form7f_ldbpValueBdt" id="form7f_ldbpValueBdt" />
                    </td>
                </tr>

                <tr>
                    <th>7</th>
                    <th colspan="2">Amount Since Adjusted</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_amountAdjusted']; ?>" type="text" name="form7f_amountAdjusted" id="form7f_amountAdjusted" />
                    </td>
                </tr>
                <tr>
                    <th>8</th>
                    <th colspan="2">Present outstanding</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_presentOutstanding']; ?>" type="text" name="form7f_presentOutstanding" id="form7f_presentOutstanding" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">9</th>
                    <th rowspan="2">Date and Status of Classification</th>
                    <th>Classification Status</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_classificationStatus']; ?>" type="text" name="form7f_classificationStatus" id="form7f_classificationStatus" />
                    </td>
                </tr>
                <tr>
                    <th>Classification Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_classificationDate']; ?>" type="date" name="form7f_classificationDate" id="form7f_classificationDate" />
                    </td>
                </tr>
                <tr>
                    <th>10</th>
                    <th colspan="2">Litigable Amount</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_litigableAmount']; ?>" type="text" name="form7f_litigableAmount" id="form7f_litigableAmount" />
                    </td>
                </tr>
                <tr>
                    <th>11</th>
                    <th colspan="2">Remarks</th>
                    <td>
                        <input value="<?php echo $existingData['form7f_remarks']; ?>" type="text" name="form7f_remarks" id="form7f_remarks" />
                    </td>
                </tr>
            </tbody>
        </table>

        <input type="submit" name="update7f" value="Update" class="btn btn-warning btn-block" />
    </form>
</body>

</html>