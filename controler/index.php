<?php
class index extends controller
{
    function __construct()
    {

    }

    function index()
    {
        $slider = $this->model->getslider();
        $specials = $this->model->getspecial();
        $favorite_time = $this->model->get_favorite_time();
        $bestseller_time = $this->model->get_bestSeller_Blood();
        $bestseller_Mask = $this->model->get_bestSeller_Mask();
        $bestseller_odontology = $this->model->get_bestSeller_Odontology();
        $bestseller = [$bestseller_time,$bestseller_Mask,$bestseller_odontology];
        $mostViewd = $this->model->get_most_view();
        $params = [$slider,$specials, $favorite_time ,$bestseller,$mostViewd];

        $this->viewUrl('index/index',$params);
    }
}