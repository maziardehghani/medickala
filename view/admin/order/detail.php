<?php

require ('view/admin/layout.php');
$orderInfo = $data['orderInfo'];
$orderBasketInfo = $data['orderBasketInfo'];


?>
<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    #main {

    }

    .btn_green {
        background: #36be2b none repeat scroll 0 0;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        display: inline-block;

        font-size: 11pt;
        height: 37px;
        line-height: 34px;
        text-align: center;
        width: 170px;
        border-radius: 4px;
        cursor: pointer;
    }


</style>
<style>

    .order-steps {

        padding-left: 10px;
        padding-right: 200px;
        padding-top: 53px;
        height: 100px;

    }

    .order-steps .dashed {

        float: right;
        margin-top: 12px;
        margin-left: 4px;
    }

    .order-steps .dashed span {
        width: 11px;
        height: 3px;
        background: blue;
        display: block;
        float: right;
        margin-left: 3px;
    }

    .order-steps ul {

    }

    .order-steps ul li {

        display: block;
        float: right;
        height: 1px;
        position: relative;
        width: 180px;

    }

    .order-steps ul li .circle {

        width: 19px;
        height: 19px;
        display: block;
        border: 3px solid #ccc;
        border-radius: 100%;
        position: absolute;
    }

    .order-steps ul li.active .circle {

        border: 3px solid #2396f3;
        background: #2396f3 url() no-repeat -810px -476px;
        border-radius: 100%;
        position: absolute;
    }

    .order-steps ul li .line {

        width: 128px;
        height: 2px;
        display: block;
        background: #ccc;
        position: absolute;
        right: 36px;
        top: 15px;

    }

    .order-steps ul li.active .line {

        background: #2396f3;

    }

    .order-steps ul li .title {

        font-size: 11.7pt;
        position: absolute;
        right: -41px;
        top: 27px;
        width: 146px;
    }

    .order-steps ul li.active .title {

        color: #2396f3;
    }

</style>

<style>
    #products, #addressinfo {
        width: 100%;
    }

    table tr:first-child td {
        background: #b1e09c;
    }

    table td {
        padding: 4px;
        font-size: 10.5pt;
        border-bottom: 1px solid #eee;
        border-left: 1px solid #eee;
    }

    table tr td:first-child {
        border-right: 1px solid #eee;
    }

    table tr:nth-child(even) td {
        background: #f2f4f2;
    }

    .error {
        border: 1px solid red;
        text-align: center;
        font-size: 12pt;
        color: red;

        padding: 8px;
    }

    h4 {

        font-size: 13pt;
        margin-top: 4px;
    }
</style>







<div class="left">

    <form id="form1" method="post" action="">


        <h4>
            ???????????? ?????????? ????:

            <a class="btn_green"
               style="float: left;margin-left: 10px;margin-top: 3px;">
                ???????????? ????????????
            </a>

        </h4>




        <table id="products" cellpadding="0" cellspacing="0">

            <tr>
                <td>
                    ?????? ??????????
                </td>

                <td>
                    ??????
                </td>


                <td>
                    ??????????
                </td>

                <td>

                    ????????
                </td>
                <td>
                    ??????????
                </td>

            </tr>

            <?php
            foreach ($orderBasketInfo as $row)
            {
            ?>
            <tr>


                <td>
                    <?= $row['title'] ?>
                </td>
                <td>
                    <?php
                    foreach ($row['colorName'] as $color)
                    ?>
                    <?= $color['title'] ?>
                </td>
                <td>
                    <?= $row['tedad'] ?>
                </td>
                <td>
                    <?= $row['Endprice'] ?>
                    ??????????
                </td>
                <td>
                    <?= $row['discount'] ?>????????
                </td>


            </tr>
            <?php
            }
            ?>



        </table>


        <style>
            .row2 {
                background: #d9f4ec;
                padding: 15px 0;
                font-size: 11pt;
                margin-top: 15px;
                margin-bottom: 15px;
            }
        </style>


        <div class="row2">

            <p>
                 ?????????? ??????????:

                <?= $orderInfo['title_status']?>

            </p>
            <p>
                ?????????? ????????:

                <?php
                if ($row['pay']==1)
                {
                    echo "???????????? ??????";
                }
                ?>

            </p>

            <p>



            <p>
                ?????????? ????????:

                <?= $orderInfo['reservation'] ?>

            </p>

        </div>


        <table id="addressinfo" cellpadding="0" cellspacing="0">

            <tr>
                <td>
                    ????????????
                </td>
                <td>
                    ????????
                </td>
                <td>
                    ??????
                </td>
                <td>
                    ???? ????????
                </td>
                <td>
                    ????????????
                </td>

            </tr>

            <tr>
                <td>

                    <input name="family" type="text" value=" <?= $orderInfo['family'] ?>">

                </td>
                <td>
                    <input name="address" type="text" value=" <?= $orderInfo['address'] ?>">
                </td>
                <td>
                    <input name="shahr" type="text" value=" <?= $orderInfo['shahr'] ?>">
                </td>
                <td>

                    <input name="code_posti" type="text" value=" <?= $orderInfo['codeposti'] ?>">
                </td>
                <td>
                    <input name="tel" type="text" value=" <?= $orderInfo['telephone'] ?>">
                </td>
            </tr>

        </table>

        <div class="row2">

        <span class="btn_green" onclick="submitForm()">
            ?????????? ??????????????
        </span>

        </div>


    </form>
</div>



<script>
    function submitForm() {
        $('#form1').submit();
    }
</script>