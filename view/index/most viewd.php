<?php
$most_view = $data[4];
?>
<div class="col-12 col-md-8 col-lg-9">
    <section class="ps-section--latest-horizontal">
        <h3 class="ps-section__title">پر بازدید ترین محصولات</h3>
        <div class="ps-section__content">
            <div class="row m-0">

                <?php

                    foreach ($most_view as $row) {


                        ?>
                        <div class="col-6 col-lg-3 p-0">
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="<?= baseURL ?>product/index/<?= $row['id'] ?>">

                                            <figure><img src="<?= URL ?>img/products/<?= $row['id'] ?>/product_size220.jpg" alt="alt">
                                            </figure>
                                        </a>
                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                 title="لیست علاقه مندیها"><a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                 data-placement="left" title="افزودن برای مقایسه"><a href="#"
                                                                                                     data-toggle="modal"
                                                                                                     data-target="#popupCompare"><i
                                                        class="fa fa-align-left"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                 title="مشاهده سریع"><a href="#" data-toggle="modal"
                                                                        data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                 title="افزودن به سبد خرید"><a href="#" data-toggle="modal"
                                                                               data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                        </div>
                                        <div class="ps-product__badge">
                                            <div class="ps-badge ps-badge--sold">فروخته شده</div>
                                        </div>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="<?= baseURL ?>product/index/<?= $row['id'] ?>"><?= $row['title'] ?></a></h5>
                                        <div class="ps-product__meta"><span
                                                class="ps-product__price sale"><?= $row['price'] ?> تومان </span>
                                        </div>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5" selected="selected">5</option>
                                            </select><span class="ps-product__review">(نظرات)</span>
                                        </div>
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>سابقه مطالعه تا 30 روز</li>
                                                <li>حداکثر 5 کاربر به طور همزمان</li>
                                                <li>دارای گواهی سلامت</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__actions ps-product__group-mobile">
                                            <div class="ps-product__quantity">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="icon-minus"></i></button>
                                                    <input class="quantity" min="0" name="quantity" value="1"
                                                           type="number">
                                                    <button class="plus"
                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart"><a class="ps-btn ps-btn--warning" href="#"
                                                                             data-toggle="modal"
                                                                             data-target="#popupAddcart">افزودن به سبد
                                                    خرید</a></div>
                                            <div class="ps-product__item cart" data-toggle="tooltip"
                                                 data-placement="left" title="افزودن به سبد خرید"><a href="#"><i
                                                        class="fa fa-shopping-basket"></i></a></div>
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                 title="لیست علاقه مندیها"><a href="wishlist.html"><i
                                                        class="fa fa-heart-o"></i></a></div>
                                            <div class="ps-product__item rotate" data-toggle="tooltip"
                                                 data-placement="left" title="افزودن برای مقایسه"><a
                                                    href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
</div>
</div>
</div>