<?php
require ('view/admin/layout.php');
$sliders = $data['sliders'];


?>

<div class="left">
    <p class="title">
        <a href="<?= baseURL ?>adminslider/index"> مدیریت تصاویر </a>
    </p>
    <form id="form1" action="<?= baseURL ?>adminslider/index" enctype="multipart/form-data" method="post" style="font-size: 10pt ; margin-bottom: 20px; float: right ; width: 100%" >
        <div class="row">
            <span  style="float:right; margin-right: 20px">
             انتخاب عنوان:
            </span>
            <input type="text" name="title" style="border:solid blue 1px ;float: right">
            <span  style="float:right; margin-right: 20px">
             لینک:
            </span>
            <input type="text" name="link" style="border:solid blue 1px ;float: right">

            <span  style="float:right; margin-right: 20px">
             انتخاب تصویر:
            </span>
            <input type="file" name="image" style="float: right">
            <a class="btn_green" style="float: right" onclick="submitform()">
                افزودن
            </a>
        </div>
    </form>



    <a class="btn_red" onclick="submitform2();">
        حذف
    </a>
    <form id="form2" action="<?= baseURL ?>/adminslider/deleteSliders" method="post">

        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>
                <td>
                    عنوان
                </td>

                <td>
                    تصاویر
                </td>
                <td>
                    اتنخاب
                </td>
            </tr>

            <?php
            $i = 0;
            foreach ($sliders as $slider) {
                $i++;
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $slider['title'] ?></td>
                    <td><img src="<?=baseURL . $slider['img'] ?>" style="width: 200px"></td>
                    <td><input type="checkbox" name="id[]" value="<?= $slider['id'] ?>"></td>
                </tr>
                <?php
            }
            ?>

        </table>
    </form>
</div>
</div>