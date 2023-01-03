<?php
class model_admincomment extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getcomments()
    {
        $sql = 'select * from tbl_comment';
        $result = $this->doSelect($sql);
        return $result;
    }
    function confirm($IDs)
    {
        $IDs = join(',' , $IDs);
        $sql = 'update tbl_comment set confirm=1 where id in ('.$IDs.')';
        $this->doQuery($sql);
    }
    function unconfirm($IDs)
    {
        $IDs = join(',' , $IDs);
        $sql = 'update tbl_comment set confirm=0 where id in ('.$IDs.')';
        $this->doQuery($sql);
    }
    function delete($IDs)
    {
        $IDs = join(',' , $IDs);
        $sql = 'delete from tbl_comment where id in ('.$IDs.')';
        $this->doQuery($sql);
    }

}