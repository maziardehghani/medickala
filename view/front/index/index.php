<!DOCTYPE html>
<html lang="en">

<?php require( __DIR__ . '/../master/head.php') ?>

<body>
<div class="ps-page">
    <?php require ( __DIR__ . '/../master/header.php')?>
    <div class="ps-home ps-home--3">
<!--        --><?php //require ( __DIR__ . '/../master/slider.php')?>

        <div class="ps-home__content">
            <section class="ps-section--category-horizontal">
                <div class="container">
                    <h3 class="ps-section__title">دسته بندی های محبوب</h3>
                    <div class="ps-category__content">
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= asset('img/branch/plastercross.svg') ?>" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">بانداژ</a></div>
                        </div>
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= asset('img/branch/capsule.svg') ?>" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">کپسول</a></div>
                        </div>
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="img/branch/dental.svg" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">دندانی</a></div>
                        </div>
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="img/branch/thermometer.svg" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">دماسنج</a></div>
                        </div>
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="img/branch/heart-healt.svg" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">سلامت قلب</a></div>
                        </div>
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="img/branch/microscope.svg" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">میکروسکوپ</a></div>
                        </div>
                        <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="img/branch/tube.svg" alt=""></a>
                            <div class="ps-category__name"><a href="category-grid.html">لوله ها</a></div>
                        </div>
                    </div>
                    <div class="ps-category__all"><a href="category-grid.html">نمایش همه</a></div>
                </div>
            </section>
            <div class="container">
                <div class="ps-home__row">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3 ps-home__week-deal">
                            <section class="ps-section--weekdeal">
                                <h3 class="ps-section__title">دسته بندی های محبوب</h3>
                                <div class="ps-section__content">
                                    <div class="ps-weekdeal__product">
                                        <div class="ps-countdown">
                                            <div class="ps-countdown__content">
                                                <div class="ps-countdown__block ps-countdown__seconds">
                                                    <div class="ps-countdown__number"><span class="first">5</span><span class="last">0</span></div>
                                                    <div class="ps-countdown__ref">ثانیه </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                    <figure><img src="img/products/002.jpg" alt="alt"><img src="img/products/017.jpg" alt="alt">
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
                                                <div class="ps-product__percent">30 درصد</div>
                                            </div>
                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title"><a href="product1.html">بطری آب گرم </a></h5>
                                                <div class="ps-product__meta"><span class="ps-product__price sale">38000 تومان </span><span class="ps-product__del">52000 تومان</span>
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
                                                <div class="ps-product__footer">تعداد رایانه های موجود <span>10	</span></div>
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
                            </section>
                        </div>
                        <div class="col-12 col-md-8 col-lg-9">
                           <?php require('most_view.php'); ?>
                        </div>
                    </div>
                </div>
                <?php require('last_suggest.php');?>
                <?php require ('best_seller.php');?>

                <div class="ps-delivery" data-background="img/promotion/banner-delivery-2.jpg">
                    <div class="ps-delivery__content">
                        <div class="ps-delivery__text"> <i class="icon-shield-check"></i><span> <strong>ارسال 100٪ ایمن</strong> بدون تماس با پیک</span></div><a class="ps-delivery__more" href="#">بیشتر</a>
                    </div>
                </div>
                <?php require('special_product.php');?>

            </div>
            <section class="ps-home3__banner" data-background="img/promotion/banner-bg-12.jpg">
                <div class="ps-banner">
                    <div class="container">
                        <div class="ps-banner__block">
                            <div class="ps-banner__content">
                                <h2 class="ps-banner__title">واکسن خارجی</h2>
                                <div class="ps-banner__desc">قدرت صوتی قلم مو برای <br>مشکلات دندانی بهترین است</div>
                                <div class="ps-banner__btn-group">
                                    <div class="ps-banner__btn"><img src="img/icon/tooth-brush-icon.png" alt="">حداکثر 5 کاربر به طور همزمان</div>
                                    <div class="ps-banner__btn"><img src="img/icon/dashboard-icon.png" alt="">دارای گواهی سلامت</div>
                                </div><a class="ps-banner__shop bg-warning" href="#">درباره</a>
                            </div>
                            <div class="ps-banner__thumnail">
                                <div class="ps-banner__persen bg-warning">30 درصد</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="ps-footer--top mt-50">
                <div class="container">
                    <div class="row m-0">
                        <div class="col-12 col-sm-4 p-0">
                            <p class="text-center"><a class="ps-footer__link" href="#"><i class="icon-wallet"></i>بازگشت 100٪ پول</a></p>
                        </div>
                        <div class="col-12 col-sm-4 p-0">
                            <p class="text-center"><a class="ps-footer__link" href="#"><i class="icon-bag2"></i>حمل و نقل بدون تماس</a></p>
                        </div>
                        <div class="col-12 col-sm-4 p-0">
                            <p class="text-center"><a class="ps-footer__link" href="#"><i class="icon-truck"></i>ارسال رایگان برای سفارش بالای   20000 تومان</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require ('../master/footer.php')?>

