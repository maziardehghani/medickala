<?php

class adminsetting extends controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        if (isset($_POST['email']))
        {
            $this->model->saveSetting($_POST);
        }

        $this->viewUrl('admin/setting/index' , $data=[] , true , false);
    }
}

