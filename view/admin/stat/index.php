<?php

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
    <form id="order" action="<?= baseURL ?>adminstat/order" method="post">
    <p class="title">
        <a>
            آمار و گزارشات
        </a>
    </p>
    <div class="row2">
        <span class="title w120">
تاریخ شروع:
        </span>
        <span class="title">
روز:
        </span>
        <select name="day1">
            <?php
            for ($i = 1; $i < 32; $i++) {
                ?>
                <option value="<?= $i ?>">
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>

        <span class="title">
ماه:
        </span>
        <select name="month1"">
            <?php
            for ($i = 1; $i < 13; $i++) {
                ?>
                <option value="<?= $i ?>">
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>

        <span class="title">
سال:
        </span>
        <select name="year1">
            <?php
            for ($i = 1395; $i <= 1401; $i++) {
            ?>
                <option value="<?= $i ?>">
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>
    </div>

</div><div class="left">

    <div class="row2">
        <span class="title w120">
تاریخ پایان:
        </span>
        <span class="title">
روز:
        </span>
        <select name="day2">
            <?php
            for ($i = 1; $i < 32; $i++) {
                ?>
                <option value="<?= $i ?>">
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>

        <span class="title">
ماه:
        </span>
        <select name="month2">
            <?php
            for ($i = 1; $i < 13; $i++) {
                ?>
                <option value="<?= $i ?>">
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>

        <span class="title">
سال:
        </span>
        <select name="year2">
            <?php
            for ($i = 1395; $i <= 1401; $i++) {
                ?>
                <option value="<?= $i ?>">
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>
        <span onclick="submitForm('order')" class="btn_green" style="float: left">
            گزارش گیری
        </span>
        </form>
    </div>

</div>
<script>
    function submitForm(formID) {
        $("#"+formID).submit();
    }
</script>










