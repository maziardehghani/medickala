
<?php
$basket_product = $data['basket_product'];
$price_total = $data['price_total'];

?>

<div class="ps-shopping">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">صفحه اصلی</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">سبد خرید</li>
            </ul>
            <h3 class="ps-shopping__title">سبد خرید <sup>(3)</sup></h3>
            <div class="ps-shopping__content">
                <div class="row">
                    <div class="col-12 col-md-7 col-lg-9">
                        <ul class="ps-shopping__list">
                            <li>
                                <div class="ps-product ps-product--wishlist">
                                    <div class="ps-product__remove"><a href="#"><i class="icon-cross"></i></a></div>
                                    <div class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                            <figure><img src="<?= URL ?>img/products/055.jpg" alt="alt">
                                            </figure>
                                        </a></div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title"><a href="product1.html">سامرسونگ سونیک</a></h5>
                                        <div class="ps-product__row">
                                            <div class="ps-product__label">قیمت:</div>
                                            <div class="ps-product__value"><span class="ps-product__price">39000 تومان</span>
                                            </div>
                                        </div>
                                        <div class="ps-product__row ps-product__stock">
                                            <div class="ps-product__label">موجودی:</div>
                                            <div class="ps-product__value"><span class="ps-product__in-stock">در انبار</span>
                                            </div>
                                        </div>
                                        <div class="ps-product__cart">
                                            <button class="ps-btn">افزودن به سبد خرید</button>
                                        </div>
                                        <div class="ps-product__row ps-product__quantity">
                                            <div class="ps-product__label">تعداد:</div>
                                            <div class="ps-product__value">1</div>
                                        </div>
                                        <div class="ps-product__row ps-product__subtotal">
                                            <div class="ps-product__label">زیرمجموعه:</div>
                                            <div class="ps-product__value">39000 تومان</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="ps-shopping__table">
                            <table class="table ps-table ps-table--product">
                                <thead>
                                <tr>
                                    <th class="ps-product__remove"></th>
                                    <th class="ps-product__thumbnail"></th>
                                    <th class="ps-product__name">نام محصول</th>
                                    <th class="ps-product__meta">قیمت واحد</th>
                                    <th class="ps-product__meta">رنگ</th>
                                    <th class="ps-product__quantity">تعداد</th>
                                    <th class="ps-product__subtotal">قیمت کل</th>
                                </tr>
                                </thead>
                                <tbody id="tbody1">
                                <?php
                                foreach ($basket_product as $row) {

                                    ?>
                                    <tr id="tr1">
                                        <td class="ps-product__remove"><a style="cursor: pointer" onclick="removebasket('<?= $row['basketrow'] ?>')"><i class="icon-cross"></i></a></td>
                                        <td class="ps-product__thumbnail"><a class="ps-product__image" href="product1.html">
                                                <figure><img src="<?= URL ?>img/products/<?= $row['id'] ?>/product_size220.jpg" alt=""></figure></a></td>
                                        <td class="ps-product__name"><a href="product1.html"><?= $row['title'] ?></a></td>
                                        <td class="ps-product__meta"><span class="ps-product__price"><?= number_format($row['Endprice']) ?> تومان</span>
                                        </td>
                                        <td id="color" class="ps-product__quantity"><span><?php foreach ($row['colorName'] as $row1){echo $row1['title'];} ?></span>
                                        </td>
                                        <td id="tedad" class="ps-product__quantity"><span><?= $row['tedad'] ?></span>
                                        </td>
                                        <td class="ps-product__subtotal"> <?= $row['tedad']*$row['Endprice'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-12 col-md-5 col-lg-3">
                        <div class="ps-shopping__label">مجموع سبد خرید</div>
                        <div class="ps-shopping__box">
                            <div class="ps-shopping__row">
                                <div class="ps-shopping__label">فرعی</div>
                                <div class="ps-shopping__price"><span class="price_total"><?= $price_total ?></span> تومان</div>
                            </div>
                            <div class="ps-shopping__label">حمل و نقل</div>
                            <div class="ps-shopping__checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cart-free-ship" checked="">
                                    <label class="form-check-label" for="cart-free-ship">ارسال رایگان</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cart-ship">
                                    <label class="form-check-label" for="cart-ship">وانت محلی: 30000 تومان</label>
                                </div>
                            </div>
                            <div class="ps-shopping__text">گزینه های حمل و نقل در هنگام پرداخت به روز می شود.</div><a class="ps-shopping__toggle" href="#">حمل و نقل را محاسبه کنید</a>
                            <div class="ps-shopping__form">
                                <div class="ps-shopping__group">
                                    <select class="js-example-basic-single" name="state">
                                        <option selected="">انتخاب کشور / منطقه…</option>
                                        <option>افغانستان</option>
                                        <option>جزایر الند</option>
                                        <option>آلبانی</option>
                                        <option>آندورا</option>
                                        <option>ساموآ آمریکایی</option>
                                        <option>آندورا</option>
                                    </select>
                                </div>
                                <div class="ps-shopping__group">
                                    <input class="form-control ps-input" type="text" placeholder="شهرستان">
                                </div>
                                <div class="ps-shopping__group">
                                    <input class="form-control ps-input" type="text" placeholder="شهر / شهر">
                                </div>
                                <div class="ps-shopping__group">
                                    <input class="form-control ps-input" type="text" placeholder="کد پستی">
                                </div>
                            </div>
                            <div  class="ps-shopping__row">
                                <div class="ps-shopping__label">جمع</div>
                                <div id="total_price" class="ps-shopping__price"><span class="price_total" id="total_price"><?= $price_total ?></span> <span>تومان</span></div>
                            </div>
                            <div class="ps-shopping__checkout"><a class="ps-btn ps-btn--warning" href="<?= baseURL ?>showcart1">اقدام به پرداخت </a><a class="ps-shopping__link" href="category-list.html">همچنان به خرید</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function removebasket(productID) {

        var url = '<?= baseURL ?>showcart/deletebasket/'+productID;
        var data ={};
        $.post(url , data ,function (msg) {

            $('table tbody tr').remove();
            var basket = msg[0];
            var price_total = msg[1];

            $.each(basket , function (index , value) {
                var trTag = '<tr><td class="ps-product__remove"><a style="cursor: pointer" onclick="removebasket('+value['basketrow']+')"><i class="icon-cross"></i></a></td><td class="ps-product__thumbnail"><a class="ps-product__image">  <figure><img src="http://localhost/medickala/public/img/products/'+value['id']+'/product_size220.jpg" alt=""></figure></a></td><td class="ps-product__name"><a href="product1.html">'+value['title']+'</a></td><td class="ps-product__meta"><span class="ps-product__price">'+value['price']+' تومان</span></td><td class="ps-product__quantity"><span>'+value['tedad']+'</span></td><td class="ps-product__subtotal"> '+value['tedad']*value['price']+'</td></tr>';
                $('#tbody1').append(trTag);
            });
            $('.price_total').text(price_total);

            console.log(msg)
        } , 'json');
    }
    function updatebasket() {
        var tedad = $("#tedad").text();
        var myInput = $('#basketrow');
        var basketrow = myInput.val();
        var url = 'showcart/updatebasket';
        var data ={'tedad':tedad , 'basketrow' : basketrow};
        alert(tedad);
        $.post(url , data, function (msg) {

        })
    }


</script>
