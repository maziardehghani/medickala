<?php
require ('view/admin/layout.php');
$attrProduct = $data['attrproduct'];
$productInfo = $data['productInfo'];

?>
<div class="left">
    <p class="title">
        ویژگی های محصول : <?= $productInfo['title'] ?>
    </p>
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
        select
        {
            height: 32px;
            width: 200px;
            line-height: 30px;
            padding: 2px;
        }
        option
        {
            width: 200px;
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


    <form id="form1" action="" method="post">

        <input type="hidden" name="submiting">

        <?php

        foreach ($attrProduct as $row)
        {
            ?>
            <div class="row">
                <span class="span-title"> <?= $row['title'] ?></span>
                <select name="<?php echo "X".$row['id'] ?>">
                    <?php
                    $values = $row['values'];
                    foreach ($values as $value) {
                        if ($row['valueID'] == $value['ID'])
                        {
                            $selected = 1;
                        }else
                        {
                            $selected = 0;
                        }
                        ?>
                        <option value="<?= $value['ID'] ?>" <?php if($selected == 1){echo "selected=selected";} ?> ><?= $value['val'] ?></option>
                        <?php
                    }
                    ?>

                </select>

                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                <a style="font-size: 10pt;color: blue;margin-right:7px;margin-top: 7px " href="<?= baseURL ?>admincategory/attrval/<?= $row['id'] ?>" >
                    مشاهده مقادیر پیش فرض
                </a>
            </div>

            <?php
        }
        ?>

        <a class="btn_green" onclick="submitform();">
            انجام عملیات
        </a>
    </form>

</div>

</div>
