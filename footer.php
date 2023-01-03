<?php
$option = model::get_option();
?>

<footer class="ps-footer ps-footer--12">
    <div class="container">
        <div class="ps-footer__middle">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-footer--address">
                                <div class="ps-logo"><a href="index.html"> <img src="<?= URL ?>img/logo.png" alt=""><img class="logo-white" src="<?= URL ?>img/logo-white.png" alt=""><img class="logo-white-all" src="<?= URL ?>img/logo-white.png" alt=""></a></div>
                                <div class="ps-footer__title">فروشگاه ما</div>
                                <p> <i class="icon-map-marker icon"></i><?= $option['address'] ?></p>

                                <ul class="ps-social">
                                    <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">فیس بوک</span></a></li>
                                    <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">اینستاگرام</span></a></li>
                                    <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">یوتیوب</span></a></li>
                                    <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">پینترست</span></a></li>
                                    <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">لینکدین</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="ps-footer--contact">
                                <h5 class="ps-footer__title">پشتیبانی</h5>
                                <div class="ps-footer__fax"><?= $option['tel'] ?> <i class="icon-telephone"></i></div>
                                <p class="ps-footer__work">شنبه تا پنجشنبه:   9 الی 18</p>
                                <hr>
                                <p><a class="ps-footer__email" href="#"> <span class="__cf_email__"> <?= $option['email'] ?><i class="icon-envelope"></i></span> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">اطلاعات</h5>
                                <ul class="ps-block__list">
                                    <li><a href="about-us.html">درباره ما</a></li>
                                    <li><a href="#">اطلاعات تحویل</a></li>
                                    <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                                    <li><a href="#">حراجی</a></li>
                                    <li><a href="#">شرایط و ضوابط</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">حساب</h5>
                                <ul class="ps-block__list">
                                    <li><a href="#">حساب من</a></li>
                                    <li><a href="#">دستورات من</a></li>
                                    <li><a href="#">محصولات</a></li>
                                    <li><a href="#">حمل و نقل</a></li>
                                    <li><a href="wishlist.html">لیست علاقه مندیها</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">فروشگاه</h5>
                                <ul class="ps-block__list">
                                    <li><a href="#">وابسته</a></li>
                                    <li><a href="#">بهترین فروشندگان</a></li>
                                    <li><a href="#">تخفیف</a></li>
                                    <li><a href="#">آخرین محصولات</a></li>
                                    <li><a href="#">فروش</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-footer--bottom">
            <div class="row">
                <div class="col-12 col-md-6">
                    <p>حق چاپ © 1400 فروشگاه حقوق محفوظ است</p>
                </div>
                <div class="col-12 col-md-6 text-right"><img src="<?= URL ?>img/payment.png" alt=""><img class="payment-light" src="<?= URL ?>img/payment-light.png" alt=""></div>
            </div>
        </div>
    </div>
</footer>
</div>
<div class="ps-search">
    <div class="ps-search__content ps-search--mobile"><a class="ps-search__close" href="#" id="close-search"><i class="icon-cross"></i></a>
        <h3>جستجو کردن</h3>
        <form action="#" method="post">
            <div class="ps-search-table">
                <div class="input-group">
                    <input class="form-control ps-input" type="text" placeholder="محصولات را جستجو کنید">
                    <div class="input-group-append"><a href="#"><i class="fa fa-search"></i></a></div>
                </div>
            </div>
        </form>
        <div class="ps-search__result">
            <div class="ps-search__item">
                <div class="ps-product ps-product--horizontal">
                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                            <figure><img src="<?= URL ?>img/products/052.jpg" alt="alt"></figure>
                        </a></div>
                    <div class="ps-product__content">
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> 3 لایه با نوار الاستیک (1 عدد)</a></h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price">39000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-search__item">
                <div class="ps-product ps-product--horizontal">
                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                            <figure><img src="<?= URL ?>img/products/033.jpg" alt="alt"></figure>
                        </a></div>
                    <div class="ps-product__content">
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> محافظ یکبار مصرف 3 لایه s</a></h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price sale">10000 تومان </span><span class="ps-product__del">24000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-search__item">
                <div class="ps-product ps-product--horizontal">
                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                            <figure><img src="<?= URL ?>img/products/051.jpg" alt="alt"></figure>
                        </a></div>
                    <div class="ps-product__content">
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> صورت یکبار مصرف آبی 3 حلقه <span class="hightlight">ای</span></a></h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price sale">14000 تومان </span><span class="ps-product__del">39000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ps-search__item">
                <div class="ps-product ps-product--horizontal">
                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                            <figure><img src="<?= URL ?>img/products/050.jpg" alt="alt"></figure>
                        </a></div>
                    <div class="ps-product__content">
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> صورت یکبار مصرف </a></h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price sale">8000 تومان </span><span class="ps-product__del">12000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-navigation--footer">
    <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#" id="close-menu"><i class="icon-cross"></i></a></div>
    <div class="ps-nav__item"><a href="index.html"><i class="icon-home2"></i></a></div>
    <div class="ps-nav__item"><a href="my-account.html"><i class="icon-user"></i></a></div>
    <div class="ps-nav__item"><a href="wishlist.html"><i class="fa fa-heart-o"></i><span class="badge">3</span></a></div>
    <div class="ps-nav__item"><a href="shopping-cart.html"><i class="icon-cart-empty"></i><span class="badge">2</span></a></div>
