<?php
class test extends  CI_Controller{
    public function  index(){
        $this->load->view('test');
    }
    public function  uploadifty(){
        $targetFolder = '/public/uploads/'; // Relative to the root
        $timestamp=$_POST['timestamp'];
        $verifyToken = md5('unique_salt' . $_POST['timestamp']);
        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            $targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
            // Validate the file type
            $fileTypes = array('jpg','jpeg','gif','png'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);

            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo '1';
            } else {
                echo '2';
            }
        }
    }
   public function filetest(){
     // echo $_FILES["file"]["tmp_name"];
     //echo   $_SERVER['DOCUMENT_ROOT'];
      // print_r($_SERVER);
   }

}