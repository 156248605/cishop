<?php
class Index extends  CI_Controller{
    public function  __construct()
    {
        parent::__construct();
        $this->load->model('Nav_model');
    }
   public function index() {
     $data['FrontTenNav']=$this->Nav_model->findFrontTenNav();
     $this->load->view('/default/public/index',$data);
   }

}