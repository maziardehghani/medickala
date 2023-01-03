<?php
class model_test extends model
{
    function __construct()
    {

$date = new DateTime('1401/1/25');
echo $date->format('Y/m/d');

    }

}

?>