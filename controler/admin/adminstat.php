<?php


class adminstat extends controller
{
    function __construct()
    {
        parent::__construct();
        parent::__construct();

    }

    function index()
    {

        $this->viewUrl("admin/stat/index", $data = [], true, false);
    }

    function order()
    {
        $orderStats = $this->model->orderStats($_POST);
        $data = ['orderStats' => $orderStats];
        $this->viewUrl("admin/stat/order", $data, true, false);
    }

}

?>
