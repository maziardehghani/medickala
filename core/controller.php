<?php
class controller
{
    public $model = '';
    function __construct()
    {
    }
    function view($Url , $data=[])
    {
        if (file_exists('view/'.$Url.'.php'))
        {
            require ('view/'.$Url.'.php');
        }

    }

    function model($model_name)
    {
        require ('model/model_'.$model_name.'.php');
        $className = 'model_'.$model_name;
        $this->model = new $className;
    }
}