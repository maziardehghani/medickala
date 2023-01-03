
<?php
$myMessage = $data['myMessage'];

?>

<div  style="display: none" id="user-panel-message">

    <div style="width: 100% ; height: 35px ; background-color: #0f74a8 ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt"> پیغام ها </p> </div>
    <table class="list2">
        <tr>
            <th>عنوان</th>
            <th>متن</th>
            <th>وضعیت</th>

        </tr>
        <?php
        foreach ($myMessage as $row) {
            ?>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['matn'] ?></td>
                <td><?php
                    if ($row['status'] == 1)
                        echo "خوانده شده";
                    else
                    {
                        echo "خوانده نشده";
                    }
                     ?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>