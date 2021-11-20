<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entry Form-7.c FDBP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container bg-light">
    <form action="<?php echo base_url(); ?>index.php/welcome/table7c_update/<?php echo $existingData['form7c_id']; ?>" method="post">
        <table class="table table-bordered table-striped caption-top">
            <caption>
                <h3>Entry Form-7.c FDBP</h3>
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
                        <input value="<?php echo $existingData['form7c_natureOfCredit']; ?>" type="text" name="form7c_natureOfCredit" id="natureOfCredit" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">2</th>
                    <th rowspan="4">Particulars of Limit</th>
                    <th>Sanction Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_sanctionDate']; ?>" type="date" name="form7c_sanctionDate" id="sanctionDate" />
                    </td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_limitAmount']; ?>" type="text" name="form7c_limitAmount" id="limitAmount" />
                    </td>
                </tr>
                <tr>
                    <th>Expiry</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_limitExpiry']; ?>" type="date" name="form7c_limitExpiry" id="limitExpiry" />
                    </td>
                </tr>
                <tr>
                    <th>Sanctioning Authority</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_limitSantionAuthority']; ?>" type="text" name="form7c_limitSantionAuthority" id="limitSantionAuthority" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="3">3</th>
                    <th rowspan="3">
                        Particulars of Export Letter of Credit/ Export Contract
                    </th>
                    <th>Number</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_lcNumber']; ?>" type="text" name="form7c_lcNumber" id="lcNumber" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_lcDate']; ?>" type="date" name="form7c_lcDate" id="lcDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_lcValueFc']; ?>" type="text" name="form7c_lcValueFc" id="lcValueFc" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="3">4</th>
                    <th rowspan="3">Particulars of Transfer</th>
                    <th>Name of Transferring Branch</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_nameOfTransferingBr']; ?>" type="text" name="form7c_nameOfTransferingBr" id="form7c_nameOfTransferingBr" />
                    </td>
                </tr>
                <tr>
                    <th>Ref. No.</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_transferRefNo']; ?>" type="text" name="form7c_transferRefNo" id="transferRefNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_transferDate']; ?>" type="date" name="form7c_transferDate" id="transferDate" />
                    </td>
                </tr>

                <tr>
                    <th>5</th>
                    <th colspan="2">Date of Export Documents Submission to the Br.</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_exportDocumentsSubmissionDate']; ?>" type="date" name="form7c_exportDocumentsSubmissionDate" id="exportDocumentsSubmissionDate" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="8">6</th>
                    <th rowspan="8">Particulars of FDBP</th>
                    <th>Number</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_fdbpNumber']; ?>" type="text" name="form7c_fdbpNumber" id="fdbpNumber" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_fdbpDate']; ?>" type="date" name="form7c_fdbpDate" id="fdbpDate" />
                    </td>
                </tr>
                <tr>
                    <th>Documents Value</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_fdbpDocumentsValue']; ?>" type="text" name="form7c_fdbpDocumentsValue" id="fdbpDocumentsValue" />
                    </td>
                </tr>

                <tr>
                    <th>Discrepant / Clean</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_isDiscrepantFdbp']; ?>" type="text" name="form7c_isDiscrepantFdbp" id="isDiscrepantFdbp" />
                    </td>
                </tr>
                <tr>
                    <th>FDBP Value</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_fdbpValue']; ?>" type="text" name="form7c_fdbpValue" id="fdbpValue" />
                    </td>
                </tr>
                <tr>
                    <th>Maturity Date</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_fdbpMaturityDate']; ?>" type="date" name="form7c_fdbpMaturityDate" id="fdbpMaturityDate" />
                    </td>
                </tr>
                <tr>
                    <th>Name Presenting Bank</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_fdbpPresentingBank']; ?>" type="text" name="form7c_fdbpPresentingBank" id="fdbpPresentingBank" />
                    </td>
                </tr>
                <tr>
                    <th>Reason for non-repartition</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_reasonForNonRepartition']; ?>" type="text" name="form7c_reasonForNonRepartition" id="reasonForNonRepartition" />
                    </td>
                </tr>

                <tr>
                    <th>7</th>
                    <th colspan="2">Amount Since Adjusted</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_amountSinceeAdjusted']; ?>" type="text" name="form7c_amountSinceeAdjusted" id="amountSinceeAdjusted" />
                    </td>
                </tr>
                <tr>
                    <th>8</th>
                    <th colspan="2">Present outstanding</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_presentOutstanding']; ?>" type="text" name="form7c_presentOutstanding" id="presentOutstanding" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="2">9</th>
                    <th rowspan="2">Date and Status of Classification</th>
                    <th>Classification Status</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_classificationStatus']; ?>" type="text" name="form7c_classificationStatus" id="form7c_classificationStatus" />
                    </td>
                </tr>
                <tr>
                    <th>Date of Present Classification</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_classificationDate']; ?>" type="date" name="form7c_classificationDate" id="form7c_classificationDate" />
                    </td>
                </tr>

                <tr>
                    <th>10</th>
                    <th colspan="2">Litigable Amount</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_litigableAmount']; ?>" type="text" name="form7c_litigableAmount" id="litigableAmount" />
                    </td>
                </tr>
                <tr>
                    <th>11</th>
                    <th colspan="2">Remarks</th>
                    <td>
                        <input value="<?php echo $existingData['form7c_remarks']; ?>" type="text" name="form7c_remarks" id="remarks" />
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="submit" name="update7c" value="Update" class="btn btn-warning" />
    </form>
</body>

</html>