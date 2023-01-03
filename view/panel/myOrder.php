<?php
$orderTBL = $data['myOrder'];
?>
<div  style="display: none" id="user-panel-my-orders">
    <div style="width: 100% ; height: 35px ; background-color: #0f74a8 ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt"> سفارشات من </p> </div>



            <?php
            $i =1;
            foreach ($orderTBL as $row) {
                foreach ($row['basket'] as $row2) {
                ?>
                    <div style="width: 100% ; height: 35px ; background-color:floralwhite; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt ; color: black" >سفارش <?= $i ?> </p> </div>

                    <table class="list2">
        <tr>
            <th> نام </th>
            <th>ایمیل</th>
            <th>شهر</th>
            <th>کد پستی</th>
            <th>تلفن</th>
            <th>ادرس</th>
            <th>تاریخ</th>
            <th>مبلغ قابل پرداخت</th>
            <th>وضعیت خرید</th>

        </tr>
        <tr>
            <td><?= $row['family'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['shahr'] ?></td>
            <td><?= $row['codeposti'] ?></td>
            <td><?= $row['telephone']?></td>
            <td><?= $row['address']?></td>
            <td><?= $row['dateTime']?></td>
            <td><?= number_format($row['amount'])?></td>

            <td><?= $row['title_status']?></td>
        </tr>
    </table>

                    <table  class="list2" id="shopDetail">

                    <tr>
                        <th> نام محصول </th>
                        <th>تعداد</th>
                        <th>رنگ</th>
                        <th>تخفیف</th>
                        <th>قیمت واحد</th>
                        <th>قیمت کل</th>
                        <th>هزینه پست</th>
                        <th>کد تراکنش</th>
                        <th>عملیات</th>
                    </tr>
                    <tr>
                        <td><?= $row2['title'] ?></td>
                        <td><?= $row2['tedad'] ?></td>
                        <td>
                        <?php
                        foreach ($row2['colorName'] as $row3) {
                            ?>
                           <?= $row3['title'] ?>
                            <?php
                        }
                            ?>
                        </td>
                        <td>%<?= $row2['discount'] ?></td>
                        <td><?= number_format($row2['Endprice']) ?></td>
                        <td><?= number_format($row2['Endprice'] * $row2['tedad']) ?></td>
                        <td><?= number_format(transfer) ?></td>
                        <td><?= $row['refrence']?></td>
                        <td><a href="#"> پرداخت </a></td>
                    </tr>
                </table>
                    <?php
                    $i++;
                }
            }
            ?>
</div>

<script>
    function slide() {
        $('#shopDetail').slideToggle();
    }
</script>