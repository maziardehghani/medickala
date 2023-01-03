<?php
class blog extends controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $this->viewUrl('blog/index');
    }

}