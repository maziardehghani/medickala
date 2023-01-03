<div  id="user-panel-userInfo">
    <div style="width: 100% ; height: 35px ; background-color: #0f74a8 ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt">اطلاعات کاربری  </p> </div>
    <table class="list">
        <tr>
            <td>
                <span>  نام و نام خانوادگی: </span><span> <?= $userInfo['family'] ?> <span>
            </td>
            <td>
                <span>ادرس ایمیل:</span><span><?= $userInfo['email'] ?><span>
            </td>
            <td>
                    <span>تلفن همراه:<span><span><?= $userInfo['phone'] ?><span>
            </td>
        </tr>
        <tr>
            <td>
                    <span>کدملی:<span><span>-<span>
            </td>
            <td>
                    <span>محل سکونت:<span><span><?= $userInfo['address'] ?><span>
            </td>
            <td>
                        <span>جنسیت:<span><span><?php if($userInfo['jender']==1)
                                    {
                                        echo 'مرد';
                                    }else
                                    {
                                        echo "زن";
                                    }?>
                                    <span>
            </td>
        </tr>
        <tr>
            <td>
                    <span>تاریخ تولد:<span><span><?= $userInfo['born'] ?><span>
            </td>
            <td>
                    <span>دریافت خبرنامه:<span><span><?php if ($userInfo['khabarname']==1){echo 'فعال';}else{echo "غیر فعال";} ?><span>
            </td>
            <td>
                    <span><a href="<?= baseURL ?>panel/profile" style="background-color: #0f74a8 ; border-radius: 3px"> << ویرایش اطلاعات >> </a><span>
            <span> &nbsp;</span>
                    <span><a href="<?= baseURL ?>panel/changePassword" style="background-color: dimgrey ; border-radius: 3px"> << ویرایش کلمه عبور >> </a><span>

            </td>
        </tr>
    </table>
</div>