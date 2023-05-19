<?php
$specials = $data['specials'];
?>
<section class="ps-section--also" data-background="<?= URL ?>img/related-bg.jpg">
    <div class="container">
        <h3 class="ps-section__title">محصولات ویژه</h3>
        <div class="ps-section__carousel">
            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="false" data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
               <?php
               foreach ($specials as $special) {
                   ?>
                   <div class="ps-product ps-product--standard">
                       <div class="ps-product__thumbnail">
                           <a class="ps-product__image" href="product1.html">
                               <figure><img src="<?= URL ?>img/products/<?= $special['id'] ?>/product_size220.jpg" alt="alt"></figure>
                           </a>
                           <div class="ps-product__actions">
                               <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                    title="لیست علاقه مندیها"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                               <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left"
                                    title="افزودن برای مقایسه"><a href="#" data-toggle="modal"
                                                                  data-target="#popupCompare"><i
                                           class="fa fa-align-left"></i></a></div>
                               <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                    title="مشاهده سریع"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i
                                           class="fa fa-search"></i></a></div>
                               <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                    title="افزودن به سبد خرید"><a href="#" data-toggle="modal"
                                                                  data-target="#popupAddcart"><i
                                           class="fa fa-shopping-basket"></i></a></div>
                           </div>
                           <div class="ps-product__badge">
                               <div class="ps-badge ps-badge--sale">فروش</div>
                           </div>
                       </div>
                       <div class="ps-product__content">
                           <h5 class="ps-product__title"><a href="product1.html"><?= $special['title'] ?> </a></h5>
                           <div class="ps-product__meta"><span class="ps-product__price"><?= $special['total_price'] ?> تومان</span><span class="ps-product__del"><?= $special['price'] ?>تومان</span>
                           </div>
                           <div class="ps-product__rating">
                               <select class="ps-rating" data-read-only="true">
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4" selected="selected">4</option>
                                   <option value="5">5</option>
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
                                       <input class="quantity" min="0" name="quantity" value="1" type="number">
                                       <button class="plus"
                                               onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i
                                               class="icon-plus"></i></button>
                                   </div>
                               </div>
                               <div class="ps-product__cart"><a class="ps-btn ps-btn--warning" href="#"
                                                                data-toggle="modal" data-target="#popupAddcart">افزودن
                                       به سبد خرید</a></div>
                               <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left"
                                    title="افزودن به سبد خرید"><a href="#"><i class="fa fa-shopping-basket"></i></a>
                               </div>
                               <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                    title="لیست علاقه مندیها"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                               </div>
                               <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left"
                                    title="افزودن برای مقایسه"><a href="compare.html"><i
                                           class="fa fa-align-left"></i></a></div>
                           </div>
                       </div>
                   </div>
                   <?php
               }
                ?>
            </div>
        </div>
    </div>
</section>

