<?php
class adminCategory extends controller
{
    function __construct()
    {
        parent::__construct();
        $userLevel = model::UserLevel();
        if ($userLevel != 1)
        {
            header("location:".baseURL."adminlogin/index");
        }
    }

    function index()
    {
        $category = $this->model->getChildren(0);
        $data = ['category' => $category];
        $this->viewUrl('admin/category/index', $data, true , false);
    }

    function showChildren($idcategory=0)
    {
        $children = $this->model->getChildren($idcategory);
        $parent = $this->model->get_parents($idcategory);
        $categoryInfo = $this->model->categoryInfo($idcategory);
        $data = ['children' => $children, 'parent' => $parent, 'categoryInfo' => $categoryInfo];
        $this->viewUrl('admin/category/index', $data , true , false);
    }

    function addcategory($parent_id = 0 ,$edit = '')
    {
        if (isset($_POST['title']))
        {
            $title = $_POST['title'];
            $parent = $_POST['parent'];
            $add = $this->model->addcategory($title ,$parent , $edit , $parent_id);

        }
        $categoryInfo = $this->model->getCategory();
        $categoryparent = $this->model->categoryInfo($parent_id);
        $data =['categoryInfo' => $categoryInfo ,'parent_id' => $parent_id , 'edit' => $edit , 'categoryParent'=>  $categoryparent];
        $this->viewUrl('admin/category/addcategory' , $data ,true , false);
    }
    function deletecategory($parent=0)
    {
        if (isset($_POST['id']))
        {
            $ids = $_POST['id'];
            $this->model->deletecategory($ids);
            }
            header('location: '.baseURL. 'admincategory/showchildren/'.$parent);
    }
    function showattr($categoryID , $parentID=0)
    {
        $categoryInfo = $this->model->categoryInfo($categoryID);
        //$showattr = $this->model->showattr($categoryID , 0);
        $showattr = $this->model->showattr($categoryID , $parentID);
        $data=['showattr' => $showattr , 'categoryID' => $categoryID , 'categoryInfo' => $categoryInfo];
        $this->viewUrl('admin/category/showattr' , $data ,true , false);

    }
    function addattr($categoryID ,$attrID='', $edit='')
    {
        if (isset($_POST['title']))
        {
            $this->model->addattr($categoryID , $attrID , $_POST , $edit);
            header('location: http://localhost/medickala/admincategory/showattr/'.$categoryID.'');
        }
        $showattr = $this->model->showattr($categoryID , 0);
        $attrInfo = $this->model->attrInfo($attrID);
        $data=['edit' => $edit , 'attrInfo' => $attrInfo , 'showattr' => $showattr , 'categoryID' => $categoryID];
        $this->viewUrl('admin/category/addattr' , $data,true , false);
    }
    function deleteAttr($categoryID,$attrID='')
    {
        if (isset($_POST['id']))
        {
            $ids = $_POST['id'];
            $this->model->deleteAttr($ids );
        }
        header('location: http://localhost/medickala/admincategory/showattr/'.$categoryID.'/'.$attrID.'');
    }
    function attrval($ID)
    {
        if (isset($_POST['submit']))
        {
            $this->model->saveAttrVal($_POST ,$ID);
            header('location:'.baseURL.'admincategory/index');
        }
        $attrVal = $this->model->attrVal($ID);
        $attrInfo = $this->model->attrInfo($ID);
        $data = ['attrVal' => $attrVal , 'attrInfo' => $attrInfo];
        $this->viewUrl('admin/category/attrval' , $data , true , false);
    }
}