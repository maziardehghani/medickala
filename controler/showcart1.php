<?php
class showcart1 extends controller
{
    function __construct()
    {
        model::session_init();
        $check = model::get_session('userID');
        if ($check != false)
        {
            header("location:".baseURL."checkout");
        }
    }
    function index()
    {
        $this->viewUrl('showcart1/index' ,$data=[] , true , false);
    }
}