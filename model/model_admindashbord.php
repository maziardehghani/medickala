<?php
class model_admindashbord extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getOrder()
    {
        $sql = 'select * from tbl_order ';
        $result = $this->doSelect($sql);
        return $result ;
    }

    function getStat()
    {
     $today_date = date('Y/m/d');
     $time = time();
     $last_week_time = $time-(7*24*3600);
     $last_week_time = date('Y/m/d' , $last_week_time);
     $Range = $this->getRange($last_week_time,$today_date);
     $orders = $this->getOrder();
     $orderRanges = [];
     $orderStats=[];


     foreach ($orders as $order)
     {
         $orderDate = $order['dateTime'];
         array_push($orderRanges , $orderDate);
     }
     foreach ($Range as $range)
     {
         $orderStats[$range] = 0;
         foreach ($orderRanges as $orderRange)
         {
             if ($orderRange == $range)
             {
                 $orderStats[$range]++;
             }
         }
     }
     return $orderStats;

    }
    function getRange($startTime , $lastTime)
    {
        $date=[];
        $current = strtotime($startTime);
        $lastTime = strtotime($lastTime);
        while($current<=$lastTime)
        {
             $date[]=jdate("Y/n/j" , $current , '' , 'asia/tehran' , 'en');
             $current = strtotime( '+1day',$current);

        }
        return $date;
    }


}