</div>
<div class="ps-search">
    <div class="ps-search__content ps-search--mobile"><a class="ps-search__close" href="#" id="close-search"><i
                    class="icon-cross"></i></a>
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
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> 3 لایه با نوار الاستیک (1
                                عدد)</a></h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه
                            سلامتی هستند</p>
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
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> محافظ یکبار مصرف 3 لایه s</a>
                        </h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه
                            سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price sale">10000 تومان </span><span
                                    class="ps-product__del">24000 تومان</span>
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
                        <h5 class="ps-product__title"><a><span class="hightlight">ماسک</span> صورت یکبار مصرف آبی 3 حلقه
                                <span class="hightlight">ای</span></a></h5>
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه
                            سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price sale">14000 تومان </span><span
                                    class="ps-product__del">39000 تومان</span>
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
                        <p class="ps-product__desc">سابقه مطالعه تا 30 روز حداکثر 5 کاربر به طور همزمان دارای گواهینامه
                            سلامتی هستند</p>
                        <div class="ps-product__meta"><span class="ps-product__price sale">8000 تومان </span><span
                                    class="ps-product__del">12000 تومان</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-navigation--footer">
    <div class="ps-nav__item"><a href="#" id="open-menu"><i class="icon-menu"></i></a><a href="#" id="close-menu"><i
                    class="icon-cross"></i></a></div>
    <div class="ps-nav__item"><a href="../../../index.php"><i class="icon-home2"></i></a></div>
    <div class="ps-nav__item"><a href="../../../index.php"><i class="icon-user"></i></a></div>
    <div class="ps-nav__item"><a href="../../../index.php"><i class="fa fa-heart-o"></i><span class="badge">3</span></a>
    </div>
    <div class="ps-nav__item"><a href="../../../index.php"><i class="icon-cart-empty"></i><span
                    class="badge">2</span></a></div>
</div>
<div class="ps-menu--slidebar">
    <div class="ps-menu__content">
        <ul class="menu--mobile">
            <li class="menu-item-has-children"><a href="#">محصولات</a><span class="sub-toggle"><i
                            class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="#">مراقبت از زخم</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="../../../index.php">بانداژ</a></li>
                            <li><a href="../../../index.php">پایه های گچی</a></li>
                            <li><a href="../../../index.php">وصله ها و نوارها</a></li>
                        </ul>
                    </li>
                    <li><a href="#">هیجین</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="../../../index.php">محصولات یکبار مصرف</a></li>
                            <li><a href="../../../index.php">ماسک های صورت</a></li>
                            <li><a href="../../../index.php">دستکش</a></li>
                        </ul>
                    </li>
                    <li><a href="#">آزمایشگاه</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="../../../index.php">دستگاه ها</a></li>
                            <li><a href="../../../index.php">آزمایشات تشخیصی</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">لوازم پزشکی خانگی</a><span class="sub-toggle"><i
                            class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="../../../index.php">محصولات</a></li>
                    <li><a href="../../../index.php">ابزارهای جانبی</a></li>
                    <li><a href="../../../index.php">بانداژ</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">صفحه اصلی</a><span class="sub-toggle"><i
                            class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li>
                        <a href="../../../index.php">خانه 1</a>
                    </li>
                    <li>
                        <a href="../../../index.php">صفحه اصلی 2</a>
                    </li>
                    <li>
                        <a href="../../../index.php">خانه 3</a>
                    </li>
                    <li>
                        <a href="../../../index.php">صفحه اصلی 4</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="../../../index.php">خرید کنید</a></li>
            <li class="menu-item-has-children"><a href="#">صفحات</a><span class="sub-toggle"><i
                            class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="#">دسته بندی</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="../../../index.php">توری</a></li>
                            <li><a href="../../../index.php">شبکه با جزئیات</a></li>

                            <li><a href="../../../index.php">شبکه با سربرگ تیره است</a></li>
                            <li><a href="../../../index.php">شبکه جدا</a></li>
                            <li><a href="../../../index.php">لیست</a></li>
                        </ul>
                    </li>
                    <li><a href="#">تولید - محصول</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="../../../index.php">چیدمان 1</a></li>
                            <li><a href="../../../index.php">چیدمان 2</a></li>
                            <li><a href="../../../index.php">چیدمان 3</a></li>
                            <li><a href="../../../index.php">چیدمان 4</a></li>
                            <li><a href="../../../index.php">چیدمان 5</a></li>
                            <li><a href="../../../index.php">چیدمان 6</a></li>
                            <li><a href="../../../index.php">چیدمان 7</a></li>
                        </ul>
                    </li>
                    <li><a href="#">صفحات</a><span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                        <ul class="sub-menu">
                            <li><a href="../../../index.php">404</a></li>
                            <li><a href="../../../index.php">درباره ما</a></li>
                            <li><a href="../../../index.php">حساب من</a></li>
                            <li><a href="../../../index.php">به زودی 1</a></li>

                            <li><a href="../../../index.php">پست وبلاگ 1</a></li>
                            <li><a href="../../../index.php">پست وبلاگ 2</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="#">مجموعه</a><span class="sub-toggle"><i
                            class="fa fa-chevron-down"></i></span>
                <ul class="sub-menu">
                    <li><a href="../../../index.php">ماسک های صورت</a></li>
                    <li><a href="../../../index.php">دندانی</a></li>
                    <li><a href="../../../index.php">میکروسکوپ</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="../../../index.php">وبلاگ</a></li>
            <li class="menu-item-has-children"><a href="../../../index.php">مخاطب</a></li>
        </ul>
    </div>
    <div class="ps-menu__footer">
        <div class="ps-menu__item">
            <ul class="ps-language-currency">
                <li class="menu-item-has-children"><a href="#">انگلیسی</a><span class="sub-toggle"><i
                                class="fa fa-chevron-down"></i></span>
                    <ul class="sub-menu">
                        <li><a href="#">فرانسوی</a></li>
                        <li><a href="#">آلمانی</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">دلار آمریکا</a><span class="sub-toggle"><i
                                class="fa fa-chevron-down"></i></span>
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

<?php require ('../master/modals.php')?>

<?php require ('../master/script.php')?>

</body>
</html>