</div>
<div class="ps-menu--slidebar">
    <div class="ps-menu__content">
        <ul class="menu--mobile">
            <li class="menu-item-has-children"><a href="#">محصولات</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="#">مراقبت از زخم</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="category-list.html">بانداژ</a></li>
                            <li><a href="category-list.html">پایه های گچی</a></li>
                            <li><a href="category-list.html">وصله ها و نوارها</a></li>
                        </ul>
                    </li>
                    <li><a href="#">هیجین</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="category-list.html">محصولات یکبار مصرف</a></li>
                            <li><a href="category-list.html">ماسک های صورت</a></li>
                            <li><a href="category-list.html">دستکش</a></li>
                        </ul>
                    </li>
                    <li><a href="#">آزمایشگاه</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="category-list.html">دستگاه ها</a></li>
                            <li><a href="category-list.html">آزمایشات تشخیصی</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">لوازم پزشکی خانگی</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="category-list.html">محصولات</a></li>
                    <li><a href="category-list.html">ابزارهای جانبی</a></li>
                    <li><a href="category-list.html">بانداژ</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">صفحه اصلی</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li>
                        <a href="index.html">خانه 1</a>
                    </li>
                    <li>
                        <a href="home2.html">صفحه اصلی 2</a>
                    </li>
                    <li>
                        <a href="home3.html">خانه 3</a>
                    </li>
                    <li>
                        <a href="home4.html">صفحه اصلی 4</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="category-list.html">خرید کنید</a></li>
            <li class="menu-item-has-children"><a href="#">صفحات</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="#">دسته بندی</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="category-grid.html">توری</a></li>
                            <li><a href="category-grid-detail.html">شبکه با جزئیات</a></li>

                            <li><a href="category-grid-dark.html">شبکه با سربرگ تیره است</a></li>
                            <li><a href="category-grid-separate.html">شبکه جدا</a></li>
                            <li><a href="category-list.html">لیست</a></li>
                        </ul>
                    </li>
                    <li><a href="#">تولید - محصول</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="product1.html">چیدمان  1</a></li>
                            <li><a href="product2.html">چیدمان  2</a></li>
                            <li><a href="product3.html">چیدمان  3</a></li>
                            <li><a href="product4.html">چیدمان  4</a></li>
                            <li><a href="product5.html">چیدمان  5</a></li>
                            <li><a href="product6.html">چیدمان  6</a></li>
                            <li><a href="product7.html">چیدمان  7</a></li>
                        </ul>
                    </li>
                    <li><a href="#">صفحات</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="404.html">404</a></li>
                            <li><a href="about-us.html">درباره ما</a></li>
                            <li><a href="my-account.html">حساب من</a></li>
                            <li><a href="coming-soon-v1.html">به زودی 1</a></li>

                            <li><a href="blog-post1.html">پست وبلاگ 1</a></li>
                            <li><a href="blog-post2.html">پست وبلاگ 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">مجموعه</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="category-list.html">ماسک های صورت</a></li>
                    <li><a href="category-list.html">دندانی</a></li>
                    <li><a href="category-list.html">میکروسکوپ</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="blog-sidebar1.html">وبلاگ</a></li>
            <li class="menu-item-has-children"><a href="contact-us.html">مخاطب</a></li>
        </ul>
    </div>
    <div class="ps-menu__footer">
        <div class="ps-menu__item">
            <ul class="ps-language-currency">
                <li class="menu-item-has-children"><a href="#">انگلیسی</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="#">فرانسوی</a></li>
                        <li><a href="#">آلمانی</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">دلار آمریکا</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="#">دلار آمریکا</a></li>
                        <li><a href="#">یورو</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ps-menu__item">
            <div class="ps-menu__contact">پشتیبانی: <strong>09123456789</strong></div>
        </div>
    </div>
