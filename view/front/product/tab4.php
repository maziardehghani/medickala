<?php
$id = $data['id'];
?>

<div class="ps-form--review">
    <div class="ps-form__title">نظر بنویسید</div>
    <div class="ps-form__desc">آدرس ایمیل شما منتشر نخواهد شد. فیلدهای مورد نیاز علامت گذاری شده اند *</div>
    <form action="<?= baseURL ?>/product/add_comment/<?= $id ?>" method="post">
        <div class="row">
            <div class="col-12 col-lg-4">
                <label class="ps-form__label">امتیاز شما *</label>
                <select class="ps-rating--form" data-value="0">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-6 col-lg-4">
                <label class="ps-form__label">نام *</label>
                <input name="name" class="form-control ps-form__input">
            </div>
            <div class="col-6 col-lg-4">
                <label class="ps-form__label">ایمیل *</label>
                <input name="email" class="form-control ps-form__input">
            </div>
            <div class="col-12">
                <div class="ps-form__block">
                    <label class="ps-form__label">نظر شما *</label>
                    <textarea name="matn" class="form-control ps-form__textarea"></textarea>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn ps-btn ps-btn--warning">افزودن نظر</button>
            </div>
        </div>
    </form>
</div>

