<?php
$myComments =$data['myComments'];

?>
<div  style="display: none" id="user-panel-my-comment">
    <div style="width: 100% ; height: 35px ; background-color: #0f74a8 ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt"> نظرات من </p> </div>

    <table class="list2">
        <tr>
            <th>عنوان</th>
            <th>متن</th>
            <th>تاریخ</th>
            <th>عملیات</th>
            <th>نام محصول</th>
        </tr>
        <?php
        foreach ($myComments as $row) {
            $id = $row['id'];
            ?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['matn'] ?></td>
                <td><?= $row['tarikh'] ?></td>
                <td><a style="cursor: pointer" onclick="deleteComment(<?= $id ?> , this)">حذف</a></td>
                <td><?= $row['productTitle'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>


    <div style="width: 100% ; height: 35px ; background-color:floralwhite ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt"> </p> </div>
</div>

<script>
    function deleteComment(ID , Tag) {
        var imgTag = $(Tag);
        var parentTag = imgTag.parents('tr');
        var url = 'panel/deleteComment/'+ID;
        var data={};
        $.post( url , data , function (msg) {

            parentTag.remove();

        })
    }
</script>