</div>
<button class="btn scroll-top"><i class="fa fa-angle-double-up"></i></button>
<div class="ps-preloader" id="preloader">
    <div class="ps-preloader-section ps-preloader-left"></div>
    <div class="ps-preloader-section ps-preloader-right"></div>
</div>
<div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ps-quickview">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider container-fluid ps-quickview__body">
                    <button class="close ps-quickview__close" type="button" data-dismiss="modal" aria-label="نزدیک"><span aria-hidden="true">×</span></button>
                    <div class="ps-product--detail">
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <div class="ps-product--gallery">
                                    <div class="ps-product__thumbnail">
                                        <div class="slide"><img src="<?= URL ?>img/products/001.jpg" alt="alt"></div>
                                        <div class="slide"><img src="<?= URL ?>img/products/047.jpg" alt="alt"></div>
                                        <div class="slide"><img src="<?= URL ?>img/products/047.jpg" alt="alt"></div>
                                        <div class="slide"><img src="<?= URL ?>img/products/008.jpg" alt="alt"></div>
                                        <div class="slide"><img src="<?= URL ?>img/products/034.jpg" alt="alt"></div>
                                    </div>
                                    <div class="ps-gallery--image">
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="<?= URL ?>img/products/001.jpg" alt="alt"></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="<?= URL ?>img/products/047.jpg" alt="alt"></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="<?= URL ?>img/products/047.jpg" alt="alt"></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="<?= URL ?>img/products/008.jpg" alt="alt"></div>
                                        </div>
                                        <div class="slide">
                                            <div class="ps-gallery__item"><img src="<?= URL ?>img/products/034.jpg" alt="alt"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="ps-product__info">
                                    <div class="ps-product__badge"><span class="ps-badge ps-badge--instock"> در انبار</span>
                                    </div>
                                    <div class="ps-product__branch"><a href="#">ضربان قلب</a></div>
                                    <div class="ps-product__title"><a href="#">نمایشگر فشار خون</a></div>
                                    <div class="ps-product__rating">
                                        <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select><span class="ps-product__review">(5 نظر)</span>
                                    </div>
                                    <div class="ps-product__desc">
                                        <ul class="ps-product__list">
                                            <li>سابقه مطالعه تا 30 روز</li>
                                            <li>حداکثر 5 کاربر به طور همزمان</li>
                                            <li>دارای گواهی سلامت</li>
                                        </ul>
                                    </div>
                                    <div class="ps-product__meta"><span class="ps-product__price">77000 تومان</span>
                                    </div>
                                    <div class="ps-product__quantity">
                                        <h6>تعداد</h6>
                                        <div class="d-md-flex align-items-center">
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div><a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcartV2">افزودن به سبد خرید</a>
                                        </div>
                                    </div>
                                    <div class="ps-product__type">
                                        <ul class="ps-product__list">
                                            <li> <span class="ps-list__title">برچسب ها: </span><a class="ps-list__text" href="#">دماسنج </a><a class="ps-list__text" href="#">سلامت</a><a class="ps-list__text" href="#"></a>
                                            </li>
                                            <li> <span class="ps-list__title">ویژگی : </span><a class="ps-list__text" href="#">SF-006</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupCompare" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ps-compare--popup">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider ps-compare__body">
                    <button class="close ps-compare__close" type="button" data-dismiss="modal" aria-label="نزدیک"><span aria-hidden="true">×</span></button>
                    <div class="ps-compare--product">
                        <div class="ps-compare__header">
                            <div class="container">
                                <h2>مقایسه محصولات</h2>
                            </div>
                        </div>
                        <div class="ps-compare__content">
                            <div class="ps-compare__table">
                                <table class="table ps-table">
                                    <tbody>
                                    <tr>
                                        <th></th>
                                        <td>
                                            <div class="ps-product__remove"><a href="#"><i class="fa fa-times"></i></a></div>
                                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                    <figure><img src="<?= URL ?>img/products/001.jpg" alt=""></figure>
                                                </a></div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title"><a href="product1.html">نمایشگر فشار خون</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price">77000 تومان</span>
                                                </div>
                                                <button class="ps-btn ps-btn--warning">افزودن به سبد خرید</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ps-product__remove"><a href="#"><i class="fa fa-times"></i></a></div>
                                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                    <figure><img src="<?= URL ?>img/products/034.jpg" alt=""></figure>
                                                </a></div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title"><a href="product1.html">مانیتور فشار خون بالای بازو</a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__del">65000 تومان </span><span class="ps-product__price sale">35000 تومان </span>
                                                </div>
                                                <button class="ps-btn ps-btn--warning">افزودن به سبد خرید</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>شرح</th>
                                        <td>
                                            <ul class="ps-product__list">
                                                <li class="ps-check-line">5 برنامه نظافت</li>
                                                <li class="ps-check-line">نمایشگر دیجیتال</li>
                                                <li class="ps-check-line">حافظه برای 3 کاربر</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="ps-product__list">
                                                <li class="ps-check-line">5 برنامه نظافت</li>
                                                <li class="ps-check-line">نمایشگر دیجیتال</li>
                                                <li class="ps-check-line">حافظه برای 3 کاربر</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>دسترسی</th>
                                        <td>
                                            <p class="ps-product__text ps-check-line">در انبار</p>
                                        </td>
                                        <td>
                                            <p class="ps-product__text ps-check-line">در انبار</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>وزن</th>
                                        <td>
                                            <p class="ps-product__text">10 کیلوگرم</p>
                                        </td>
                                        <td>
                                            <p class="ps-product__text">10 کیلوگرم</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ابعاد</th>
                                        <td>
                                            <p class="ps-product__text">10 × 10 × 10 سانتی متر</p>
                                        </td>
                                        <td>
                                            <p class="ps-product__text">10 × 10 × 10 سانتی متر</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>رنگ</th>
                                        <td>
                                            <p class="ps-product__text">قرمز ، نیروی دریایی</p>
                                        </td>
                                        <td>
                                            <p class="ps-product__text">سبز</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>اسکو</th>
                                        <td>
                                            <p class="ps-product__text">SF-006</p>
                                        </td>
                                        <td>
                                            <p class="ps-product__text">BE-001</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>قیمت</th>
                                        <td><span class="ps-product__price">77000 تومان</span>
                                        </td>
                                        <td><span class="ps-product__del">65000 تومان </span><span class="ps-product__price sale">35000 تومان </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupLanguage" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ps-popup--select">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider container-fluid">
                    <button class="close ps-popup__close" type="button" data-dismiss="modal" aria-label="نزدیک"><span aria-hidden="true">×</span></button>
                    <div class="ps-popup__body">
                        <h2 class="ps-popup__title">زبان را انتخاب کنید</h2>
                        <ul class="ps-popup__list">
                            <li class="language-item"> <a class="active btn" href="javascript:void(0);" data-value="English">انگلیسی</a></li>
                            <li class="language-item"> <a class="btn" href="javascript:void(0);" data-value="Deutsch">آلمانی</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupCurrency" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ps-popup--select">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider container-fluid">
                    <button class="close ps-popup__close" type="button" data-dismiss="modal" aria-label="نزدیک"><span aria-hidden="true">×</span></button>
                    <div class="ps-popup__body">
                        <h2 class="ps-popup__title">واحد پول را انتخاب کنید</h2>
                        <ul class="ps-popup__list">
                            <li class="currency-item"> <a class="active btn" href="javascript:void(0);" data-value="USD">دلار آمریکا</a></li>
                            <li class="currency-item"> <a class="btn" href="javascript:void(0);" data-value="EUR">یورو</a></li>
                            <li class="currency-item"> <a class="btn" href="javascript:void(0);" data-value="JPY">ین </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupAddcart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered ps-addcart">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider container-fluid ps-addcart__body">
                    <button class="close ps-addcart__close" type="button" data-dismiss="modal" aria-label="نزدیک"><span aria-hidden="true">×</span></button>
                    <p class="ps-addcart__noti"> <i class="fa fa-check"> </i>با موفقیت به سبد خرید اضافه شد</p>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="<?= URL ?>img/products/015.jpg" alt="alt"><img src="<?= URL ?>img/products/040.jpg" alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="مشاهده سریع"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">فروش</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">قاب لنز حرفه ای قابل تنظیم چند منظوره</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price sale">35000 تومان </span><span class="ps-product__del">65000 تومان </span>
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
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">افزودن به سبد خرید</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="ps-addcart__content">
                                <p>دو مورد در سبد خرید شما وجود دارد.</p>
                                <p class="ps-addcart__total">مجموع: <span class="ps-price">40000 تومان</span></p><a class="ps-btn ps-btn--border" href="#" data-dismiss="modal" aria-label="نزدیک">ادامه خرید </a><a class="ps-btn ps-btn--border" href="shopping-cart.html">مشاهده سبد خرید </a><a class="ps-btn ps-btn--warning" href="checkout.html">تا پایان مراحل پرداخت</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="popupAddcartV2" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered ps-addcart">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wrap-modal-slider container-fluid ps-addcart__body">
                    <div class="ps-addcart__overlay">
                        <div class="ps-addcart__loading"></div>
                    </div>
                    <button class="close ps-addcart__close" type="button" data-dismiss="modal" aria-label="نزدیک"><span aria-hidden="true">×</span></button>
                    <p class="ps-addcart__noti"> <i class="fa fa-check"> </i>با موفقیت به سبد خرید اضافه شد</p>
                    <div class="ps-addcart__product">
                        <div class="ps-product ps-product--standard">
                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="#">
                                    <figure><img src="<?= URL ?>img/products/015.jpg" alt=""><img src="<?= URL ?>img/products/040.jpg" alt=""></figure>
                                </a></div>
                            <div class="ps-product__content">
                                <div class="ps-product__title"><a>قاب لنز حرفه ای قابل تنظیم چند منظوره</a></div>
                                <div class="ps-product__quantity"><span>x2</span></div>
                                <div class="ps-product__meta"><span class="ps-product__price">80000 تومان</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-addcart__header">
                        <h3>آیا می خواهید یکی از این موارد را اضافه کنید؟</h3>
                        <p>افرادی که این محصول را خریداری می کنند ، موارد زیر را نیز خریداری می کنند.</p>
                    </div>
                    <div class="ps-addcart__content">
                        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="<?= URL ?>img/products/015.jpg" alt="alt"><img src="<?= URL ?>img/products/040.jpg" alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="مشاهده سریع"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--sale">فروش</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">قاب لنز حرفه ای قابل تنظیم چند منظوره</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price sale">35000 تومان </span><span class="ps-product__del">65000 تومان </span>
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
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">افزودن به سبد خرید</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="<?= URL ?>img/products/028.jpg" alt="alt"><img src="<?= URL ?>img/products/045.jpg" alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="مشاهده سریع"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">دماسنج دیجیتال</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price sale">60000 تومان </span><span class="ps-product__del">9000 تومان</span>
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
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">افزودن به سبد خرید</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product ps-product--standard">
                                <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                        <figure><img src="<?= URL ?>img/products/020.jpg" alt="alt"><img src="<?= URL ?>img/products/008.jpg" alt="alt">
                                        </figure>
                                    </a>
                                    <div class="ps-product__actions">
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="#" data-toggle="modal" data-target="#popupCompare"><i class="fa fa-align-left"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="مشاهده سریع"><a href="#" data-toggle="modal" data-target="#popupQuickview"><i class="fa fa-search"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#" data-toggle="modal" data-target="#popupAddcart"><i class="fa fa-shopping-basket"></i></a></div>
                                    </div>
                                    <div class="ps-product__badge">
                                        <div class="ps-badge ps-badge--hot">داغ</div>
                                    </div>
                                </div>
                                <div class="ps-product__content">
                                    <h5 class="ps-product__title"><a href="product1.html">مانیتور فشار خون برنز</a></h5>
                                    <div class="ps-product__meta"><span class="ps-product__price">67000 تومان</span>
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
                                                <button class="minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart"> <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal" data-target="#popupAddcart">افزودن به سبد خرید</a></div>
                                        <div class="ps-product__item cart" data-toggle="tooltip" data-placement="left" title="افزودن به سبد خرید"><a href="#"><i class="fa fa-shopping-basket"></i></a></div>
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left" title="لیست علاقه مندیها"><a href="wishlist.html"><i class="fa fa-heart-o"></i></a></div>
                                        <div class="ps-product__item rotate" data-toggle="tooltip" data-placement="left" title="افزودن برای مقایسه"><a href="compare.html"><i class="fa fa-align-left"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-addcart__footer"><a class="ps-btn ps-btn--border" href="#" data-dismiss="modal" aria-label="نزدیک">نه ممنون :( </a><a class="ps-btn ps-btn--warning" href="shopping-cart.html">به سبد خرید ادامه دهید</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= URL ?>plugins/jquery.min.js"></script>
<script src="<?= URL ?>plugins/popper.min.js"></script>
<script src="<?= URL ?>plugins/bootstrap4/js/bootstrap.min.js"></script>
<script src="<?= URL ?>plugins/select2/dist/js/select2.full.min.js"></script>
<script src="<?= URL ?>plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= URL ?>plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="<?= URL ?>plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
<script src="<?= URL ?>plugins/slick/slick/slick.min.js"></script>
<script src="<?= URL ?>plugins/noUiSlider/nouislider.min.js"></script>
<!-- custom code-->
<script src="<?= URL ?>js/main.js"></script>

</body>
</html>