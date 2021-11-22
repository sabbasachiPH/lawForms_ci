<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entry Form-7.d Packing Credit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="container bg-light">
    <form action="<?php echo base_url(); ?>index.php/welcome/table7d_insert" method="post">
        <table class="table table-bordered table-striped caption-top">
            <caption>
                <h3> Form-7.d Packing Credit</h3>
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
                        <input type="text" name="form7d_natureOfCredit" id="form7d_natureOfCredit" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">2</th>
                    <th rowspan="4">
                        Particulars of Export <br>Letter of Credit / Export Contract
                    </th>
                    <th>Number</th>
                    <td>
                        <input type="number" name="form7d_lcOrEcNo" id="form7d_lcOrEcNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input type="date" name="form7d_lcOrEcDate" id="form7d_lcOrEcDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value(FC)</th>
                    <td>
                        <input type="text" name="form7d_lcOrEcValueFc" id="form7d_lcOrEcValueFc" />
                    </td>
                </tr>
                <tr>
                    <th>Total Export against <br>Letter of Credit/ Export Contract</th>
                    <td>
                        <input type="text" name="form7d_totalExportLcOrEc" id="form7d_totalExportLcOrEc" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="4">3</th>
                    <th rowspan="4">Information Related to Packing Credit</th>
                    <th>Number</th>
                    <td>
                        <input type="text" name="form7d_pcNo" id="form7d_pcNo" />
                    </td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>
                        <input type="date" name="form7d_pcDate" id="form7d_pcDate" />
                    </td>
                </tr>
                <tr>
                    <th>Value</th>
                    <td>
                        <input type="text" name="form7d_pcValue" id="form7d_pcValue" />
                    </td>
                </tr>
                <tr>
                    <th>Expiry</th>
                    <td>
                        <input type="date" name="form7d_pcExpiry" id="form7d_pcExpiry" />
                    </td>
                </tr>

                <tr>
                    <th>4</th>
                    <th colspan="2">Amount Since Adjusted</th>
                    <td>
                        <input type="text" name="form7d_amountSinceeAdjusted" id="form7d_amountSinceeAdjusted" />
                    </td>
                </tr>
                <tr>
                    <th>5</th>
                    <th colspan="2">Present outstanding</th>
                    <td>
                        <input type="text" name="form7d_presentOutstanding" id="form7d_presentOutstanding" />
                    </td>
                </tr>

                <tr>
                    <th rowspan="2">5</th>
                    <th rowspan="2">Date and Status of Classification</th>
                    <th>Classification Status</th>
                    <td>
                        <input type="text" name="form7d_classificationStatus" id="form7d_classificationStatus" />
                    </td>
                </tr>
                <tr>
                    <th>Classification Date</th>
                    <td>
                        <input type="date" name="form7d_classificationDate" id="form7d_classificationDate" />
                    </td>
                </tr>

                <tr>
                    <th>7</th>
                    <th colspan="2">Litigable Amount</th>
                    <td>
                        <input type="text" name="form7d_litigableAmount" id="form7d_litigableAmount" />
                    </td>
                </tr>
                <tr>
                    <th>8</th>
                    <th colspan="2">Rmarks</th>
                    <td>
                        <input type="text" name="form7d_remarks" id="form7d_remarks" />
                    </td>
                </tr>
            </tbody>
        </table>

        <input type="submit" name="submit7d" value="Submit" class="btn btn-success btn-block" />
    </form>
</body>

</html>