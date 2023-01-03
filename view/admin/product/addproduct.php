
<script src="<?= URL ?>ckeditor/ckeditor.js"> </script>
<?php
error_reporting(E_ERROR | E_WARNING|E_PARSE);
require ('view/admin/layout.php');
$category = $data['category'];
$productInfo = $data['productInfo'];
$colors = $data['color'];
$edit = $data['edit']
?>
<div class="left">
    <p class="title">
        <?php
        if($edit) {
            ?>
            ویرایش محصول
            <?php
        }else
        {
            ?>
            ایجاد محصول جدید
        <?php
        }
        ?>
        <style>
            .row
            {
                width: 100%;
                float: right;
                margin-top: 5px;
            }
            .span-title
            {
                width: 150px;
                display: inline-block;
                size: 10pt;
                padding-right:20px ;
            }
            .input
            {
                width: 200px;
                height: 24px;
                border: 1px solid black;
            }
            .select
            {
                height: 32px;
                line-height: 30px;
                padding: 2px;
            }
            .option
            {
                padding: 2px;
                font-size: 10pt;
            }
            textarea
            {
                width: 500px;
                height: 250px;
                border: solid 1px #ccc;
            }
            .span-item
            {
                padding :2px 14px;
                display: inline-block;
                height: 30px;
                background: #bc0084 none repeat scroll 0 0 ;
                color: #fff;
                text-align: center;
                font-size: 10pt;
                position: relative;
                margin-right: 3px;
            }
            .span-item img
            {
                width: 15px;
                position: absolute;
                left: 0px;
                top: 1px;
                cursor: pointer;
            }

        </style>


    <form id="form1" action="http://localhost/medickala/adminproduct/addproduct/<?= $productInfo['id'] ?>/<?= $edit ?>" enctype="multipart/form-data" method="post">
        <div class="row">

            <span class="span-title"> عنوان محصول :</span>
            <input class="input" type="text" name="title" value="<?= $productInfo['title'] ?>"> </div>
           <div class="row">

               <span class="span-title"> دسته والد :</span>
               <?php
               $categoryId = $productInfo['cat'];

               $selected  ='';

               ?>
               <select class="select" name="categoryId">
                   <option class="option"> انتخاب کنید </option>

                   <?php
                       foreach($category as $row){
                       if($row['id'] == $categoryId)
                       {
                           $selected  ='selected';
                       }else
                       {
                           $selected  ='';
                       }
                       ?>

                           <option class="option"  value="<?= $row['id'] ?>"<?= $selected ?>> <?= $row['title'] ?> </option>
                           <?php
                       }
                       ?>




               </select>


        </div>

        <div class="row">
            <span class="span-title"> قیمت :</span>
            <input class="input" type="text" name="price" value="<?= $productInfo['price'] ?>">
        </div>
        <div class="row">
            <span class="span-title"> تعداد موجود :</span>
            <input class="input" type="text" name="count_left" value="<?= $productInfo['tedad_mojood'] ?>">
        </div>
        <div class="row">
            <span class="span-title"> تخفیف(%) :</span>
            <input class="input" type="text" name="discount" value="<?= $productInfo['discount'] ?>">
        </div>
        <div class="row">
            <span class="span-title"> پرفروش :</span>
            <input class="input" type="text" name="bestsellet" value="<?= $productInfo['bestsellet'] ?>">
        </div>
        <div class="row">
            <span class="span-title"> بارگزاری عکس :</span>

            <input class="input" type="file" name="image">

            <?php
            if ($edit)
            {
            ?>
            <div style=" width: 220px ; height: 220px ; display: inline-block;float: left;
                    background: url('<?= URL ?>img/products/<?= $productInfo['id'] ?>/product_size220.jpg');"
        </div>

        <?php
        }
        ?>
        </div>
        <div class="row">
            <span class="span-title">معرفی اجمالی :</span>
            <textarea class="editor1" id="editor1" name="introduction"><?= $productInfo['introduction'] ?> </textarea>
        </div>
        <script>
            CKEDITOR.replace('editor1',{

            });

        </script>
        <div class="row">
            <span class="span-title"> انتخاب رنگ :</span>

                <?php

                foreach($colors as $row)
                {
                    ?>
                    <input type="checkbox" name="color[]" value="<?= $row['id'] ?>">
                    <?= $row['title'] ?>
                    <?php
                }
                ?>


        </div>


        <a class="btn_green" onclick="submitform();">
            انجام عملیات
        </a>
    </form>

</div>

</div>
