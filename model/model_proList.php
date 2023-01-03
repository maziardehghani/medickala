<?php
class model_proList extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getCategory()
    {
        $sql = "select * from tbl_category";
        $result = $this->doSelect($sql);
        $headCat = [];
        $underCat = [];
        foreach ($result as $row)
        {
            if ($row['parent']==0)
            {
                array_push($headCat,$row);
            }
            if ($row['parent']!=0)
            {
                array_push($underCat,$row);
            }
        }
        $result = [$headCat,$underCat];
        return $result;
    }
    function get_product($catID)
    {
        $sql = 'select * from tbl_product where cat = ? ';
        $result = $this->doSelect($sql , [$catID]);
        return $result;
    }
}