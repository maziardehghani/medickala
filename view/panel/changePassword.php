<style>

    #main::after {
        content: " ";
        clear: both;
        display: block;
    }

    #main {
        width: 1200px;
        margin: 10px auto;
        padding: 10px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 4px #fff;
    }

    .row2 {
        width: 100%;
        float: right;
        margin-bottom: 15px;
    }

    .row2 input[type=text] {
        width: 250px;
        height: 22px;
        padding: 2px;
        font-size: 10.5pt;
        float: right;
        border: 1px solid #ccc;
    }

    .row2 .title {
        font-size: 10.5pt;
        float: right;
        width: 200px;
    }

    h4 {
        font-size: 12pt;
    }

    select {
        float: right;
        margin-right: 5px;
        width: 120px;
        margin-top: 3px;
        font-size: 10.5pt;

    }

    input[type=checkbox] {
        float: right;
        margin-top: 8px;
    }

    input[type=radio] {
        float: right;
        margin-top: 8px;
    }

    .btn_green {
        background: #36be2b none repeat scroll 0 0;
        box-shadow: 1px 1px 3px #ccc;
        color: #fff;
        display: block;
        font-size: 11pt;
        height: 37px;
        line-height: 34px;
        text-align: center;
        width: 170px;
        border-radius: 4px;
    }
    .row2 input[type=password] {
        width: 250px;
        height: 22px;
        padding: 2px;
        font-size: 10.5pt;

        float: right;
        border: 1px solid #ccc;
    }

</style>


<?php

    $Error =  @$_GET['error'];

if (($Error)==1)
    {
        echo "<p class='error'> رمز عبور فعلی اشتباه است</p>";
    }else if (($Error)==2)
{
    echo "<p class='error'> رمز غبور مغایرت ندارد</p>";
}else if (($Error)==3)
{
    echo "<p class='success'> رمز با موفقیت ویرایش شد</p>";
}

?>
<div id="main">




    <h4>
        تغییر رمز عبور
    </h4>

    <form id="form" method="post" action="<?= baseURL ?>panel/changePassword">

        <div class="row2">

        <span class="title">
رمز عبور فعلی:
        </span>

            <input type="password" name="pass_old">

        </div>

        <div class="row2">

        <span class="title">
رمز عبور جدید:
        </span>

            <input type="password" name="pass_new">

        </div>

        <div class="row2">

        <span class="title">
تکرار رمز عبور:
        </span>

            <input type="password" name="pass_confirm">

        </div>


        <div class="row2">
        <span onclick="submitForm()" class="btn_green" style="float: left;cursor: pointer;">
            ثبت اطلاعات
        </span>
        </div>

    </form>

</div>
<script>
    function submitForm() {
        $('#form').submit();
    }
</script>
