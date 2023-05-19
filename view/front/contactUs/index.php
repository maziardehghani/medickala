<?php
$options = model::get_option();
$mobile = $options['tel'];
$email = $options['email'];
?>
    <div class="ps-contact">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">با ما تماس بگیرید</li>
            </ul>
            <div class="ps-contact__content">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="ps-contact__info">
                            <h2 class="ps-contact__title">چگونه ما میتوانیم به شما کمک کنیم؟</h2>
                            <p class="ps-contact__text">7 روز هفته در خدمت شما هستیم!</p>
                            <h3 class="ps-contact__fax"><?= $mobile ?></h3>
                            <div class="ps-contact__work">شنبه تا پنجشنبه: 9 الی 18</div>
                            <div class="ps-contact__email"><a href="#"><span class="__cf_email__"><?= $email ?></span></a></div>
                            <ul class="ps-social">
                                <li><a class="ps-social__link facebook" href="#"><i class="fa fa-facebook"> </i><span class="ps-tooltip">فیس بوک</span></a></li>
                                <li><a class="ps-social__link instagram" href="#"><i class="fa fa-instagram"></i><span class="ps-tooltip">اینستاگرام</span></a></li>
                                <li><a class="ps-social__link youtube" href="#"><i class="fa fa-youtube-play"></i><span class="ps-tooltip">یوتیوب</span></a></li>
                                <li><a class="ps-social__link pinterest" href="#"><i class="fa fa-pinterest-p"></i><span class="ps-tooltip">پینترست</span></a></li>
                                <li><a class="ps-social__link linkedin" href="#"><i class="fa fa-linkedin"></i><span class="ps-tooltip">لینکدین</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="ps-contact__map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.822845645748!2d-97.1301607845029!3d32.770434891627616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e7dcf27b929d9%3A0xc63407d6f47753b9!2s1487%20Rocky%20Canyon%20Rd%2C%20Arlington%2C%20TX%2076012%2C%20USA!5e0!3m2!1sen!2s!4v1616124426616!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                    </div>
                </div>
            </div>
            <form action="#" id="contact-form" method="post">
                <div class="ps-form--contact">
                    <h2 class="ps-form__title">در صورت داشتن هرگونه سوال فرم را پر کنید</h2>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" id="name" name="name" type="text" placeholder="نام و نام خانوادگی">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" name="mail" id="mail" type="email" placeholder="ایمیل شما">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ps-form__group">
                                <textarea class="form-control ps-form__textarea" name="comment" id="comment" rows="5" placeholder="پیام"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__submit">
                        <button class="ps-btn ps-btn--warning" type="submit" id="submit-message">پیام فرستادن</button>
                        <div id="msg" class="message"></div>
                    </div>
                </div>
            </form>
            <section class="ps-section--instagram">
                <h3 class="ps-section__title"><strong>Mediciti@</strong> را در اینستاگرام دنبال کنید</h3>
                <div class="ps-section__content">
                    <div class="row m-0">
                        <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7FC7pwae/"> <img src="<?= URL ?>img/instagram/instagram1.jpg" alt=""><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>
                        <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7D5zJqwo/"> <img src="<?= URL ?>img/instagram/instagram2.jpg" alt=""><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>
                        <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7BnapGmv/"> <img src="<?= URL ?>img/instagram/instagram3.jpg" alt=""><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>
                        <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href="https://www.instagram.com/p/CDf7Af8JWDj/"> <img src="<?= URL ?>img/instagram/instagram4.jpg" alt=""><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>
                        <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href="https://www.instagram.com/p/CDf6_QEpWYv/"> <img src="<?= URL ?>img/instagram/instagram5.jpg" alt=""><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>
                        <div class="col-6 col-md-4 col-lg-2"> <a class="ps-image--transition" href="https://www.instagram.com/p/CDf69FupFee/"> <img src="<?= URL ?>img/instagram/instagram6.jpg" alt=""><span class="ps-image__overlay"><i class="fa fa-instagram"></i></span></a></div>
                    </div>
                </div>
            </section>
            <div class="ps-footer--top">
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
