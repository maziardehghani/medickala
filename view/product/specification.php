
<div class="ps-product__content">
    <ul class="nav nav-tabs ps-tab-list" id="productContentTabs" role="tablist">
        <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab" data-toggle="tab" href="#description-content" role="tab" aria-controls="description-content" aria-selected="true">معرفی اجمالی</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" id="information-tab" data-toggle="tab" href="#information-content" role="tab" aria-controls="information-content" aria-selected="false">مشخصات</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" id="specification-tab" data-toggle="tab" href="#specification-content" role="tab" aria-controls="specification-content" aria-selected="false">تحلیل و برسی</a></li>
        <li class="nav-item" role="presentation"><a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews-content" role="tab" aria-controls="reviews-content" aria-selected="false">نظرات (5)</a></li>
    </ul>
    <div class="tab-content" id="productContent" style="margin-bottom: 80px;">

        <div class="tab-pane fade show active" id="description-content" role="tabpanel" aria-labelledby="description-tab">

        </div>
        <div class="tab-pane fade" id="information-content" role="tabpanel" aria-labelledby="information-tab">

        </div>
        <div class="tab-pane fade" id="specification-content" role="tabpanel" aria-labelledby="specification-tab">

        </div>
        <div class="tab-pane fade" id="reviews-content" role="tabpanel" aria-labelledby="reviews-tab">

        </div>
    </div>
</div>
</div>
</div>


        <script src="<?= URL ?>plugins/jquery.min.js"></script>


        <script>
            $('#description-tab').click(function () {
                var section_selected =  $('#description-content');
                var url = '<?= baseURL ?>product/tab/<?= $product['id'] ?>/<?= $product['cat'] ?>';
                var data = {'number':1};

                $.post(url,data,function (msg) {
                   section_selected.html(msg);
                });
            });
            $('#information-tab').click(function () {
                var section_selected =  $('#information-content');
                var url = '<?= baseURL ?>product/tab/<?= $product['id'] ?>/<?= $product['cat'] ?>';
                var data = {'number':2};

                $.post(url,data,function (msg) {
                    section_selected.html(msg);
                });
            });
            $('#specification-tab').click(function () {
                var section_selected =  $('#specification-content');
                var url = '<?= baseURL ?>product/tab/<?= $product['id'] ?>/<?= $product['cat'] ?>';
                var data = {'number':3};

                $.post(url,data,function (msg) {
                    section_selected.html(msg);
                });
            });
            $('#reviews-tab').click(function () {
                var section_selected =  $('#reviews-content');
                var url = '<?= baseURL ?>product/tab/<?= $product['id'] ?>/<?= $product['cat'] ?>';
                var data = {'number':4};

                $.post(url,data,function (msg) {
                    section_selected.html(msg);
                });
            });

        </script>