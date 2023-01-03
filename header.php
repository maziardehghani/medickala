<?php
$option_header = model::get_option();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?= URL ?>img/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="<?= URL ?>img/favicon.png" rel="shortcut icon" type="image/png">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>فروشگاه لوازم پزشکی</title>
    <link rel="stylesheet" href="<?= URL ?>plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= URL ?>fonts/Linearicons/Font/demo-files/demo.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,500,600,700,800,900&display=swap">
    <link rel="stylesheet" href="<?= URL ?>plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?= URL ?>plugins/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="<?= URL ?>css/style.css">
    <link rel="stylesheet" href="<?= URL ?>css/home-3.css">
</head>
<style>
    .error {
        border: 1px solid red;
        text-align: center;
        font-size: 12pt;
        color: red;
        padding: 8px;
    }

    .success {
        border: 1px solid green;
        text-align: center;
        font-size: 12pt;
        color: green;
        padding: 8px;
    }
</style>
<body>
<div class="ps-page">
    <header class="ps-header ps-header--3">
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">به دلیل همه گیری <strong>کووید 19</strong> ، سفارشات ممکن است با کمی تاخیر پردازش شوند</p>
            </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
        </div>
        <div class="ps-header__top">
            <div class="container">
                <div class="ps-header__text"> <strong>ارسال 100٪ ایمن</strong> بدون تماس با پیک</div>
                <div class="ps-top__right">
                    <div class="ps-language-currency"><a class="ps-dropdown-value" href="javascript:void(0);" data-toggle="modal" data-target="#popupLanguage">انگلیسی </a><a class="ps-dropdown-value" href="javascript:void(0);" data-toggle="modal" data-target="#popupCurrency"> دلار</a></div>
                    <div class="ps-top__social">
                        <ul class="ps-social">
                            <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">فیس بوک</span></a></li>
                            <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">اینستاگرام</span></a></li>
                            <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">یوتیوب</span></a></li>
                            <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">پینترست</span></a></li>
                            <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">لینکدین</span></a></li>
                        </ul>
                    </div>
                    <ul class="menu-top">
                        <li class="nav-item"><a class="nav-link" href="<?= baseURL ?>aboutUs">درباره</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= baseURL ?>blog">وبلاگ</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= baseURL ?>contactus">مخاطب</a></li>
                    </ul>
                    <div class="ps-header__text">پشتیبانی: <strong><?= $option_header['tel'] ?></strong></div>
                </div>
            </div>
        </div>
        <div class="ps-header__middle">
            <div class="container">
                <div class="ps-logo"><a href="<?= baseURL ?>index"> <img src="<?= URL ?>img/logo.png" alt=""><img class="sticky-logo" src="<?= URL ?>img/logo.png" alt=""></a></div><a class="ps-menu--sticky" href="#"><i class="fa fa-bars"></i></a>
                <div class="ps-header__right">
                    <ul class="ps-header__icons">
                        <li><a class="ps-header__item" href="<?= baseURL ?>login" id="login-modal"><i class="icon-user"></i></a>

                        </li>
                        <li><a class="ps-header__item" href="<?= baseURL ?>showcart" id="cart-mini"><i class="icon-cart-empty"></i><span class="badge">2</span></a>

                        </li>
                    </ul>
                    <div class="ps-language-currency"><a class="ps-dropdown-value" href="javascript:void(0);" data-toggle="modal" data-target="#popupLanguage">انگلیسی </a><a class="ps-dropdown-value" href="javascript:void(0);" data-toggle="modal" data-target="#popupCurrency"> دلار</a></div>
                    <div class="ps-middle__social">
                        <ul class="ps-social">
                            <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">فیس بوک</span></a></li>
                            <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">اینستاگرام</span></a></li>
                            <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">یوتیوب</span></a></li>
                            <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">پینترست</span></a></li>
                            <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">لینکدین</span></a></li>
                        </ul>
                    </div>
                    <div class="ps-header__menu">
                        <ul class="menu">
                            <li class="has-mega-menu"><a href="#"> <i class="fa fa-bars"></i>محصولات<span class="sub-toggle"><i class="fa fa-chevron-down"></i></span></a>
                                <div class="mega-menu">
                                    <div class="container">
                                        <div class="mega-menu__row">
                                            <div class="mega-menu__column">
                                                <h4>دسته بندی</h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="<?= baseURL ?>proList">دسته بندی محصولات</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>صفحات</h4>
                                                <ul class="sub-menu--mega">
                                                    <li><a href="about-us.html">درباره ما</a></li>
                                                    <li><a href="contact-us.html">با ما تماس بگیرید</a></li>
                                                    <li><a href="my-account.html">حساب من</a></li>
                                                    <li><a href="shopping-cart.html">سبد خرید</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-menu__column">
                                                <h4>وبلاگ</h4>
                                                <ul class="sub-menu--mega">

                                                    <li><a href="blog-masonry.html">وبلاگ </a></li>

                                                </ul>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
        </div>
    </header>
    <header class="ps-header ps-header--3 ps-header--mobile">
        <div class="ps-noti">
            <div class="container">
                <p class="m-0">به دلیل همه گیری <strong>کووید 19</strong> ، سفارشات ممکن است با کمی تاخیر پردازش شوند</p>
            </div><a class="ps-noti__close"><i class="icon-cross"></i></a>
        </div>
        <div class="ps-header__middle">
            <div class="container">
                <div class="ps-logo"><a href="index.html"> <img src="<?= URL ?>img/logo.png" alt=""></a></div>
                <div class="ps-header__right">
                    <ul class="ps-header__icons">
                        <li><a class="ps-header__item" href="#"><i class="icon-user"></i></a></li>
                        <li><a class="ps-header__item" href="#"><i class="fa fa-heart-o"></i><span class="badge">3</span></a></li>
                        <li><a class="ps-header__item" href="shopping-cart.html"><i class="icon-cart-empty"></i><span class="badge">2</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>