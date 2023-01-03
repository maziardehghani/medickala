<?php
class model_index extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getslider()
    {
        $sql = 'select * from tbl_slider ';
        $result = $this->doSelect($sql);
        return $result;
    }
    function getspecial()
    {
        $sql = 'select * from tbl_product where special = ? ';
        $stmt = $this->doSelect($sql,[1]);
        $result = [];
        foreach ($stmt as $row)
         {
          $price = $row['price'];
          $discount =$row['discount'];
          $total_price = $this->calc_discount($price,$discount)[1];
          $row['total_price'] = $total_price;
          array_push($result , $row);
         }
        return $result;
    }
    function get_favorite_time()
    {
        $sql = 'select * from tbl_product where favorite = ?';
        $stmt = $this->doSelect($sql,[1]);
        $first_row = $stmt[0];
        $first_row = $first_row['time_favorite'];

        ////option_tbl/////////

        $option = self::get_option();
        $duration_time = $option['time_favorite'];


        $expire_time = $first_row + $duration_time;
        date_default_timezone_set('asia/tehran');
        $favorite_time = date('h:i:s' , $expire_time);
        return $favorite_time;
    }
    function get_bestSeller_blood()
    {
        $sql = 'select * from tbl_product where bestsellet = ? ';
        $stmt = $this->doSelect($sql , ['Blood']);
        return $stmt;
    }
    function get_bestSeller_Mask()
    {
        $sql = 'select * from tbl_product where bestsellet = ? ';
        $stmt = $this->doSelect($sql , ['Mask']);
        return $stmt;
    }
    function get_bestSeller_Odontology()
    {
        $sql = 'select * from tbl_product where bestsellet = ? ';
        $stmt = $this->doSelect($sql , ['odontology']);
        return $stmt;
    }
    function get_most_view()
    {
        $sql = 'select * from tbl_option where setting = ?';
        $stmt = $this->doSelect($sql , ['mostViewLimit'] , false);
        $limit = $stmt['value'];

        $sql2 = 'select * from tbl_product order by view desc limit '.$limit.' ';
        $result = $this->doSelect($sql2);
        return $result;
    }


}