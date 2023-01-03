<?php
require ('view/admin/layout.php');


if($_GET['url'] == 'admincategory/index')
{
    $category =$data['category'];
}else
{
    $category =$data['children'];
}



$categoryInfo=[];
if(isset($data['categoryInfo']))
{
    $categoryInfo = $data['categoryInfo'];
}
$parents = [];
if(isset($data['parent']))
{
    $parents = $data['parent'];
    $parents = array_reverse($parents);
}


?>

<div class="left">
    <p class="title">
        <a href="http://localhost/medickala/admincategory/showchildren/0"> مدیریت دسته ها </a>
        (
        <?php
        foreach ($parents as $row)
        {
         ?>
            <a href="<?= $row['id']?>"><?= $row['title']?></a> -
        <?php
        }
        ?>
        <a href="<?php if (isset($categoryInfo['id'])) {echo $categoryInfo['id'];} else {echo "index";}?>"><?php if (isset($categoryInfo['title'])) {echo $categoryInfo['title'];} else {echo "دسته های اصلی";}?></a> -
        )
    </p>
    <form id="form1" action="http://localhost/medickala/admincategory/deletecategory/<?= @$categoryInfo['id'] ?>" method="post">

    <a class="btn_green" href="http://localhost/medickala/admincategory/addcategory/<?= @$categoryInfo['id'] ?>">
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

            <td>
                عنوان زیر دسته
            </td>

            <td>
             مشاهده زیر دسته ها
            </td>



            <td>
                ویرایش
            </td>

            <td>
                ویژگی ها
            </td>

            <td>
                انتخاب
            </td>
        </tr>
        <?php
        foreach ($category as $row)
        {
            ?>

            <tr>
                <td> <?= $row['id']; ?> </td>
                <td> <?= $row['title']; ?> </td>
                <td> <a href="http://localhost/medickala/admincategory/showchildren/<?= $row['id']; ?>">مشاهده زیر دسته ها  </a> </td>
                <td> <a href="http://localhost/medickala/admincategory/addcategory/<?= $row['id']; ?>/edit"> Edit  </a> </td>
                <td> <a href="http://localhost/medickala/admincategory/showattr/<?= $row['id']; ?>"> مشاهده  </a> </td>

                <td> <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">  </td>
            </tr>

            <?php
        }
        ?>
    </table>
    </form>
</div>
</div>