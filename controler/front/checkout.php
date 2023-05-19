<?php



class checkout extends controller
{
    function __construct()
    {
        model::session_init();
        $check = model::get_session('userID');
        if ($check != true) {
            header("location:" . baseURL . "showcart1");
        }
    }

    function index()
    {
        $product_basket = $this->model->getbasketproduct();
        $product_basketInfo = $product_basket[0];
        $pricetotal = $product_basket[1];

        $data = ['basket_product' => $product_basketInfo, 'price_total' => $pricetotal];
        $this->viewUrl('checkout/index', $data, true, true);
    }

    function checkcode($code = '')
    {
        echo $this->model->checkcode($code);
    }

    function docopen($code = '')
    {
        echo $this->model->docopen($code);
    }

    function submitOrder()
    {
        if (isset($_POST['email'])) {
            $this->model->saveOrder($_POST);


        }
        header('location: http://localhost/medickala/showcart/index');


    }

}