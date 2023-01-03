<div  id="user-panel-shopInfo">
    <div style="width: 100% ; height: 35px ; background-color: #0f74a8 ; margin-top: 30px ; margin-bottom: 30px"> <p style="padding: 4px; font-size: 15pt">اطلاعات خرید </p> </div>
    <table class="list">
        <tr>
            <td>
                    <span>تعداد کل سفارشات:<span><span><?= $sizeOfOrders ?><span>
            </td>
            <td>
                    <span>تعداد بن تخفیف ها:<span><span><?= $user_unused_copen ?><span>
            </td>
            <td>
                    <span>تعداد بن تخفیف های باطل شده:<span><span><span>
            </td>
        </tr>
        <tr>
            <td>
                        <span> تعداد سفارشات اماده ارسال:<span><span><?= $ready_send_orders ?><span>
            </td>
            <td>
                    <span>تعداد نقد های ارسال شده:<span><span><span>
            </td>
            <td>
                    <span>پیام های خوانده نشده:<span><span><?= $user_unreed_message ?><span>
            </td>
        </tr>
        <tr>
            <td>
                    <span>تعداد سفارشات درحال پردازش:<span><span><?= $under_checking_orders ?><span>
            </td>
            <td>
                   <span> تعداد نظرات ارسال شده:<span><span><?= $userCommentNumber ?><span>
            </td>
        </tr>
    </table>
</div>