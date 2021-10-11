<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("select").change(function() {
                $(this).find("option:selected").each(function() {
                    var optionValue = $(this).attr("value");
                    if (optionValue) {
                        $(".box").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else {
                        $(".box").hide();
                    }
                });
            }).change();
        });
    </script>

    <title>7.a Demand Loan-Cash</title>

    <style>
        form,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }

        caption {
            font-weight: bolder;
            color: blue;
            font-size: 20px;
            /* border: 1px solid blue; */
        }
    </style>
</head>

<body>
    <div>
        <select>
            <option>Select Form</option>
            <option value="form7a">Form-7.a Demand Loan-Cash</option>
            <option value="form7b">Form-7.b Demand Loan-BBLC</option>
            <option value="form7c">Form-7.c FDBP</option>
            <option value="form7d">Form-7.d Packing Credit</option>
            <option value="form7e">Form-7.e LTR (FC)</option>
            <option value="form7f">Form-7.f LDBP</option>
        </select>
    </div>
    <div class="box form7a">
        <?php include('Form-7a_insert.php'); ?>
    </div>
    <div class="box form7b">
        <?php include('Form-7bDemandLoanBBLC.php'); ?>
    </div>
    <div class="box form7c">
        <?php include('Form-7cFDBP.php'); ?>
    </div>
    <div class="box form7d">
        <?php include('Form-7dPackingCredit.php'); ?>
    </div>

    <div class="box form7e">
        <?php include('Form-7eLTR(FC).php'); ?>
    </div>

    <div class="box form7f">
        <?php include('Form-7fLDBP.php'); ?>
    </div>

</body>

</html>