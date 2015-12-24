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
                rename($targetFile,$targetPath.$timestamp.'.'.$fileParts['extension']);
                echo $targetFolder.$timestamp.'.'.$fileParts['extension'];
            } else {
                echo '2';
            }
        }
    }
   public function ckeup(){
       $targetFolder = '/public/uploads';
       $targetPath=$_SERVER['DOCUMENT_ROOT'].$targetFolder;
       $targetFile=$targetPath.'/'.$_FILES['upload']['name'];
       $fileTypes = array('jpg','jpeg','gif','png');
       $uploadFilename = $_FILES['upload']['name'];
       $extensions = pathInfo($uploadFilename,PATHINFO_EXTENSION);
       if(in_array($extensions,$fileTypes)){
           move_uploaded_file($_FILES['upload']['tmp_name'],$targetFile);
           $previewname=$targetFile;
           $callback = $_REQUEST["CKEditorFuncNum"];
           echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($callback,'".$previewname."','');</script>";
           // Array ( [upload] => Array ( [name] => 123.png [type] => image/png [tmp_name] => F:\uploads\php41FF.tmp [error] => 0 [size] => 11857 ) )
      }
   }

}