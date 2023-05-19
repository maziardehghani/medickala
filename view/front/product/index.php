
<?php
$product = $data['Info'];
$colors = $data['colors'];
$gallery = $data['gallery'];

?>
    <div class="ps-page--product">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">خرید کنید</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">تجهیزات</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">تحصیلات</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">میکروسکوپ دوره دو چشمی </li>
            </ul>
            <div class="ps-page__content">
                <div class="ps-product--detail">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <div class="ps-product--gallery">
                                        <div class="ps-product__thumbnail">


                                            <?php
                                            foreach ($gallery as $row)
                                            {
                                                ?>

                                                <div class="slide"><img src="<?= URL ?>img/products/<?= $row['idproduct'] ?>/gallery/large/<?= $row['img'] ?>" alt="alt"></div>

                                                <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="ps-gallery--image">
                                            <?php
                                            foreach ($gallery as $row)
                                            {
                                                ?>
                                                <div class="slide">
                                                    <div class="ps-gallery__item"><img src="<?= URL ?>img/products/<?=$row['idproduct']?>/gallery/small/<?= $row['img'] ?>" alt="alt"></div>
                                                </div>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-5">
                                    <div class="ps-product__info">
                                        <div class="ps-product__branch"><a href="#">ضربان قلب</a></div>
                                        <div class="ps-product__title"><a href="#"><?= $product['title'] ?></a></div>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4" selected="selected">4</option>
                                                <option value="5">5</option>
                                            </select><span class="ps-product__review">(5 نظر)</span>
                                        </div>
                                        <div class="ps-product__desc">8888888888888888888888888                    `
                                            <ul class="ps-product__list">
                                                <li>سابقه مطالعه تا 30 روز</li>
                                                <li>حداکثر 5 کاربر به طور همزمان</li>
                                                <li>دارای گواهی سلامت</li>
                                            </ul>
                                        </div>88
                                        <ul class="ps-product__bundle">
                                            <li><i class="icon-wallet"></i>بازگشت 100٪ پول</li>
                                            <li><i class="icon-bag2"></i>حمل و نقل بدون تماس</li>
                                            <li><i class="icon-truck"></i>ارسال رایگان برای سفارش بالای   20000 تومان</li>
                                        </ul>
                                        <div class="ps-product__type">
                                            <ul class="ps-product__list">
                                                <li> <span class="ps-list__title">برچسب ها: </span><a class="ps-list__text" href="#">دماسنج </a><a class="ps-list__text" href="#">سلامت</a><a class="ps-list__text" href="#"></a>
                                                </li>
                                                <li> <span class="ps-list__title"></span><a class="ps-list__text" href="#">رمز عبور </a><span class="ps-list__title">: </span><a class="ps-list__text" href="#">BM100</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__social">
                                            <ul class="ps-social ps-social--color">
                                                <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">فیس بوک</span></a></li>
                                                <li><a class="ps-social__link twitter" href="#"><i class="fa fa-twitter"></i><span class="ps-tooltip">توییتر</span></a></li>
                                                <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">پینترست</span></a></li>
                                                <li class="ps-social__linkedin"><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">لینکدین</span></a></li>
                                                <li class="ps-social__reddit"><a class="ps-social__link reddit-alien" href="#"><i class="fa fa-reddit-alien"></i><span class="ps-tooltip">Reddit Alien</span></a></li>
                                                <li class="ps-social__email"><a class="ps-social__link envelope" href="#"><i class="fa fa-envelope-o"></i><span class="ps-tooltip">ایمیل</span></a></li>
                                                <li class="ps-social__whatsapp"><a class="ps-social__link whatsapp" href="#"><i class="fa fa-whatsapp"></i><span class="ps-tooltip">واتس اپ</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="ps-product__feature">
                                <div class="ps-product__badge"><span class="ps-badge ps-badge--instock">   تعداد موجود در انبار <?= $product['tedad_mojood'] ?></span>
                                </div>
                                <div class="ps-product__meta"><span class="ps-product__price"><?= number_format($product['EndPrice']) ?> تومان</span><span class="ps-product__del"><?= $product['price'] ?>تومان</span>
                                </div>
                                <div class="ps-product__group">
                                    <h6>رنگ</h6>
                                    <div class="ps-product__color ps-select--feature">
                                    <?php foreach ($colors as $color) { ?>
                                    <a class="color" data-value="<?= $color['id'] ?>" title=<?= $color['title'] ?> style="background-color:<?= $color['Hex'] ?>"></a>
                                    <?php } ?>
                                </div>
                                </div>
                                <div class="ps-product__quantity">
                                </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" onclick="addtobasket('<?= $product['id'] ?>')">افزودن به سبد خرید</a>
                                <div class="ps-product__variations"><a class="ps-product__link" href="wishlist.html">افزودن به لیست </a><a class="ps-product__link" href="compare.html">خواسته ها افزودن به مقایسه</a></div>
                            </div>
                        </div>
                    </div>

                    <?php

    require ('specification.php');
    require ('Specials.php');


    ?>
                </div>
            </div>

            <script>
                function addtobasket(productID) {
                    var color = 1;
                    var url = '<?= baseURL ?>product/addtobasket/'+productID+'/'+color+'';
                    var data={};
                    $.post(url , data , function (msg) {

                    });
                }
            </script>