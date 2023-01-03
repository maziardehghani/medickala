<?php
class model_adminsetting extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function saveSetting($data)
    {
        foreach ($data as $setting=>$value)
        {
            $sql = 'update tbl_option set value=? where setting=?';
            $this->doQuery($sql , [$value , $setting]);
        }
    }

}