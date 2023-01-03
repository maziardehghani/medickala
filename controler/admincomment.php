<?php
class admincomment extends controller
{
    function __construct()
    {
        parent::__construct();
        parent::__construct();

    }
    function index()
    {
        $comment = $this->model->getcomments();
        $data=['comment'=>$comment];
        $this->viewUrl('admin/comment/index' , $data , true , false);
    }
    function confirm()
    {
        if (isset($_POST['id']))
        {
            $IDs = $_POST['id'];
            $this->model->confirm($IDs);
        }
        header("location:".baseURL."admincomment/index");

    }
    function unconfirm()
    {
        if (isset($_POST['id'])) {
            $IDs = $_POST['id'];
            $this->model->unconfirm($IDs);
        }
        header("location:".baseURL."admincomment/index");
    }
    function delete()
    {
        if (isset($_POST['id'])) {

        $IDs = $_POST['id'];
        $this->model->delete($IDs);
        }
        header("location:".baseURL."admincomment/index");
    }
}