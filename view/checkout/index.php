<?php
$basket = $data['basket_product'];
$totalPrice = $data['price_total'];

?>
    <div class="ps-checkout">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page"> پرداخت</li>
            </ul>
            <h3 class="ps-checkout__title"> پرداخت</h3>
            <div class="ps-checkout__content">
                <div class="ps-checkout__wapper">
                    <p class="ps-checkout__text">مشتری محصولات؟ <a href="my-account.html">برای ورود اینجا کلیک کنید</a></p>
                    <p class="ps-checkout__text">کوپن دارید؟ <a href="shopping-cart.html">برای وارد کردن کد خود اینجا را کلیک کنید</a></p>
                </div>
                <form action="<?= baseURL ?>checkout/submitOrder" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="ps-checkout__form">
                                <h3 class="ps-checkout__heading">جزئیات صورتحساب</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">آدرس ایمیل *</label>
                                            <input name="email" class="ps-input" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">نام  *</label>
                                            <input name="name" class="ps-input" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">نام خانوادگی *</label>
                                            <input name="family" class="ps-input" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">آدرس  *</label>
                                            <input name="address" class="ps-input mb-3" type="text" placeholder="آدرس">
                                         </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">شهر / شهر *</label>
                                            <input name="city" class="ps-input" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">کد پستی *</label>
                                            <input name="codePost" class="ps-input" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">تلفن *</label>
                                            <input name="phone" class="ps-input" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label class="ps-checkout__label">یادداشت های سفارش (اختیاری)</label>
                                            <textarea name="noteOrder" class="ps-textarea" rows="7" placeholder="یادداشت هایی در مورد سفارش شما ، به عنوان مثال یادداشت های ویژه برای تحویل."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="ps-checkout__order">
                                <h3 class="ps-checkout__heading">سفارش شما</h3>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">تولید - محصول</div>
                                    <div class="ps-title">فرعی</div>
                                </div>
                                <?php
                                foreach ($basket as $row)
                                {

                                ?>
                                <div class="ps-checkout__row ps-product">
                                    <div class="ps-product__name"><?= $row['title'] ?><span> X <?= $row['tedad'] ?></span></div>
                                    <div class="ps-product__price"><?= $row['Endprice'] ?> تومان</div>
                                </div>

                                <?php

                                }
                                ?>

                                <div class="ps-checkout__row">
                                    <div class="ps-title">فرعی</div>
                                    <div id="total_price" class="ps-product__price"><?= $totalPrice ?> تومان</div>
                                </div>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">حمل و نقل</div>
                                    <div class="ps-checkout__checkbox">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="price-ship">
                                            <label class="form-check-label" for="price-ship">وانت محلی: <span id="transferPrice"><?= transfer ?> تومان</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-checkout__row">
                                    <div class="ps-title">جمع</div>
                                    <div id="lastPrice" class="ps-product__price">  تومان<?= $totalPrice+transfer ?></div>
                                </div>
                                <div class="ps-checkout__payment">
                                    <div class="payment-method">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="payment" checked="">
                                            <label class="form-check-label" for="payment">پرداخت ها را بررسی کنید</label>
                                        </div>
                                        <p class="ps-note">لطفاً یک چک به نام فروشگاه ، خیابان فروشگاه ، شهرک فروشگاه ، ایالت / شهرستان فروشگاه ، کدپستی فروشگاه ارسال کنید.</p>
                                    </div>
                                    <div class="paypal-method">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" id="paypal">
                                            <label class="form-check-label" for="paypal">پی پال  <img src="img/AM_mc_vs_ms_ae_UK.png" alt=""><a href="https://www.paypal.com/uk/webapps/mpp/paypal-popup"> چیست؟</a></label>
                                        </div>
                                    </div>
                                    <div class="check-faq">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agree-faq" checked="">
                                            <label class="form-check-label" for="agree-faq"> من شرایط و ضوابط وب سایت را خوانده و موافقم *</label>
                                        </div>
                                    </div>
                                    <div class="ps-shopping__footer">
                                        <div class="ps-shopping__coupon">
                                            <input name="copen" id="copen" class="form-control ps-input" type="text">
                                            <button id="codebutt" class="ps-btn ps-btn--primary" type="button" onclick="checkcode()">کوپن اعمال کنید</button>
                                        </div>
                                    </div>
                                    <button type="submit" class="ps-btn ps-btn--warning">سفارش دهید</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script>
function docopen(code) {
    var url = '<?= baseURL ?>checkout/docopen/'+code;
    var data={};
    $.post(url , data , function (msg) {
        var price = msg+' تومان ';
        var transfer = $('#transferPrice').text();
        var transferPrice = parseInt(transfer);
        let lastprice = Number(msg);
        lastprice = lastprice+transferPrice;
        $('#total_price').text(price);
        $('#lastPrice').text(lastprice);
})

}
function checkcode() {
    var code = $('#copen').val() ;
    var url = '<?= baseURL ?>checkout/checkcode/'+code;
    var data={};
    $.post(url , data , function (msg) {
        if (msg == 1)
        {
            docopen(code);
            alert('کد تخفیف اعمال شد');
        }
        else
        {
            alert('کد تخفیف اشتباه است')
        }
    })
}

</script>
