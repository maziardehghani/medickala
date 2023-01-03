<?php
require ('view/admin/layout.php');
    $products =$data['product'];

?>

<div class="left">
    <p class="title">
        <a href="http://localhost/medickala/admincategory/showchildren/0"> مدیریت محصولات </a>

    </p>
    <form id="form1" action="http://localhost/medickala/adminproduct/deleteproduct" method="post">

        <a class="btn_green" href="http://localhost/medickala/adminproduct/addproduct">
            افزودن
        </a>
        <a class="btn_red" onclick="submitform();">
            حذف
        </a>
        <table class="list" cellspacing="0">
            <tr>
                <td>
                    کد محصول
                </td>

                <td>
                    عنوان محصول
                </td>

                <td>
                    قیمت
                </td>
                <td>
                    تخفیف
                </td>

                <td>
                    ویرایش
                </td>

                <td>
                    نقد
                </td>
                <td>
                    گالری
                </td>
                <td>
                    ویژگی ها
                </td>

                <td>
                    انتخاب
                </td>
            </tr>
            <?php
            foreach ($products as $row)
            {
                ?>

                <tr>
                    <td> <?= $row['id']; ?> </td>
                    <td> <?= $row['title']; ?> </td>
                    <td> <?= $row['price']; ?> </td>
                    <td> <?= $row['discount']; ?> </td>
                    <td> <a href="http://localhost/medickala/adminproduct/addproduct/<?= $row['id']; ?>/edit"> Edit  </a> </td>
                    <td> <a href="http://localhost/medickala/adminproduct/naghd/<?= $row['id']; ?>"> نقد و برسی </a> </td>
                    <td> <a href="http://localhost/medickala/adminproduct/gallery/<?= $row['id']; ?>"> تصاویر </a> </td>
                    <td> <a href="http://localhost/medickala/adminproduct/attr/<?=  $row['id']; ?>"> مشاهده </a> </td>
                    <td> <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">  </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </form>
</div>
</div>