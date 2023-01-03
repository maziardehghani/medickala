<?php
class model_showcart extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getbasketproduct()
    {
        $cookie = self::getbasketcookie();
        $sql = 'select tbl_basket.tedad,
                tbl_basket.id as basketrow , tbl_basket.color as basketcolor,
                tbl_product.* 
                from tbl_basket 
                join tbl_product on tbl_basket.productID = tbl_product.id
                 where cookie =?';
        $result = $this->doSelect($sql ,[$cookie]);
        foreach ($result as $key=>$row)
        {
            $discount = $row['discount'];
            $price =  $row['price'];
            $discountPrice = $this->calc_discount($price , $discount);
            $discountPrice=$discountPrice[1];
            $result[$key]['Endprice'] = $discountPrice;
        }
        $pricetotal = 0;
        foreach ($result as $row)
        {
            $tedad = $row['tedad'];
            $price =  $row['Endprice'];
            $pricetotal = $price*$tedad+$pricetotal;
        }
        foreach ($result as $key=>$row)
        {
            $color = $row['basketcolor'];
            $sql = 'select tbl_color.title from tbl_color where id = ?';
            $colorName = $this->doSelect($sql , [$color]);
            $result[$key]['colorName'] = $colorName;
        }

        return [$result , $pricetotal ,];
    }
    function deletebasket($productID)
    {
        $sql = 'delete from tbl_basket where id =?';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1 , $productID);
        $stmt->execute();
    }
    function updatebasket($data)
    {
        $tedad = $data['tedad'];
        $basket = $data['basketrow'];

        $sql = 'update tbl_basket set tedad = ? where id = ?';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1 , $tedad);
        $stmt->bindValue(2 , $basket);
        $stmt->execute();
    }

}