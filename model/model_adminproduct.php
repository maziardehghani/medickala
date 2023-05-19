<?php
error_reporting(E_ERROR | E_WARNING|E_PARSE);
class model_adminproduct extends model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_product()
    {
        $sql = 'select * from tbl_product';
        $result = $this->doSelect($sql);
        return $result;
    }

    function getcategory()
    {

        $sql = 'select * from tbl_category where parent !=0 ';
        $result = $this->doSelect($sql);
        return $result;

    }

    function getcolors()
    {
        $sql = 'select * from tbl_color ';
        $result = $this->doSelect($sql);
        return $result;
    }

    function addproduct($product, $productID, $edit, $file = [])
    {

        $title = $product['title'];
        $price = $product['price'];
        $categoryID = $product['categoryId'];
        $introduction = $product['introduction'];
        $color = '';
        $bestseller = $product['bestsellet'];
        if (isset($product['color'])) {
            $color = $product['color'];
            $color = join(',', $color);
        }
        $tedad_mojood = $product['count_left'];
        $discount = $product['discount'];

        if (!$edit) {
            $sql = 'insert into tbl_product (title,price,cat,introduction,tedad_mojood,discount,color,bestsellet)values(?,?,?,?,?,?,?,?)';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $price);
            $stmt->bindValue(3, $categoryID);
            $stmt->bindValue(4, $introduction);
            $stmt->bindValue(5, $tedad_mojood);
            $stmt->bindValue(6, $discount);
            $stmt->bindValue(7, $color);
            $stmt->bindValue(8, $bestseller);
            $stmt->execute();

            $productID = parent::$conn->lastInsertId();
            mkdir('public/img/products/' . $productID . '');
            mkdir('public/img/products/' . $productID . '/gallery/small/' , 0777 , true);
            mkdir('public/img/products/' . $productID . '/gallery/large/' , 0777 , true);
        } else {

            $sql = 'update tbl_product set title=?,price=?,cat=?,introduction=?,tedad_mojood=?,discount=?,color=?,bestsellet=? where id = ?';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $title);
            $stmt->bindValue(2, $price);
            $stmt->bindValue(3, $categoryID);
            $stmt->bindValue(4, $introduction);
            $stmt->bindValue(5, $tedad_mojood);
            $stmt->bindValue(6, $discount);
            $stmt->bindValue(7, $color);
            $stmt->bindValue(8, $bestseller);
            $stmt->bindValue(9, $productID);
            $stmt->execute();
        }


        //////////FILE-CODE/////////


        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTMP = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $targetMain = 'public/img/products/' . $productID . '/';
        $UploadOK = 1;
        $newName = 'product';

        if ($fileType != "image/jpeg") {
            $UploadOK = 0;
        }
        if ($fileSize > 5000000) {
            $UploadOK = 0;
        }

        if ($UploadOK == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTMP, $target);


            $target220 = $targetMain . $newName . '_size220.' . $ext;
            $target350 = $targetMain . $newName . '_size350.' . $ext;


            $this->create_thumbnail($target, $target220, 220, 220);
            $this->create_thumbnail($target, $target350, 350, 350);
        }
    }

    function productInfo($productid)
    {
        $sql = 'select * from tbl_product where id = ?';
        $result = $this->doSelect($sql, [$productid], false);
        $colors = $result['color'];
        $colors = explode(',', $colors);
        $result['colorsInfo'] = [];
        foreach ($colors as $color) {
            $sql = 'select * from tbl_color where id =?';
            $stmt = $this->doSelect($sql, [$color]);
            array_push($result['colorsInfo'], $stmt);
        }
        return $result;
    }

    function naghd($productID)
    {
        $sql = 'select * from tbl_naghd where id_product = ? order by id desc ';
        $result = $this->doSelect($sql, [$productID]);
        return $result;
    }

    function addnaghd($productID, $data = [])
    {

        $sql = 'insert into tbl_naghd (title,description,id_product)value (?,?,?)';
        $params = [$data['title'], $data['description'], $productID];
        $this->doQuery($sql, $params);
    }

    function deletenaghd($data)
    {
        $ids = join(',' , $data);
        $sql = 'delete from tbl_naghd where id in (' . $ids . ')';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
    }

    function deleteproduct($data)
    {
        $ids = join(',',$data);
        $sql = 'delete from tbl_product where id in (' . $ids . ')';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
    }

    function getProductAttr($productID)
    {
        $productInfo = $this->productInfo($productID);
        $catID = $productInfo['cat'];
        $sql = 'select tbl_attr. * , tbl_product_attr.valueID from tbl_attr left join tbl_product_attr
                on tbl_attr.id = tbl_product_attr.idAttr and tbl_product_attr.idProduct =? 
                where idCategory =? and parent != 0';
        $result = $this->doSelect($sql, [$productID, $catID]);

        foreach ($result as $key => $attr)
        {
            $values = $this->getAttrVal($attr['id']);
            $result[$key]['values'] = $values;
        }
        return $result;
    }

    function getProductInfo($productID)
    {
        $sql = 'select * from tbl_product where id=?';
        $result = $this->doSelect($sql, [$productID], false);
        return $result;
    }

    function editAttr($data, $productID)
    {
        $ids = $data['id'];
        $X ='';
        foreach ($ids as $id) {

            $sql = ' delete from tbl_product_attr where idProduct=? and idAttr=? ';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1, $productID);
            $stmt->bindValue(2, $id);
            $stmt->execute();
            if (isset($data['X'.$id]))
            {
                $X = $data['X'.$id];
            }
            $sql = "insert into tbl_product_attr (idProduct,idAttr,valueID) VALUES (?,?,?) ";
            $params = array($productID, $id, $X);
            $this->doQuery($sql, $params);

        }


    }

    function getGallery($productID)
    {
        $sql = 'select * from tbl_gallery where idproduct = ?';
        $result = $this->doSelect($sql, [$productID]);
        return $result;
    }

    function addgallery($productID, $file)
    {
//////////FILE-CODE/////////


        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTMP = $file['tmp_name'];
        $fileType = $file['type'];
        $fileError = $file['error'];
        $targetMain = 'public/img/products/' . $productID . '/gallery';
        $UploadOK = 1;
        $newName = time();

        if ($fileType != 'image/jpg' and $fileType != 'image/jpeg') {
            $UploadOK = 0;
        }
        if ($fileSize > 5000000) {
            $UploadOK = 0;
        }

        if ($UploadOK == 1) {

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain .'/large/'. $newName . '.' . $ext;
            $target_small = $targetMain .'/small/'. $newName . '.' . $ext;
            move_uploaded_file($fileTMP, $target);
            $this->create_thumbnail($target, $target_small, 115, 115);

            $sql = 'insert into tbl_gallery (idproduct , img) values (?,?)';
            $stmt = self::$conn->prepare($sql);
            $stmt->bindValue(1 , $productID);
            $stmt->bindValue(2 , $newName.'.'.$ext);
            $stmt->execute();
        }

    }
    function deleteGallery($ids , $productID)
    {
        foreach ($ids as $id)
        {
            $sql = 'select * from tbl_gallery where id = ? ';
            $result = $this->doSelect($sql,[$id] , false);
            $filename = $result['img'];

            $dir = 'public/img/products/'.$productID.'/gallery/';

            $small_dir =  $dir.'small/'.$filename;
            $large_dir =  $dir.'large/'.$filename;

            unlink($small_dir);
            unlink($large_dir);

        }
        $ids = join(',' , $ids);
        $sql = 'delete from tbl_gallery where id in ('.$ids.')';
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
    }
    function getAttrVal($attrID)
    {
        $sql =  'select * from tbl_attr_val where attrID=?';
        $values = $this->doSelect($sql , [$attrID]);
        return $values;

    }
}