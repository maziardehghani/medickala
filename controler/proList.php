<?php
class proList extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index($catID=0)
    {
        $products = $this->model->get_product($catID);
        $category = $this->model->getCategory();
        $headCat = $category[0];
        $underCat = $category[1];
        $data =['products'=> $products , 'headCat'=>$headCat  ,'underCat'=>$underCat];
        $this->viewUrl('proList/index' ,$data);
    }

}