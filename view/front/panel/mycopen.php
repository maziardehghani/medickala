<?php
$copens = $data['myCopen'];


?>
<div style="display: none" id="user-panel-copen">

    <div id="subCop" style="background-color: #8f8f73; width: 100% ; height: 30px ; margin-top:10px ">

        <a onclick="savecode()" style="cursor: pointer ; font-size: 12pt ; font-family: Tahoma ; padding-right: 20px"> ثبت کوپن +   </a> <input name="code" id="code" type="text" style="height: 20px ; margin-top: 5px">

    </div>

    <div style="width: 100% ; height: 35px ; background-color: #0f74a8 ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt"> کوپن ها </p> </div>

        <?php
        $i = 1;
        foreach ($copens as $copen) {

            ?>
            <table class="list2">
                <tr>
                    <th>کد</th>
                    <th> درصد تخفیف</th>
                    <th>تعداد استفاده شده</th>
                    <th>تعداد قابل استفاده</th>
                    <th>تعداد باقی مانده</th>

                </tr>
                <tr>
                    <td><?= $copen['code'] ?></td>
                    <td><?= $copen['darsad'] ?></td>
                    <td><?= $copen['used'] ?></td>
                    <td><?= $copen['max'] ?></td>
                    <td><?= $copen['max'] - $copen['used'] ?></td>
                </tr>
                <div
                    style="width: 100% ; height: 35px ; background-color:floralwhite ; margin-top: 30px ; margin-bottom: 30px">
                    <p style="padding: 4px; font-size: 15pt"></p></div>

            </table>
            <table class="list2" id="codeDetail">
                <tr>
                    <th>سفارش</th>
                    <th>تاریخ</th>
                    <th>نوع</th>

                </tr>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $copen['ordersCopen']['dateTime'] ?></td>
                    <td>خرید</td>

                </tr>
            </table>
            <?php
            $i++;
        }
        ?>



</div>
<script>
    function slide2() {
        $('#codeDetail').slideToggle(700);
    }
    function savecode() {

        var code = $("#code").val();
        var url = '<?= baseURL ?>panel/saveCode';
        var data={'code':code};
        $.post(url , data , function (msg) {
            window.location = 'panel/index'
        } )

    }
</script>
