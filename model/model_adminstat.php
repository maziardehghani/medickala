<?php

class model_adminstat extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function compare($date1 , $date2)
    {
        $date1= new DateTime($date1);
        $date2= new DateTime($date2);
        $date1 = $date1->format('Y-m-d');
        $date2 = $date2->format('Y-m-d');

        if ($date1>$date2)
        {
            return 1 ;
        }else
        if ($date1 == $date2)
        {
            return 2;
        }else
        if ($date1<$date2)
        {
            return 3 ;
        }
    }
    function orderStats($date)
    {
        $startDate = $date['year1'].'/'.$date['month1'].'/'.$date['day1'];
        $endDate = $date['year2'].'/'.$date['month2'].'/'.$date['day2'];

        $sql = 'select * from tbl_order ';
        $result = $this->doSelect($sql);
        $totalDate = [];
        $paiedOrder = 0;
        $amountTotal = 0;
        foreach ($result as $row)
        {
            $tarikh = $row['dateTime'];
            $compare1=$this->compare($tarikh , $startDate);
            $compare2=$this->compare($tarikh,$endDate);
            if (($compare1==1 or $compare1 ==2) and ($compare2==3 or $compare2==2))
            {
                array_push($totalDate , $row);
                if ($row['pay']==1)
                    {
                        $paiedOrder++;
                        $amountTotal = $amountTotal+$row['amount'];
                    }
            }

        }
        return ['stat'=>$totalDate , 'paideOrders' =>$paiedOrder,'totalamount'=>$amountTotal , 'startdate'=>$startDate , 'endDate'=>$endDate];

    }

}