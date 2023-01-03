<?php
class login extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        session_start();
        print_r($_SESSION['userID']);
        $this->viewUrl('login/index');
    }
    function checkuser()
    {
        $this->model->checkuser($_POST);
        model::session_init();
        $check = model::get_session('userID');
        if ($check == false)
        {
            header('location: '.baseURL.'login');
        }else
        {
            header('location: '.baseURL.'panel');
        }
    }
}