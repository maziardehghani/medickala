<?php
$activeMenu = 'stat';
require('view/admin/layout.php');


?>
<style>
    .w400 {
        width: 600px;
    }

    h4 {
        font-size: 12.5pt;

    }

    .row2 .title {
        display: block;
        float: right;
        margin-left: 10px;
        margin-right: 10px;

    }

    .row2 select {
        float: right;
        margin-right: 6px;

        font-size: 10pt;
        min-width: 100px;
    }

    h3 {
        font-size: 13pt;
        border-bottom: 1px solid #ccc;
    }

    .row2 input[type=text] {
        width: 200px;
        border: 1px solid #eee;
        float: right;
        height: 20px;
        padding: 4px;

        margin-right: 10px;
    }

    .w120 {
        width: 120px;
    }
</style>

<div class="left">


    <?php

    $orderStats = $data['orderStats'];
    $allOrders = $orderStats['stat'];
    $paiedOrders = $orderStats['paideOrders'];
    $totalamount = $orderStats['totalamount'];
    $startdate = $orderStats['startdate'];
    $endDate = $orderStats['endDate'];


    ?>

    <p class="title">
        <a>
            آمار سفارشات در بازه زمانی
            <?= $startdate ?>
            تا
            <?= $endDate ?>

        </a>


    </p>

    <style>
        .spanTag {
            float: right;
            font-size: 10.5pt;
            margin-left: 30px;
        }
    </style>

    <div class="row2">


        <span class="spanTag">
            تعداد کل سفارشات:
            <?= sizeof($allOrders) ?>
        </span>

        <span class="spanTag">
تعداد سفارشات پرداخت شده:
            <?= $paiedOrders ?>
        </span>

        <span class="spanTag">
مبلغ کل فروش:
            <?= number_format($totalamount) ?>
            تومان
        </span>


    </div>



    <table class="list" cellspacing="0">

        <tr>
            <td>
                کد
            </td>
            <td>
                تاریخ
            </td>

            <td style="width: 350px;">
                تحویل گیرنده
            </td>
            <td>
                مبلغ کل
            </td>
            <td>
                شهر
            </td>

            <td>
                جزییات
            </td>


        </tr>

        <?php
        foreach ($allOrders as $row) {

            ?>
            <tr>
                <td>
                    <?= $row['id']; ?>
                </td>
                <td>
                    <?= $row['dateTime']; ?>
                </td>
                <td>
                    <?= $row['family']; ?>
                </td>
                <td>
                    <?= $row['amount']; ?>
                </td>
                <td>
                    <?= $row['shahr']; ?>
                </td>

                <td>
                    <a href="<?= baseURL ?>adminorder/detail/<?= $row['id']; ?>">
                        ...
                    </a>
                </td>


            </tr>


        <?php } ?>

    </table>



</div>


</div>


<script>
    function submitForm(formId) {
        $('#' + formId).submit();
    }
</script>











