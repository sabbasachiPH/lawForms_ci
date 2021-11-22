<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="form7a_viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Form-7.a Demand Loan-Cash</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>style.css" />
</head>

<body>
    <form action="<?php echo base_url(); ?>index.php/welcome/table7a_update/<?php echo $existingData['form7a_id']; ?>" method="post">
        <table class="dashboard">
            <caption>
                Update Form-7.a Demand Loan-Cash
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
                        <input type="text" name="form7a_natureOfCredit" id="natureOfCredit" value="<?php echo $existingData['form7a_natureOfCredit'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">2</th>
                    <th rowspan="4">Notional Limit</th>
                    <th>Sanction Date</th>
                    <td>
                        <input type="date" name="form7a_notionalLimitSanctionDate" id="notionalLimitSanctionDate" value="<?php echo $existingData['form7a_notionalLimitSanctionDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>
                        <input type="text" name="form7a_notionalLimitAmount" id="notionalLimitAmount" value="<?php echo $existingData['form7a_notionalLimitAmount'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Expiry</th>
                    <td>
                        <input type="date" name="form7a_notionalLimitExpiry" id="notionalLimitExpiry" value="<?php echo $existingData['form7a_notionalLimitExpiry'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Sanctioning Authority</th>
                    <td>
                        <input type="text" name="form7a_sanctioningAuthority" id="sanctioningAuthority" value="<?php echo $existingData['form7a_sanctioningAuthority'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="7">3</th>
                    <th rowspan="7">Particulars Related to Letter of Credit</th>
                </tr>
                <tr>
                    <th>LC Number</th>
                    <td>
                        <input type="text" name="form7a_lcNo" id="lcNo" value="<?php echo $existingData['form7a_lcNo'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input type="date" name="form7a_lcDate" id="lcDate" value="<?php echo $existingData['form7a_lcDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Tenor</th>
                    <td>
                        <input type="text" name="form7a_lcTenor" id="lcTenor" value="<?php echo $existingData['form7a_lcTenor'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input type="text" name="form7a_lcValueFc" id="lcValueFc" value="<?php echo $existingData['form7a_lcValueFc'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Value (BDT)</th>
                    <td>
                        <input type="text" name="form7a_lcValueBdt" id="lcValueBdt" value="<?php echo $existingData['form7a_lcValueBdt'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Margin( % )</th>
                    <td>
                        <input type="text" name="form7a_lcMarginPercentage" id="lcMarginPercentage" value="<?php echo $existingData['form7a_lcMarginPercentage'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="2">4</th>
                    <th rowspan="2">Document Received in Branch</th>
                    <th>Date</th>
                    <td>
                        <input type="date" name="form7a_dateDocumentReceivedInBranch" id="dateDocumentReceivedInBranch" value="<?php echo $existingData['form7a_dateDocumentReceivedInBranch'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Value</th>
                    <td>
                        <input type="text" name="form7a_documentValue" id="documentValue" value="<?php echo $existingData['form7a_documentValue'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">5</th>
                    <th rowspan="4">Scrutiny of Documents</th>
                    <th>Lodgement Date</th>
                    <td>
                        <input type="date" name="form7a_lodgementDate" id="lodgementDate" value="<?php echo $existingData['form7a_lodgementDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Date of Discrepency Notice</th>
                    <td>
                        <input type="date" name="form7a_dateDiscrepencyNotice" id="dateDiscrepencyNotice" value="<?php echo $existingData['form7a_dateDiscrepencyNotice'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Due Date</th>
                    <td>
                        <input type="date" name="form7a_dueDate" id="dueDate" value="<?php echo $existingData['form7a_dueDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Acceptance/Payment Date</th>
                    <td>
                        <input type="date" name="form7a_acceptancePaymentDate" id="acceptancePaymentDate" value="<?php echo $existingData['form7a_acceptancePaymentDate'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="2">6</th>
                    <th rowspan="2">Creation of PAD</th>
                    <th>Date</th>
                    <td>
                        <input type="date" name="form7a_padCreatoionDate" id="padCreatoionDate" value="<?php echo $existingData['form7a_padCreatoionDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Amount</th>
                    <td>
                        <input type="text" name="form7a_padAmount" id="padAmount" value="<?php echo $existingData['form7a_padAmount'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th>7</th>
                    <th colspan="2">Source of Adjustment</th>
                    <td>
                        <input type="text" name="form7a_sourceOfAdjustment" id="sourceOfAdjustment" value="<?php echo $existingData['form7a_sourceOfAdjustment'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>8</th>
                    <th colspan="2">Bill of Entry Matching Date</th>
                    <td>
                        <input type="date" name="form7a_billEntryMatchingDate" id="billEntryMatchingDate" value="<?php echo $existingData['form7a_billEntryMatchingDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>9</th>
                    <th colspan="2">Amount Since Adjusted</th>
                    <td>
                        <input type="text" name="form7a_amountSinceeAdjusted" id="amountSinceeAdjusted" value="<?php echo $existingData['form7a_amountSinceeAdjusted'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>10</th>
                    <th colspan="2">Present outstanding</th>
                    <td>
                        <input type="text" name="form7a_presentOutstanding" id="presentOutstanding" value="<?php echo $existingData['form7a_presentOutstanding'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">11</th>
                    <th rowspan="2">Information of Forced Loan/Demand Loan</th>
                    <th>Date of Creation</th>
                    <td>
                        <input type="date" name="form7a_forcedLoanCreationDate" id="forcedLoanCreationDate" value="<?php echo $existingData['form7a_forcedLoanCreationDate'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Reason for Creation</th>
                    <td>
                        <input type="text" name="form7a_forcedLoanCreationReason" id="forcedLoanCreationReason" value="<?php echo $existingData['form7a_forcedLoanCreationReason'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th rowspan="2">12</th>
                    <th rowspan="2">Date and Status of Classification</th>
                    <th>Classification Status</th>
                    <td>
                        <input type="text" name="form7a_classificationStatus" id="classificationStatus" value="<?php echo $existingData['form7a_classificationStatus'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>Date of Present Classification</th>
                    <td>
                        <input type="date" name="form7a_classificationDate" id="form7a_classificationDate" value="<?php echo $existingData['form7a_classificationDate'] ?>" />
                    </td>
                </tr>

                <tr>
                    <th>13</th>
                    <th colspan="2">Litigable Amount</th>
                    <td>
                        <input type="text" name="form7a_litigableAmount" id="litigableAmount" value="<?php echo $existingData['form7a_litigableAmount'] ?>" />
                    </td>
                </tr>
                <tr>
                    <th>14</th>
                    <th colspan="2">Remarks</th>
                    <td>
                        <input type="text" name="form7a_remarks" id="remarks" value="<?php echo $existingData['form7a_remarks'] ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="submit" name="update7a" value="Update" id="update7a" />
    </form>

</body>

</html>