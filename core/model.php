<?php
class model
{
    public static $code = '';
    public static $conn = '';
    function __construct()
    {
        $username = 'root';
        $password = '';
        $dbname = 'medickala';
        $hostName = 'localhost';
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn= new PDO('mysql:host='.$hostName.';dbname='.$dbname,$username,$password,$attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
         include_once('public/plugins/jdf.php');

}



    public static function get_option()
    {
        $sql = 'select * from tbl_option ';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $option =[];
        foreach ($result as $row)
        {
            $setting = $row['setting'];
            $value = $row['value'];
            $option[$setting] = $value;
        }
        return $option;
    }



    function calc_discount($price , $discount)
    {
        $discount_price = ($discount*$price) /100;
        $EndPrice = $price - $discount_price;
        $total_prices = [$discount_price , $EndPrice];
        return $total_prices;
    }



    function doSelect($sql,$values=[],$fetchAll=true , $fetchStyle=PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key=>$value)
        {
            $stmt->bindValue($key+1 , $value);
        }
        $stmt->execute();
        if ($fetchAll)
        {
            $result = $stmt->fetchAll($fetchStyle);
        }
        else
        {
            $result = $stmt->fetch($fetchStyle);
        }
        return $result;
    }

    function get_colors($id)
    {
        $sql = 'select * from tbl_color where id = ?';
        $stmt = $this->doSelect($sql,[$id] , false);
        return $stmt;
    }

    function doQuery($sql,$values=[])
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key=>$value)
        {
            $stmt->bindValue($key+1 , $value);
        }
        $stmt->execute();
    }
    function create_thumbnail($file, $pathToSave = '', $w, $h = '', $crop = FALSE)
    {

        $new_height = $h;

        list($width, $height) = getimagesize($file);

        $r = $width / $height;

        if ($crop) {
            if ($width > $height) {
                $width = ceil($width - ($width * abs($r - $w / $h)));
            } else {
                $height = ceil($height - ($height * abs($r - $w / $h)));
            }
            $newwidth = $w;
            $newheight = $h;
        } else {
            if ($w / $h > $r) {
                $newwidth = $h * $r;
                $newheight = $h;
            } else {
                $newheight = $w / $r;
                $newwidth = $w;
            }
        }

        $what = getimagesize($file);

        switch (strtolower($what['mime'])) {
            case 'image/png':
                $src = imagecreatefrompng($file);

                break;
            case 'image/jpeg':
                $src = imagecreatefromjpeg($file);
                break;
            case 'image/gif':
                $src = imagecreatefromgif($file);
                break;
            default:
                //die();
        }

        if ($new_height != '') {
            $newheight = $new_height;
        }

        $dst = imagecreatetruecolor($newwidth, $newheight);//the new image
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);//az function

        imagejpeg($dst, $pathToSave, 95);//pish farz in tabe 75 darsad quality ast

        return $dst;


    }
    public static function session_init()
    {
        @session_start();
    }
    public static function set_session($name , $value)
    {
        $_SESSION[$name] = $value;
    }
    public static function get_session($name)
    {
        if (isset($_SESSION[$name]))
        {
            return $_SESSION[$name];
        }else
        {
            return false;
        }
    }

    public static function getbasketcookie()
    {
        if (isset($_COOKIE['basket']))
        {
            $cookie = $_COOKIE['basket'];
        }else
        {
            $expire = time()+7*24*3600;
            $value = time();
              setcookie('basket',$value ,$expire,'/');
            $cookie = $value;
        }
        return $cookie;
    }
    public static function UserLevel()
    {
        self::session_init();
        $userID = self::get_session('userID');
        $sql = 'select * from tbl_user where id = ? ';
        $userInfo = self::doSelect($sql , [$userID] , false);
        return $userInfo['leveluser'];
    }
}