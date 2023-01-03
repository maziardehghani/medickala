<?php
require ('view/admin/layout.php');
$category = $data['categoryInfo'];
$parentId = $data['parent_id'];
$edit = $data['edit'];
$categoryParent = $data['categoryParent'];



?>
<div class="left">
    <p class="title">
        <?php
        if(!$edit)
        {
        ?>
        ایجاد دسته جدید
        <?php
        }else {
            ?>
            ویرایش دسته
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


    <form action="http://localhost/medickala/admincategory/addcategory/<?= $categoryParent['id'] ?>/<?= $edit ?>" method="post">
        <div class="row">

            <span class="span-title"> عنوان دسته :</span>
            <input class="input" type="text" name="title" value="<?php
            if ($edit)
                echo $categoryParent['title'];

            ?>">

        </div>
        <div class="row">

            <span class="span-title"> انتخاب زیر دسته:</span>
            <select class="select" name="parent">
                <option class="option"> انتخاب کنید </option>

                <?php


                if($edit == '')
                {
                    $select = $parentId;

                }else
                {
                    $select = $categoryParent['parent'];
                }


                foreach($category as $row)
                {
                    if($row['id'] == $select)
                    {
                        $x = 'selected';
                    }else
                    {
                        $x = '';
                    }
                ?>
                    <option class="option" value="<?= $row['id'] ?>" <?= $x ?>> <?= $row['title'] ?> </option>
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

