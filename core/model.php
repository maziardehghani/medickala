<?php

class model
{
    public static $conn = '';

    function __construct()
    {
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn = new PDO('mysql:host=' . $_ENV['HOST_NAME'] . ';dbname=' . $_ENV['DB_NAME'], $_ENV['USERNAME'], $_ENV['DB_PASS'], $attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }


    public static function get_option()
    {
        $sql = 'select * from tbl_option ';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $option = [];
        foreach ($result as $row) {
            $setting = $row['setting'];
            $value = $row['value'];
            $option[$setting] = $value;
        }
        return $option;
    }

    public function doSelect($sql, $values = [], $fetchAll = true, $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetchAll) {
            $result = $stmt->fetchAll($fetchStyle);
        } else {
            $result = $stmt->fetch($fetchStyle);
        }
        return $result;
    }

    public function doQuery($sql, $values = [])
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
    }

    public static function session_init()
    {
        @session_start();
    }

    public static function set_session($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function get_session($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

}