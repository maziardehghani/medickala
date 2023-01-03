<?php
$sliders = $data[0];
?>

<div class="ps-home ps-home--3">
    <section class="ps-section--banner">
        <div class="ps-section__overlay">
            <div class="ps-section__loading"></div>
        </div>
        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
            <?php
            foreach ($sliders as $slider)
            {
            ?>
            <div class="ps-banner" style="background-image: url(<?= $slider['img'] ?>)">
                <div class="container container-initial">
                    <div class="ps-banner__block">
                        <div class="ps-banner__content">
                            <h2 class="ps-banner__title">ماسک <br>طبی ضد باکتری</h2>
                            <div class="ps-banner__desc">فقط چند ثانیه برای اندازه گیری دمای بدن خود.</div>
                            <div class="ps-banner__btn-group">
                                <div class="ps-banner__btn"><img src="<?= URL ?>img/icon/bacterial.svg" alt="alt">آنتی باکتریال</div>
                                <div class="ps-banner__btn"><img src="<?= URL ?>img/icon/virus.svg" alt="alt">آنتی ویروس</div>
                            </div><a class="bg-warning ps-banner__shop" href="#">همین حالا خرید کنید</a>
                            <div class="ps-banner__persen bg-yellow ps-top">30 درصد</div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <div class="ps-home__content">
        <section class="ps-section--category-horizontal">
            <div class="container">
                <h3 class="ps-section__title">دسته بندی های محبوب</h3>
                <div class="ps-category__content">
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/plastercross.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">بانداژ</a></div>
                    </div>
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/capsule.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">کپسول</a></div>
                    </div>
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/dental.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">دندانی</a></div>
                    </div>
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/thermometer.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">دماسنج</a></div>
                    </div>
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/heart-healt.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">سلامت قلب</a></div>
                    </div>
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/microscope.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">میکروسکوپ</a></div>
                    </div>
                    <div class="ps-category__item"><a class="ps-category__link" href="category-grid.html"><img src="<?= URL ?>img/branch/tube.svg" alt=""></a>
                        <div class="ps-category__name"><a href="category-grid.html">لوله ها</a></div>
                    </div>
                </div>
                <div class="ps-category__all"><a href="category-grid.html">نمایش همه</a></div>
            </div>
        </section>