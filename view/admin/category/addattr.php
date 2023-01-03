<?php
require ('view/admin/layout.php');
$edit = $data['edit'];
$attrInfo = $data['attrInfo'];
$attr = $data['showattr'];
$categoryID = $data['categoryID'];
echo $edit;
?>
<div class="left">
    <p class="title">
        <?php
        if(($edit == ''))
        {
        ?>
            ایجاد ویژگی جدید
        <?php
        }else
        {?>
            ویرایش ویژگی
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
                border: 1px solid red;
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
        </style>


    <form action="http://localhost/medickala/admincategory/addattr/<?= $categoryID ?>/<?= $attrInfo['id'] ?>/<?= $edit ?>" method="post">
        <div class="row">

            <span class="span-title"> عنوان ویژگی :</span>
            <input class="input" type="text" name="title" value="<?= $attrInfo['title'] ?>">

        </div>
        <div class="row">

            <span class="span-title"> انتخاب زیر ویژگی:</span>
            <select class="select" name="parent">
                <option class="option"> انتخاب کنید </option>
                <?php
                foreach($attr as $row)
                {
                    ?>
                    <option class="option" value="<?= $row['id'] ?> "> <?= $row['title'] ?> </option>
                    <?php
                }
                ?>
            </select>

        </div>
        <button>
            انجام عملیات
        </button>
    </form>
</div>
</div>

