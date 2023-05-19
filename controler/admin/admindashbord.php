<?php



class admindashbord extends controller
{
    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        $level = model::UserLevel();
        $date = $this->model->getStat();
        $data = ['date' => $date, 'levelUser' => $level];
        $this->viewUrl('admin/dashbord/index', $data, true, false);
    }

}