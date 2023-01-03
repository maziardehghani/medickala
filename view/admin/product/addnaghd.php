<script src="<?= URL ?>ckeditor/ckeditor.js"> </script>
<?php
error_reporting(E_ERROR | E_WARNING|E_PARSE);
require ('view/admin/layout.php');
$productInfo = $data['productInfo'];
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
            ایجاد نقد و برسی جدید (<?= $productInfo['title'] ?>)
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


    <form id="form1" action="http://localhost/medickala/adminproduct/addnaghd/<?= @$productInfo['id'] ?>" method="post">
        <div class="row">

            <span class="span-title"> عنوان نقد:</span>
            <input class="input" type="text" name="title" value=""> </div>
        <div class="row">
            <span class="span-title">توضیحات :</span>
            <textarea class="editor1" id="editor1" name="description"></textarea>
        </div>
        <script>
            CKEDITOR.replace('editor1',{

            });

        </script>



        <a class="btn_green" onclick="submitform();">
            انجام عملیات
        </a>
    </form>

</div>

</div>
