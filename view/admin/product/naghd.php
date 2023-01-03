<?php
require ('view/admin/layout.php');
$naghd =$data['naghd'];
$productInfo = $data['productInfo'];

?>

<div class="left">
    <p class="title">
        <a href="http://localhost/medickala/admincategory/showchildren/0">
            مدیریت نقد و برسی
        </a>
        <span>
            (<?= $productInfo['title'] ?>)
        </span>

    </p>
    <form id="form1" action="http://localhost/medickala/adminproduct/deletenaghd/<?= $productInfo['id'] ?>" method="post">

        <a href="http://localhost/medickala/adminproduct/addnaghd/<?= $productInfo['id'] ?>" class="btn_green">
            افزودن
        </a>
        <a class="btn_red" onclick="submitform();">
            حذف
        </a>

        <table class="list" cellspacing="0">
            <tr>
                <td>
                    عنوان
                </td>
                <td>
                    ویرایش
                </td>
                <td>
                    انتخاب
                </td>
            </tr>
            <?php
            foreach ($naghd as $row)
            {
                ?>

                <tr>

                    <td> <?= $row['title']; ?> </td>
                    <td> <a href="http://localhost/medickala/adminproduct/addproduct/<?= $row['id']; ?>/edit"> Edit  </a> </td>
                    <td> <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">  </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </form>
</div>
</div>