<?php
class model_adminslider extends model
{
    function __construct()
    {
        parent::__construct();
    }
    function getadminsliders()
    {
        $sql = 'select * from tbl_slider';
        $result = $this->doSelect($sql);
        return $result;
    }
    function saveSlider($post , $files)
    {


        $title = $post['title'];
        $link = $post['link'];
        $files = $files['image'];
        $fileName = $files['name'];
        $fileSize = $files['size'];
        $fileTMP = $files['tmp_name'];
        $fileType = $files['type'];
        $fileError = $files['error'];
        $targetMain = 'public/img/sliders/';
        $UploadOK = 1;
        $newName = time();

        if ($fileType != "image/jpg" and $fileType != "image/jpeg" and $fileType != "image/png") {
            $UploadOK = 0;
        }
        if ($fileSize > 5000000) {
            $UploadOK = 0;
        }

        if ($UploadOK == 1) {
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $target = $targetMain . $newName . '.' . $ext;
            move_uploaded_file($fileTMP, $target);

            $sql = 'insert into tbl_slider (title , link , img) values (?,?,?)';
            $this->doQuery($sql , [$title , $link ,$target]);
        }

    }
    function deleteSlider($IDs)
    {
        $IDs = join(',' , $IDs);
        $sql = 'delete from tbl_slider where id in ('.$IDs.')';
        $this->doQuery($sql);
    }

}