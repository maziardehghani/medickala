<?php

class index extends controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $this->view('front/index/index');
    }
}