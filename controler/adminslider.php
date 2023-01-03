<?php

class adminslider extends controller
{
    function __construct()
    {
        parent::__construct();

    }
    function index()
    {
        if (isset($_POST['title']))
        {
            $this->model->saveSlider($_POST , $_FILES);

        }
        $sliders = $this->model->getadminsliders();
        $data=['sliders' => $sliders];
        $this->viewUrl('admin/slider/index' , $data , true , false);
    }
    function deleteSliders()
    {
        if (isset($_POST['id']))
        {
            $this->model->deleteSlider($_POST['id']);
        }

        header("location:".baseURL."adminslider/index");
    }
}

