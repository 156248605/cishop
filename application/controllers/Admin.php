<?php
/**
 * Created by piaomiao.
 * User: zhonglu
 * Date: 2015/11/30
 * Time: 10:25
 */
class Admin extends  CI_Controller{
   public  function  __construct()
   {
       parent::__construct();
       $this->load->helper('url');
   }
   public function  index(){
    $this->load->view('admin/public/admin');
   }
   public function  main(){
   $this->load->view('admin/public/main');
   }

}
