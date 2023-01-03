<?php
require ('view/admin/layout.php');
$attrs = $data['showattr'];
$attrID = $data['attrID'];
$categoryInfo = $data['categoryInfo'];
$categoryID = $data['categoryID'];
?>

<div class="left">
    <p class="title">
        مدیریت ویژگی ها
        <a href="http://localhost/medickala/admincategory/showattr/<?=$categoryInfo['id']?>">
          (<?= $categoryInfo['title']?>)
        </a>
        <span>
            - ()
        </span>
        <a href="" > </a>
    </p>
    <form id="form1" action="http://localhost/medickala/admincategory/deleteAttr/<?= $categoryID ?>/<?= $attrID ?>" method="post">

        <a class="btn_green" href="http://localhost/medickala/admincategory/addattr/<?= $categoryID ?>">
            افزودن
        </a>
        <a class="btn_red" onclick="submitform();">
            حذف
        </a>
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    ردیف
                </td>
                <td style="width:400px ">
                    عنوان ویژگی
                </td>
                <td>
                    مقادیر پیشفرض
                </td>
                <td>
                    مشاهده زیر ویژگی ها
                </td>

                <td>
                    ویرایش
                </td>

                <td>
                    انتخاب
                </td>
            </tr>


                    <?php
                    foreach ($attrs as $attr) {
                        ?>
                        <tr>

                        <td><?= $attr['id'] ?></td>
                        <td><?= $attr['title'] ?></td>
                            <td><a href="<?= baseURL ?>admincategory/attrval/<?= $attr['id'] ?>"> مقادیر پیشفرض</a></td>
                        <td>
                            <a href="<?= baseURL ?>admincategory/showattr/<?= $categoryID ?>/<?= $attr['id'] ?>">مشاهده </a></td>

                        <td><a href="<?= baseURL ?>admincategory/addattr/<?= $categoryID ?>/<?= $attr['id'] ?>/edit"> Edit </a></td>

                        <td><input type="checkbox" name="id[]" value="<?= $attr['id'] ?>"></td>
                </tr>
            <?php
                    }
                    ?>



        </table>
    </form>
</div>
</div>