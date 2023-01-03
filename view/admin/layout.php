<?php error_reporting(E_ERROR | E_WARNING|E_PARSE);

$level = $data['levelUser'];
?>
<div id="main" style="width: 1200px;margin: 10px auto; height:500px;background-color: #fff ">
    <script src="<?= URL ?>plugins/jquery.min.js"></script>
    <style>
        #main::after
        {
            content: " ";
            clear: both;
            display: block;
            padding: 10px;
            font-size: 12pt;

        }
        .right {
            width: 240px;
            float: right;
            border: 1px solid #ccc;
        }
        .left {
            width: 920px;
            float: left;
            padding: 10px;
            box-shadow: 1px 1px 3px #ccc;
        }
        .right ul
        {
            padding: 0;
            margin: 0;
        }
        .right ul li a
        {
            display: block;
            padding: 3px;
            font-size: 11pt;
            border-bottom: 1px dashed #ccc;

        }
        .title
        {
            font-size: 12pt;
            border-bottom: solid 1px #ccc;
        }
        table.list
        {
            width: 100%;
        }
        table.list td
        {
            padding: 4px;
            font-size: 11pt;
             border: 1px solid #eee;
        }
        .btn_green
        {
            color: #fff;
            background: #4ed133 none repeat scroll 0 0;
            text-align: center;
            border: 1px solid #eee;
            border-radius: 3px;
            float: left;
            font-size: 9pt;
            margin-bottom: 3px;
            padding:1px 15px;
            cursor: pointer;

        }
        .btn_red
        {
            color: #fff;
            background: red none repeat scroll 0 0;
            text-align: center;
            border: 1px solid #eee;
            border-radius: 3px;
            float: left;
            font-size: 9pt;
            margin-bottom: 3px;
            padding:1px 15px;
            margin-left: 5px;
            cursor: pointer;

        }
    </style>
    <div class="right">
        <ul>
    <li><a href="<?= baseURL ?>admindashbord/index">داشبورد</a></li>
    <?php

    if ($level == 1)
    {
        ?>

        <li><a  href="<?= baseURL ?>admincategory/index">مدیریت دسته ها</a></li>

    <?php
    }
    ?>



            <li><a href="<?= baseURL ?>adminproduct/index">مدیریت محصولات</a></li>
            <li><a href="<?= baseURL ?>adminslider/index">مدیریت اسلایدر ها</a></li>
            <li><a href="<?= baseURL ?>adminorder/index">مدیریت سفارسات</a></li>
            <li><a href="<?= baseURL ?>admincomment/index">مدیریت نظرات</a></li>
            <?php
            if ($level == 1)
            {?>
            <li><a href="<?= baseURL ?>adminstat/index">گزارشات</a></li>
            <?php
    }
    ?>

            <li><a href="<?= baseURL ?>adminsetting/index">تنظیمات</a></li>
            

        </ul>

    </div>
    <script>
        function submitform() {

            $('#form1').submit();
        }

        function submitform2() {

            $('#form2').submit();
        }

    </script>