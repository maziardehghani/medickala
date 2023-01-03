<?php
class model_panel extends model
{
    private $userID='';

    function __construct()
    {
        model::session_init();
       $this->userID = model::get_session('userID');

        parent::__construct();
    }
    function getOrder()
    {
        model::session_init();
        $userID = model::get_session('userID');
        $sql = "select tbl_order.*,tbl_status.title_status
        from tbl_order
        left join tbl_status
        ON tbl_status.id=tbl_order.status
        where userID=?";
        $result =$this->doSelect($sql , [$userID]);

        foreach ($result as $key=>$row)
        {
            $basket = $row['basket'];
            $basket = unserialize($basket);

            foreach ($basket as $key2=>$col)
            {
                $color = $col['basketcolor'];
                $sql = 'select tbl_color.title from tbl_color where id = ?';
                $colorName = $this->doSelect($sql , [$color]);
                $basket[$key2]['colorName']=$colorName;
            }

            $result[$key]['basket'] = $basket;
        }



        return $result;
    }
    function userInfo()
    {
        model::session_init();
        $id = model::get_session('userID');
        $sql = 'select * from tbl_user where id=?';
        $result = $this->doSelect($sql , [$id] , false);
        return $result;
    }
    function userComments()
    {
        model::session_init();
        $id = model::get_session('userID');
        $sql = 'select * from tbl_comment where userID=?';
        $result = $this->doSelect($sql , [$id]);
        return $result;
    }
    function userState()
    {
        model::session_init();
        $id = model::get_session('userID');
        $sql = 'select * from tbl_order where userID =?';
        $result = $this->doSelect($sql , [$id]);
        $state['orders'] = sizeof($result);

        $sql = 'select * from tbl_order where userID =? AND status = 1';
        $result = $this->doSelect($sql , [$id]);
        $state['under_checking_orders'] = sizeof($result);

        $sql = 'select * from tbl_order where userID =? AND status = 2';
        $result = $this->doSelect($sql , [$id]);
        $state['ready_send_orders'] = sizeof($result);

        $sql = 'select * from tbl_comment where userID =?';
        $result = $this->doSelect($sql , [$id]);
        $state['user_comment'] = sizeof($result);

        $sql = 'select * from tbl_message where userID =? and status = 0';
        $result = $this->doSelect($sql , [$id]);
        $state['user_unreed_message'] = sizeof($result);

        $sql = 'select * from tbl_code where userID =? and used = 0';
        $result = $this->doSelect($sql , [$id]);
        $state['user_unused_copen'] = sizeof($result);

        return $state;
    }
    function getMessage()
    {
        $userID = $this->userID;
        $sql = 'select * from tbl_message where userID = ?';
        $result = $this->doSelect($sql , [$userID]);

        $sql1 = 'update tbl_message set status=1 where userID = ?';
        $stmt = self::$conn->prepare($sql1);
        $stmt->bindValue(1 , $userID);
        $stmt->execute();
        return $result;
    }
    function getComments()
    {
        $userID = $this->userID;
        $sql = 'select tbl_product.title as productTitle , tbl_comment.*
         from tbl_comment
         left join tbl_product
         on tbl_comment.idproduct = tbl_product.id
         where userID = ?';
        $result = $this->doSelect($sql , [$userID]);
        return $result;
    }
    function deleteComment($id)
    {
        $sql = 'delete from tbl_comment where id = ?';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1 , $id);
        $stmt->execute();
    }
    function getCopen()
    {
        $userID = $this->userID;
        $sql = 'select * from tbl_code where userID =?';
        $result = $this->doSelect($sql , [$userID]);


        foreach ($result as $key=>$row)
        {
            $code = $row['code'];
            $sql = 'select * from tbl_order where copen = ? and userID = ?';
            $ordersCopen = $this->doSelect($sql , [$code , $userID] , false);
            $result[$key]['ordersCopen'] = $ordersCopen;
        }
        return $result;
    }
    function saveCode($code)
    {
        $userID = $this->userID;
        $sql = 'update tbl_code set userID = ? where code = ?';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1 , $userID);
        $stmt->bindValue(2 , $code);
        $stmt->execute();
    }
    function checkcode($code)
    {
        $sql = 'select * from tbl_code where code =? and used = 0';
        $result = $this->doSelect($sql , [$code] );
        if (sizeof($result)>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function editProfile($data)
    {


        $userID = $this->userID;
        $born = $data['year'].'/'.$data['month'].'/'.$data['day'];
        $family = $data['family'];
        $address = $data['address'];
        $phone = $data['mobile'];
        $jender = $data['jender'];
        $khabarname = @$data['khabarname'];

        $sql = 'update tbl_user set  born=? , family=? , address=? , phone=? , jender=? , khabarname=? where id =?';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1 , $born);
        $stmt->bindValue(2 , $family);
        $stmt->bindValue(3 , $address);
        $stmt->bindValue(4 , $phone);
        $stmt->bindValue(5 , $jender);
        $stmt->bindValue(6 , $khabarname);
        $stmt->bindValue(7 , $userID);
        $stmt->execute();
    }
    function changePass($data)
    {


        $userID = $this->userID;
        if(!empty($data['pass_old']))
        {
            $oldPass = $data['pass_old'];
        }
        if(!empty($data['pass_new']))
        {
            $newPass = $data['pass_new'];
        }
        if(!empty($data['pass_confirm']))
        {
            $confirmPass = $data['pass_confirm'];
        }
        $userInfo = $this->userInfo();
        $password = $userInfo['password'];
        $error = '';
        if ($confirmPass == $newPass)
        {
            if ($password == $oldPass)
            {
                $sql = 'update tbl_user set password =? where id=?';
                $stmt = self::$conn->prepare($sql);
                $stmt->bindValue(1 , $newPass);
                $stmt->bindValue(2 , $userID);
                $stmt->execute();
                $error = 3;

            }else
            {
                $error = 1;
            }
        }else
        {
            $error = 2;
        }

        header("location:".baseURL."panel/changePassword?error=".$error);

    }
}

