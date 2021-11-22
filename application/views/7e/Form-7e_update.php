<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form-7.e LTR (FC)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<?php
// echo "<pre>";
// print_r($existingData);
// die;
?>

<body class="container bg-light">
    <form action="<?php echo base_url(); ?>index.php/welcome/table7e_update/<?php echo $existingData['form7e_id']; ?>" method="post">
        <table class="table table-bordered table-striped caption-top">
            <caption>
                <h3>Form-7.e LTR (FC)</h3>
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
                        <input value="<?php echo $existingData['form7e_natureOfCredit']; ?>" type="text" name="form7e_natureOfCredit" id="form7e_natureOfCredit" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="5">2</th>
                    <th rowspan="5">Particulars of Sanction</th>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_sanctionDate']; ?>" type="date" name="form7e_sanctionDate" id="form7e_sanctionDate" />
                    </td>
                </tr>
                <tr>
                    <th>Amount(FC)</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_sanctionAmountFc']; ?>" type="text" name="form7e_sanctionAmountFc" id="form7e_sanctionAmountFc" />
                    </td>
                </tr>
                <tr>
                    <th>Amount(BDT)</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_sanctionAmountBdt']; ?>" type="text" name="form7e_sanctionAmountBdt" id="form7e_sanctionAmountBdt" />
                    </td>
                </tr>
                <tr>
                    <th>% Of Fund-Buildup</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_fundBuildupPercentage']; ?>" type="text" name="form7e_fundBuildupPercentage" id="form7e_fundBuildupPercentage" />
                    </td>
                </tr>
                <tr>
                    <th>Sanctioning Authority</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_sanctioningAuthority']; ?>" type="text" name="form7e_sanctioningAuthority" id="form7e_sanctioningAuthority" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">3</th>
                    <th rowspan="4">Particulars of Import Letter of Credit</th>
                    <th>Number</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_importLcNo']; ?>" type="text" name="form7e_importLcNo" id="form7e_importLcNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_importLcDate']; ?>" type="date" name="form7e_importLcDate" id="form7e_importLcDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_importLcValueFc']; ?>" type="text" name="form7e_importLcValueFc" id="form7e_importLcValueFc" />
                    </td>
                </tr>
                <tr>
                    <th>Value(BDT)</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_importLcValueBdt']; ?>" type="text" name="form7e_importLcValueBdt" id="form7e_importLcValueBdt" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">4</th>
                    <th rowspan="2">Documents Received in Branch</th>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_documentRecdiveDate']; ?>" type="date" name="form7e_documentRecdiveDate" id="form7e_documentRecdiveDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_documentValue']; ?>" type="text" name="form7e_documentValue" id="form7e_documentValue" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">5</th>
                    <th rowspan="2">Creation of LTR(FC)</th>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_LtrCreationDate']; ?>" type="date" name="form7e_LtrCreationDate" id="form7e_LtrCreationDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_LtrCreationValue']; ?>" type="text" name="form7e_LtrCreationValue" id="form7e_LtrCreationValue" />
                    </td>
                </tr>

                <tr>
                    <th>6</th>
                    <th colspan="2">Amount Since Adjusted</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_amountAdjusted']; ?>" type="text" name="form7e_amountAdjusted" id="form7e_amountAdjusted" />
                    </td>
                </tr>
                <tr>
                    <th>7</th>
                    <th colspan="2">Present outstanding</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_presentOutstanding']; ?>" type="text" name="form7e_presentOutstanding" id="form7e_presentOutstanding" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">8</th>
                    <th rowspan="2">Date and Status of Classification</th>
                    <th>Classification Status</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_classificationStatus']; ?>" type="text" name="form7e_classificationStatus" id="form7e_classificationStatus" />
                    </td>
                </tr>
                <tr>
                    <th>Classification Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_classificationDate']; ?>" type="date" name="form7e_classificationDate" id="form7e_classificationDate" />
                    </td>
                </tr>
                <tr>
                    <th>9</th>
                    <th colspan="2">Litigable Amount</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_litigableAmount']; ?>" type="text" name="form7e_litigableAmount" id="form7e_litigableAmount" />
                    </td>
                </tr>
                <tr>
                    <th>10</th>
                    <th colspan="2">Remarks</th>
                    <td>
                        <input value="<?php echo $existingData['form7e_remarks']; ?>" type="text" name="form7e_remarks" id="form7e_remarks" />
                    </td>
                </tr>
            </tbody>
        </table>

        <input type="submit" name="update7e" value="Update" class="btn btn-warning btn-block" />
    </form>
</body>

</html>