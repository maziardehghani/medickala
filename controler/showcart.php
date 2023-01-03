<?php
class showcart extends controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $product_basket = $this->model->getbasketproduct();
        $product_basketInfo = $product_basket[0];
        $pricetotal=$product_basket[1];
        $data=['basket_product' => $product_basketInfo , 'price_total'=>$pricetotal];
        $this->viewUrl('showcart/index' , $data);
    }
    function deletebasket($productID)
    {
        $this->model->deletebasket($productID);
        $product_basket = $this->model->getbasketproduct();
        echo json_encode($product_basket);
    }


}