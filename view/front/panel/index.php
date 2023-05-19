<?php
require ('layout.php');
?>
<script src="<?= URL ?>plugins/jquery.min.js"></script>
<script type="javascript"> </script>
<?php
$userInfo = $data['userInfo'];
$userState = $data['userState'];
$userComments = $data['userComment'];
$sizeOfOrders = $userState['orders'];
$under_checking_orders = $userState['under_checking_orders'];
$ready_send_orders = $userState['ready_send_orders'];
$userCommentNumber = $userState['user_comment'];
$user_unreed_message = $userState['user_unreed_message'];
$user_unused_copen = $userState['user_unused_copen'];
?>

<div style="margin-right: 30px" class="user-panel">
    <?php
    require ('actions_top.php');
    ?>
    <div id="user-panel-status">
        <?php
        require ('userInfo.php');
        require ('shopInfo.php');
        ?>
    </div>
    <?php
    require ('actions_bottom.php');
    ?>
    <div id="user-panel-report">
        <?php
        require ('myOrder.php');
        require ('myMassage.php');
        require ('myComment.php');
        require ('mycopen.php');
        ?>
    </div>
</div>


<script>

    $("#order").click(function(){
        $("#user-panel-message").slideUp();
        $("#user-panel-my-comment").slideUp();
        $("#user-panel-copen").slideUp();
        $("#user-panel-my-orders").slideToggle(700);
    });
    $("#message").click(function(){
        $("#user-panel-my-orders").slideUp();
        $("#user-panel-copen").slideUp();
        $("#user-panel-my-comment").slideUp();
        $("#user-panel-message").slideToggle(700);
    });
    $("#comment").click(function(){
        $("#user-panel-my-orders").slideUp();
        $("#user-panel-message").slideUp();
        $("#user-panel-copen").slideUp();
        $("#user-panel-my-comment").slideToggle(700);
    });
    $("#copen").click(function(){
        $("#user-panel-my-orders").slideUp();
        $("#user-panel-message").slideUp();
        $("#user-panel-my-comment").slideUp();
        $("#user-panel-copen").slideToggle(700);
    });

</script>