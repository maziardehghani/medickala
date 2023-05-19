<?php


error_reporting(E_ERROR | E_WARNING | E_PARSE);

class adminproduct extends controller
{
    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        $product = $this->model->get_product();
        $data = ['product' => $product];
        $this->viewUrl('admin/product/index', $data, true, false);
    }

    function addproduct($product_id = '', $edit = '')
    {

        if (isset($_POST['title'])) {

            $file = $_FILES['image'];
            $this->model->addproduct($_POST, $product_id, $edit, $file);
            header('location: http://localhost/medickala/adminproduct/index/');
        }

        $category = $this->model->getcategory();
        $color = $this->model->getcolors();
        $productInfo = $this->model->productInfo($product_id);

        $data = ['category' => $category, 'color' => $color, 'productInfo' => $productInfo, 'edit' => $edit];
        $this->viewUrl('admin/product/addproduct', $data, true, false);
    }

    function naghd($productID = 0)
    {
        $naghd = $this->model->naghd($productID);
        $productInfo = $this->model->productInfo($productID);
        $data = ['naghd' => $naghd, 'productInfo' => $productInfo];
        $this->viewUrl('admin/product/naghd', $data, true, false);
    }

    function addnaghd($productID)
    {
        if (isset($_POST['title'])) {
            $this->model->addnaghd($productID, $_POST);
            header('location: http://localhost/medickala/adminproduct/naghd/' . $productID . '');
        }

        $productInfo = $this->model->productInfo($productID);
        $data = ['productInfo' => $productInfo];
        $this->viewUrl('admin/product/addnaghd', $data, true, false);
    }

    function deletenaghd($productID)
    {
        if (isset($_POST['id'])) {
            $this->model->deletenaghd($_POST['id']);
            header('location:http://localhost/medickala/adminproduct/naghd/' . $productID . '');
        }

    }

    function deleteproduct()
    {
        if (isset($_POST['id'])) {
            $this->model->deleteproduct($_POST['id']);
            header('location:http://localhost/medickala/adminproduct/index');
        }
    }

    function attr($productID)
    {
        if (isset($_POST['submiting'])) {
            $this->model->editAttr($_POST, $productID);
            header('location:' . baseURL . 'adminproduct/attr/' . $productID);
        }
        $attrproduct = $this->model->getProductAttr($productID);
        $productInfo = $this->model->getProductInfo($productID);
        $data = ['attrproduct' => $attrproduct, 'productInfo' => $productInfo];
        $this->viewUrl('admin/product/attr', $data, true, false);
    }

    function gallery($productID)
    {
        if (isset($_FILES['image'])) {
            $this->model->addgallery($productID, $_FILES['image']);
        }
        $gallery = $this->model->getGallery($productID);
        $productInfo = $this->model->productInfo($productID);
        $data = ['gallery' => $gallery, 'productInfo' => $productInfo];
        $this->viewUrl('admin/product/gallery', $data, true, false);

    }

    function deletegallery($productID)
    {
        $this->model->deleteGallery($_POST['id'], $productID);
        header('location: http://localhost/medickala/adminproduct/gallery/' . $productID . '');

    }


}