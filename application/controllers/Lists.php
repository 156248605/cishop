<?php
 class Lists extends  CI_Controller{
    public function __construct()
    {
     parent::__construct();
     $this->load->model('Nav_model');
    }
    public function  index(){
     $this->load->library('Tree');
    /* $this->_tpl->assign('FrontNav', $this->_nav->findFrontNav());
     $this->_tpl->assign('FrontTenNav', $this->_nav->findFrontTenNav());
     $this->_tpl->display(SMARTY_FRONT.'public/list.html');*/
     $data['FrontNav']=$this->Nav_model->findFrontNav();
     $data['FrontTenNav']=$this->Nav_model->findFrontTenNav();
     $this->load->view('/default/public/list.php',$data);
    }

 }