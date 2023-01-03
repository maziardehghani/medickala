<?php
class model_login extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function checkuser($form)
    {
        $email = $form['email'];
        $password = $form['password'];
        $sql = 'select *from tbl_user where email =? and password = ?';
        $result = $this->doSelect($sql , [$email , $password]);

        if (sizeof($result) > 0 and !empty($email) and !empty($password))
        {
            model::session_init();
            model::set_session('userID' , $result[0]['id']);
        }else
        {
            echo 'wrong pass';
        }
    }
}