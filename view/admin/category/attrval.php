<?php
require ('view/admin/layout.php');

$attrVal = $data['attrVal'];
$attrInfo =$data['attrInfo'];

?>
<div class="left">
    <p class="title">
        مقادیر پیشفرض(<a><?= $attrInfo['title'] ?></a>)
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
                border: 1px solid blue;
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


    <form action="<?=baseURL."admincategory/attrval/". $attrInfo['id'] ?>" method="post">

            <?php
                    $size = sizeof($attrVal);
            foreach ($attrVal as $row) {
                ?>
            <div class="row">
                <span class="span-title"> مقدار ویژگی :</span>
                <input class="input" type="text" name="attrval<?= $row['ID'] ?>" value="<?= $row['val'] ?>">
            </div>
                <?php
            }
            ?>
        <?php
        for ($i =1 ; $i<10-$size;$i++)
        {

        ?>
            <div class="row">
                <span class="span-title"> مقدار ویژگی :</span>
                <input class="input" type="text" name="attrvalnew[]" value="">
            </div>
        <?php

        }
        ?>
        <input class="input" type="hidden" name="submit" value="">

        <button>
            انجام عملیات
        </button>
    </form>
</div>
</div>

