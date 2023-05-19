<?php

class adminorder extends controller
{
    function __construct()
    {
        parent::__construct();
        parent::__construct();
        $userLevel = model::UserLevel();
        if ($userLevel != 1) {
            header("location:" . baseURL . "adminlogin/index");
        }
    }

    function index()
    {
        $orders = $this->model->getOrders();
        $data = ['orders' => $orders];
        $this->viewUrl("admin/order/index", $data, true, false);
    }

    function detail($id)
    {
        $orderInfo = $this->model->orderInfo($id);
        $order = $orderInfo[0];
        $orderBasketInfo = $orderInfo[1];
        $data = ['orderBasketInfo' => $orderBasketInfo, 'orderInfo' => $order];
        $this->viewUrl("admin/order/detail", $data, true, false);
    }

    function delete()
    {
        if (isset($_POST['id'])) {
            $this->model->deleteOrder($_POST['id']);
        }
        header('location: ' . baseURL . 'adminorder/index');

    }
}