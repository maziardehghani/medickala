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

</style>

<?php
$userInfo = $data['userInfo'];

?>

<div id="main">


    <h4>
        مشخصات پروفایل
    </h4>

    <form id="form" method="post" action="<?= baseURL ?>panel/editProfile">

        <div class="row2">

        <span class="title">
            ایمیل:
        </span>

            <input type="text" name="email" value="<?= $userInfo['email'] ?>">

        </div>

        <div class="row2">

        <span class="title">
نام و نام خانوادگی:
        </span>

            <input type="text" name="family" value="<?= $userInfo['family'] ?>">

        </div>

        <div class="row2">

        <span class="title">
کد ملی:
        </span>

            <input type="text" name="code_meli" value="-">

        </div>
        <div class="row2">

        <span class="title">
شماره تلفن ثابت:
        </span>

            <input type="text" name="tel" value="-">

        </div>

        <div class="row2">

        <span class="title">
شماره همراه:
        </span>

            <input type="text" name="mobile" value="<?= $userInfo['phone'] ?>">

        </div>


        <span class="title"  style="width: auto;">
روز:
        </span>
        <?php
        $born = $userInfo['born'];
        $born = explode('/',$born);
        $day = $born[2];
        $month = $born[1];
        $year = $born[0];
        ?>
        <select name="day">
            <?php
            for ($i = 1; $i < 32; $i++) {
                ?>
                <option value="<?= $i ?>"<?php if ($i == $day){echo "selected = 'selected'";} ?>>
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>
        <span class="title"  style="width: auto;">
ماه:
        </span>
        <select name="month">
            <?php
            for ($i = 1; $i < 13; $i++) {
                ?>
                <option value="<?= $i ?>"<?php if ($i == $month){echo "selected = 'selected'";} ?>>
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>
        <span class="title"  style="width: auto;">
سال:
        </span>
        <select name="year">
            <?php
            for ($i = 1310; $i <= 1401 ; $i++) {
                ?>
                <option value="<?= $i ?>"<?php if ($i == $year){echo "selected = 'selected'";} ?>>
                    <?= $i ?>
                </option>
            <?php } ?>
        </select>

        <div class="row2">

        <span class="title">
محل سکونت:
        </span>

            <input type="text" name="address" style="width: 350px;" value="<?= $userInfo['address'] ?>">

        </div>
        <div class="row2">

        <span class="title">
جنسیت:
        </span>


            <span class="title" style="width: auto;">
مرد:
        </span>

            <input type="radio" name="jender" value="1"<?php if ($userInfo['jender']==1){echo "checked='true'";} ?> >

            <span class="title" style="width: auto;margin-right: 20px">
زن:
        </span>

            <input type="radio" name="jender" value="2" <?php if ($userInfo['jender']==2){echo "checked='true'";} ?>>

        </div>
        <div class="row2">

        <span class="title">
دریافت خبرنامه

        </span>


            <input type="checkbox" name="khabarname" value="1" <?php if ($userInfo['khabarname'] == 1) {
                echo 'checked="true"';
            } ?>>
        </div>

        <div class="row2">
        <span onclick="submit()" class="btn_green" style="float: left;cursor: pointer;">
            ثبت اطلاعات
        </span>
        </div>

    </form>

</div>

<script>
    function submit() {
        $('#form').submit();
    }
</script>





















