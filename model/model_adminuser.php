<?php

class model_adminuser extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getUser()
    {
        $sql = 'select tbl_user.* , tbl_level_user.title as levelTitle
         from tbl_user
         left join tbl_level_user on 
         tbl_user.id = tbl_level_user.id
         order by id desc
         ';
        $result = $this->doSelect($sql);
        return $result;
    }
    function chengeLevelto1($ids)
    {
        $ids = join(',' , $ids);
        $sql = 'update tbl_user set leveluser=1 where id in('.$ids.')';
        $this->doQuery($sql);
    }
    function chengeLevelto2($ids)
    {
        $ids = join(',' , $ids);
        $sql = 'update tbl_user set leveluesr=2 where id in('.$ids.')';
        $this->doQuery($sql);
    }
    function chengeLevelto3($ids)
    {
        $ids = join(',' , $ids);
        $sql = 'update tbl_user set leveluser=3 where id in('.$ids.')';
        $this->doQuery($sql);
    }
    function deleteuser($ids)
    {
        $ids = join(',' , $ids);
        $sql = 'delete from tbl_user where id in('.$ids.')';
        $this->doQuery($sql);
    }

}

