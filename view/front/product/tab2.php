<?php
$fanni = $data[0];


foreach ($fanni as $row) {
$children = $row['children'];

    ?>
    <div class="ps-table__name"><?= $row['title'] ?></div>
    <table class="table ps-table ps-table--oriented">
        <tbody>
        <?php
        foreach ($children as $child) {
            ?>
            <tr>
                <th class="ps-table__th"><?= $child['title'] ?></th>
                <td><?php

                    if($child['valTitle'] == '')
                    {
                        echo "-";
                    }else
                    {
                        echo $child['valTitle'];
                    }


                    ?></td>
            </tr>
            <?php
        }
            ?>
        </tbody>
    </table>
    <?php
}
?>