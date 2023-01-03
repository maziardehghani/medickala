<?php
class panel extends controller
{
    public $checkLogin = '';
    function __construct()
    {
        model::session_init();
        $this->checkLogin = model::get_session('userID');
        if ( $this->checkLogin ==false)
        {
            header('location:'.baseURL.'/login');
        }
    }

    function index()
    {

        $userInfo = $this->model->userInfo();
        $userState = $this->model->userState();
        $usercomment = $this->model->userComments();
        $myOrders =  $this->model->getOrder();
        $myMessage = $this->model->getMessage();
        $myComments = $this->model->getComments();
        $myCopen = $this->model->getCopen();
        $data = ['myCopen' => $myCopen , 'myComments'=>$myComments , 'myMessage'=>$myMessage , 'myOrder'=>$myOrders , 'userInfo' => $userInfo , 'userState' => $userState , 'userComment' => $usercomment];
        $this->viewUrl('panel/index', $data,true , false);
    }
    function deleteComment($id)
    {
        $this->model->deleteComment($id);
    }
    function saveCode()
    {
        $code = $_POST['code'];
        if ($this->model->checkcode($code) == true)
        {
            $this->model->saveCode($code);
            echo "کد کوپن ثبت شد ";
        }else
        {
            echo "کد کوپن ثبت شده اشتباه است ";
        }


    }
    function profile()
    {
        $userInfo = $this->model->userInfo();
        $data = ['userInfo' => $userInfo];
        $this->viewUrl('panel/profile',$data);
    }
    function editProfile()
    {
        $data = $_POST;
        $this->model->editProfile($data);
        header('location: '.baseURL.'panel/index');

    }
    function changePassword()
    {
        $Error = '';

        if (isset($_POST['pass_old']))
        {
            $data = $_POST;
            $this->model->changePass($data);
        }
        $this->viewUrl('panel/changePassword');
    }
}