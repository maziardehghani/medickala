
<?php

$comment = $data[1];

?>

<div class="ps-product__tabreview">
    <?php
    foreach ($comment as $row) {

        ?>
        <div class="ps-review--product">
            <div class="ps-review__row">
                <div class="ps-review__avatar"><img src="<?= URL ?>img/avatar/image-3.jpg" alt="alt"></div>
                <div class="ps-review__info">
                    <div class="ps-review__name"><?= $row['username'] ?></div>
                    <div class="ps-review__date"><?= $row['tarikh'] ?></div>
                </div>
                <div class="ps-review__rating">
                    <select class="ps-rating" data-read-only="true">
                        <?php

                        $like = $row['likecount'];
                        for ($i=1;$i<=5;$i++) {
                            if($like == $i )
                            {?>
                                <option value="<?= $i ?>" selected="selected"><?= $i ?></option>
                            <?php
                            }
                            else
                            {
                                ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php
                            }
                            ?>

                        <?php }?>


                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4" selected="selected">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="ps-review__desc">
                    <p><?= $row['matn'] ?></p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>