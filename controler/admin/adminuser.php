<?php


class adminuser extends controller
{
    function __construct()
    {
        parent::__construct();
        $userLevel = model::UserLevel();

    }

    function index()
    {
        $user = $this->model->getUser();
        $data = ['user' => $user];
        $this->viewUrl("admin/user/index", $data);
    }

    function changeLevel1()
    {

        $ids = $_POST['id'];
        print_r($_POST);
    }

    function changeLevel2()
    {
        $ids = $_POST['id'];
        $this->model->chengeLevelto2($ids);
        header("location:" . baseURL . "adminuser/index");
    }

    function changeLevel3()
    {
        $ids = $_POST['id'];
        $this->model->chengeLevelto3($ids);
        header("location:" . baseURL . "adminuser/index");
    }

    function deleteuser()
    {
        $ids = $_POST['id'];
        $this->model->deleteUser($ids);
        header("location:" . baseURL . "adminuser/index");
    }

}

