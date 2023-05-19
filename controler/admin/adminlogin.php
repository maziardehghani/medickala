<?php



class adminlogin extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $this->viewUrl('admin/login/index', $data = [], true, false);
    }

    function checkuser()
    {
        $this->model->checkuser($_POST);
        model::session_init();
        $check = model::get_session('userID');
        if ($check == false) {
            header('location: ' . baseURL . 'adminlogin/index');
        } else {
            header('location: ' . baseURL . 'admindashbord/index');
        }
    }
}

