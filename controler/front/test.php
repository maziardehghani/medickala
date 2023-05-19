<?php


class test extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $test = $this->model->multijoin();

        echo "<pre>";
        print_r($test);
        echo "</pre>";
    }
}