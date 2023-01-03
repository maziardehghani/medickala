<?php
class model_product extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_product_info($id)
    {
        $sql = 'select * from tbl_product where id = ?';
        $result = $this->doSelect($sql, [$id], false);
        $price = $result['price'];
        $discount = $result['discount'];
        $calc_discount = self::calc_discount($price, $discount);
        $result['discount_price'] = $calc_discount[0];
        $result['EndPrice'] = $calc_discount[1];
        return $result;

    }

    function get_color($id)
    {
        $sql = 'select * from tbl_product where id =?';
        $products = $this->doSelect($sql, [$id], false);
        $colorIds = $products['color'];
        $colorIds = explode(',', $colorIds);
        $colorIds = array_filter($colorIds);
        $colors = [];
        foreach ($colorIds as $colorId) {

            $color = $this->get_colors($colorId);
            array_push($colors, $color);
        }

        return $colors;

    }

    function getspecial()
    {
        $sql = 'select * from tbl_product where special = ? ';
        $stmt = $this->doSelect($sql, [1]);
        $result = [];
        foreach ($stmt as $row) {
            $price = $row['price'];
            $discount = $row['discount'];
            $total_price = $this->calc_discount($price, $discount)[1];
            $row['total_price'] = $total_price;
            array_push($result, $row);
        }
        return $result;
    }

    function naghd($id)
    {
        $sql = 'select * from tbl_product where id = ?';
        $result = $this->doSelect($sql, [$id], false);
        $res = $result['introduction'];
        return $res;

    }

    function fanni($idCategory, $idproduct)
    {
        $sql = 'select * from tbl_attr where idCategory = ? and parent = 0';
        $param = [$idCategory];
        $result = $this->doSelect($sql, $param);
        foreach ($result as $key => $row) {
            $sql2 = 'select a.title , p.valueID , c.val as valTitle
            from tbl_attr a 
            left join tbl_product_attr p on a.id = p.idAttr and p.idproduct = ?
            left join tbl_attr_val c on p.valueID = c.ID
            where a.parent = ?';
            $param = [$idproduct, $row['id']];
            $result2 = $this->doSelect($sql2, $param);
            $result[$key]['children'] = $result2;
        }

        return $result;
    }

    function comment_param($idcategory, $idproduct)
    {
        $sql = 'select * from tbl_comment_param where idcategory = ?';
        $param = [$idcategory];
        $result = $this->doSelect($sql, $param);
        $sql = 'select * from tbl_comment where idproduct = ?';
        $res = $this->doSelect($sql, [$idproduct]);
        $param_total = [];
        foreach ($res as $row) {
            $params = $row['param'];
            $param_scores = unserialize($params);

            foreach ($param_scores as $key => $val) {
                $param_id = $key;
                $score = $val;
                if (!isset($param_total[$param_id])) {
                    $param_total[$param_id] = 0;
                }
                $scores_total[$param_id] = $param_total[$param_id] + $score;
            }

        }
        $totalComment = sizeof($res);
        foreach ($scores_total as $key => $val) {
            $average = $val / $totalComment;
            $scores_total[$val] = $average;
        }
        return [$result, $scores_total];


    }

    function getComment($idproduct)
    {
        $sql = 'select * from tbl_comment where idproduct = ? and confirm=1 ORDER by id desc ';
        $param = [$idproduct];
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function get_question($idproduct)
    {
        $sql = 'select * from tbl_question where idproduct =?';
        $questions = $this->doSelect($sql, [$idproduct]);
        $all_answers_new = [];

        $sql = 'select * from tbl_question where parent != 0';
        $all_answers = $this->doSelect($sql);
        foreach ($all_answers as $answer) {
            $question_id = $answer['parent'];
            $all_answers_new[$question_id] = $answer;
        }
        return [$questions, $all_answers_new];
    }

    function get_gallery($idproduct)
    {
        $sql = 'select * from tbl_gallery where idproduct =?';
        $gallery = $this->doSelect($sql, [$idproduct]);
        return $gallery;
    }

    function addtobasket($productID, $color)
    {
        $cookie = model::getbasketcookie();
        $sql = 'select * from tbl_basket where cookie = ? and productID = ? and color=?';
        $result = $this->doSelect($sql, [$cookie, $productID, $color]);
        if (isset($result[0])) {
            $sql = 'update tbl_basket set tedad = tedad+1 where cookie = ? and productID =? and color=?';
        } else {
            $sql = 'insert into tbl_basket (cookie , productID , tedad , color) values (?,?,1,?)';
        }
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1, $cookie);
        $stmt->bindValue(2, $productID);
        $stmt->bindValue(3, $color);
        $stmt->execute();
    }

    function addComment($idproduct , $data)
    {
        model::session_init();
        $userID = model::get_session('userID');
        $username = $data['name'];
        $matn = $data['matn'];


        include_once 'public/plugins/jdf.php';
        $time = jdate("Y/n/j" , '' , '' , '' , 'en');

        $sql = 'insert into tbl_comment (idproduct , username , userID , matn , tarikh) values (? , ? , ? , ? , ?)';
        $stmt = self::$conn->prepare($sql);
        $stmt->bindValue(1, $idproduct);
        $stmt->bindValue(2, $username);
        $stmt->bindValue(3, $userID);
        $stmt->bindValue(4, $matn);
        $stmt->bindValue(5, $time);
        $stmt->execute();
    }

    function checklogin($email)
    {
        $sql = 'select * from tbl_user where email = ?';
        $result = $this->doSelect($sql , [$email]);
        if (sizeof($result)>0)
        {
            return true;
        }else
        {
            return false;
        }
    }

    }