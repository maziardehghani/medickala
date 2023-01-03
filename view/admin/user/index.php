<?php

$activeMenu = 'order';

require('view/admin/layout.php');

$user = $data['user'];


?>
<style>
    .w400 {
        width: 600px;
    }

    .selectTag {
        float: left;
        margin-left: 10px;
        font-size: 10pt;
        padding: 1px;
    }
</style>

<div class="left">

    <p class="title">
        <a>
            مدیریت اعضا
        </a>


    </p>


    <a class="btn_green" onclick="submitFormAction()">
        اجرای عملیات
    </a>

    <select class="selectTag" name="action">
        <option value="1">
            تغییر به مدیر
        </option>
        <option value="2">
            تغییر به کارمند
        </option>
        <option value="3">
            تغییر به کاربر معمولی
        </option>
        <option value="4">
            حذف
        </option>
    </select>

    <script>
        function submitFormAction() {
            var actionSelected = $('.selectTag option:selected').val();
            var action = '';
            if (actionSelected==1)
            {
                action = "<?= baseURL ?>adminuser/changeLevel1";
            }
            if (actionSelected==2)
            {
                action = "<?= baseURL ?>adminuser/changeLevel2";
            }
            if (actionSelected==3)
            {
                action = "<?= baseURL ?>adminuser/changeLevel3";
            }
            if (actionSelected==4)
            {
                action = "<?= baseURL ?>adminuser/deleteuser";
            }
            var form = $('form');
            form.attr('action', action);
            form.submit();
        }
    </script>


    <form action="" method="post">

        <table class="list" cellspacing="0">

            <tr>
                <td>
                    ردیف
                </td>

                <td style="width: 350px;">
                    نام و نام خانوادگی
                </td>
                <td>
                    تاریخ عضویت
                </td>
                <td>
                    شماره تماس
                </td>
                <td>
                    سطح دسترسی
                </td>
                <td>
                    انتخاب
                </td>

            </tr>

            <?php
            $i = 1;
            foreach ($user as $row) {

                ?>
                <tr>
                    <td>
                        <?= $i ?>
                    </td>
                    <td>
                        <?= $row['family']; ?>
                    </td>
                    <td>
                        <?= $row['tarikh']; ?>
                    </td>
                    <td>
                        <?= $row['phone']; ?>
                    </td>
                    <td>
                        <?= $row['levelTitle']; ?>
                    </td>

                    <td>
                        <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                    </td>
                </tr>

                <?php
                $i++;
            } ?>

        </table>

    </form>

</div>


</div>