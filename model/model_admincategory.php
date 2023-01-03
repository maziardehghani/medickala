<?php

class model_admincategory extends model
{
    public $all_children=[];
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {

    }

    function getCategory()
{
    $sql = 'select * from tbl_category ';
    $result = $this->doSelect($sql);
    return $result;
}
    function getChildren($idcategory)
    {
        $sql = "select * from tbl_category where parent=?";
        $result = $this->doSelect($sql, array($idcategory));
        return $result;
    }
    function get_parents($idcategory)
    {
        $category = $this->categoryInfo($idcategory);
        $parent = $category['parent'];
        $all_parents = [];
        while($parent!=0)
        {
            $sql ='select * from tbl_category where id = ?';
            $Cat = $this->doSelect($sql , [$parent] , false);
            array_push($all_parents , $Cat);
            $parent = $Cat['parent'];
        }

        return $all_parents;

    }
    function categoryInfo($idcategory)
    {
        $sql = 'select * from tbl_category where id=?';
        $result = $this->doSelect($sql,[$idcategory] , false);
        return $result;
    }
    function addcategory($title ,$parent , $edit,$categoryId)
    {
        if($edit == '')
        {
            $sql = 'insert into tbl_category (title , parent) value (? , ?)';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1 , $title);
            $stmt->bindValue(2 , $parent);
            $stmt->execute();
        }else
        {
            $sql = 'update tbl_category set title = ? , parent = ? where id=?';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1 , $title);
            $stmt->bindValue(2 , $parent);
            $stmt->bindValue(3 , $categoryId);
            $stmt->execute();
        }
    }

    function get_childes($categoryid)
    {

        $childrenId = [];
        foreach ($categoryid as $row) {
            $children = $this->getChildren($row);
            foreach ($children as $child) {
                array_push($childrenId, $child['id']);
            }
        }
        return $childrenId;
    }


    function deletecategory($ids)
    {

        $this->all_children = array_merge($this->all_children, $ids);
        while (sizeof($ids)>0)
        {
            $childrenId = $this->get_childes($ids);
            $this->all_children = array_merge($this->all_children,$childrenId);
            $ids = $childrenId;
        }


            $X = join(',' ,  $this->all_children);
            $sql = 'delete from tbl_category where id in ('.$X.')';
            $stmt = self::$conn->prepare($sql);
            $stmt->execute();
    }
    function showattr($categoryID , $parentID)
    {
        $sql = 'select * from tbl_attr where idCategory = ? and parent = ? order by id desc ';
        $result = $this->doSelect($sql , [$categoryID , $parentID]);
        return $result;
    }
    function attrInfo($attrID)
    {
        $sql = 'select * from tbl_attr where id =?';
        $result = $this->doSelect($sql,[$attrID] , false);
        return $result;
    }

    function addattr($catID ,$attrID, $data ,$edit)
    {
        $title = $data['title'];
        $idCategory = $catID;
        $parent = $data['parent'];



        if ($edit == ''){
            $sql = 'insert into tbl_attr (title , idCategory, parent) values (?,?,?)';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1 , $title);
            $stmt->bindValue(2 , $idCategory);
            $stmt->bindValue(3 , $parent);
            $stmt->execute();
        }
        else
        {
            $sql = 'update tbl_attr set title =? , parent=? where id=?';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1 , $title);
            $stmt->bindValue(2 , $parent);
            $stmt->bindValue(3, $attrID);
            $stmt->execute();
        }


    }
    function deleteAttr($ids=[])
    {
        $sql = 'select * from tbl_attr ';
        $attr = $this->doSelect($sql);

        foreach ($attr as $row)
        {
            $parent = $row['parent'];
            if (in_array($parent , $ids))
            {
                array_push($ids , $row['id']);
            }
        }

        $X = join(',',$ids);
        $sql = 'delete from tbl_attr where id in ('.$X.')';
        $attr = self::$conn->prepare($sql);
        $attr = $attr->execute();
    }

    function attrVal($ID)
    {
        $sql = 'select * from tbl_attr_val where attrID = ?';
        $result = $this->doSelect($sql , [$ID]);
        return $result;
    }
    function saveAttrVal($data ,$ID)
    {
        $attrValNew = $data['attrvalnew'];
        $attrValNew = array_filter($attrValNew);
        foreach ($attrValNew as $row) {
            $sql = 'insert into tbl_attr_val (val , attrID) values (? ,?)';
            $this->doQuery($sql , [$row, $ID]);
        }
        unset($data['attrvalnew']);
        foreach ($data as $key => $val)
        {
            $key =  str_split($key , 7);

            if (isset($key[1]))
            {
                $key = $key[1];

            $sql = 'update tbl_attr_val set  val =? where ID=?';
            $this->doQuery($sql , [ $val,$key]);
            }
        }

    }

}