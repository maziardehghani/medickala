<?php



class product extends controller
{
    function __construct()
    {
    }

    function index($id)
    {

        $Info = $this->model->get_product_info($id);
        $colors = $this->model->get_color($id);
        $specials = $this->model->getspecial();
        $gallery = $this->model->get_gallery($id);
        $data = ['Info' => $Info, 'colors' => $colors, 'specials' => $specials, 'gallery' => $gallery];

        $this->viewUrl('product/index', $data);
    }

    function tab($id, $idCategory)
    {
        $tab_number = $_POST['number'];
        if ($tab_number == 1) {
            $intro = $this->model->naghd($id);
            $data = ['intro' => $intro];
            $this->viewUrl('product/tab1', $data, false, false);
        }
        if ($tab_number == 2) {
            $fanni = $this->model->fanni($idCategory, $id);
            $data = [$fanni];
            $this->viewUrl('product/tab2', $data, false, false);
        }
        if ($tab_number == 3) {
            $comment_param = '';
            //$comment_param = $this->model->comment_param($idCategory, $id);
            $comment = $this->model->getComment($id);
            $data = [$comment_param, $comment];
            $this->viewUrl('product/tab3', $data, false, false);
        }
        if ($tab_number == 4) {
            $data = ['id' => $id];
            $this->viewUrl('product/tab4', $data, false, false);
        }


    }

    function add_comment($id)
    {
        if (isset($_POST['name'])) {
            $email = $_POST['email'];
            if ($this->model->checklogin($email) == true) {
                $data = $_POST;
                $this->model->addComment($id, $data);
            }
        }
        header("location:" . baseURL . "product/index/" . $id);
    }

    function addtobasket($productID, $color)
    {
        $this->model->addtobasket($productID, $color);

    }

}