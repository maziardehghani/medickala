<?php
require ('view/admin/layout.php');
$orders = $data['orders'];

?>

<div class="left">
    <p class="title">
        <a href="http://localhost/medickala/adminorder/"> مدیریت سفارشات </a>

    </p>
    <form id="form1" action="<?= baseURL ?>adminorder/delete" method="post">
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>

                <td>
                    تاریخ
                </td>

                <td>
                    فامیل
                </td>
                <td>
                    شهر
                </td>
                <td>
                    مبلغ
                </td>
                <td>
                    کد تراکنش
                </td>
                <td>
                    جزعیات
                </td>
                <td>
                    انتخاب
                </td>
            </tr>
            <?php
            foreach ($orders as $row)
            {
                ?>

                <tr>
                    <td> <?= $row['id']; ?> </td>
                    <td> <?= $row['dateTime']; ?> </td>
                    <td> <?= $row['family']; ?> </td>
                    <td> <?= $row['shahr']; ?> </td>
                    <td> <?= $row['amount']; ?> </td>
                    <td> <?= $row['reservation']; ?> </td>
                    <td><a href="<?= baseURL ?>adminorder/detail/<?= $row['id'] ?>">...</a> </td>
                    <td> <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">  </td>
                </tr>

                <?php
            }
            ?>
            <a class="btn_red" onclick="submitform();">
                حذف
            </a>
        </table>
    </form>
</div>
<script>
    function submitform() {
       $('#form1').submit();
    }
</script>