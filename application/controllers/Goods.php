<?php
class Goods extends  CI_Controller{
    public function __construct()
    {
         parent::__construct();
         $this->load->model('Nav_model');
         $this->load->model('Brand_model');
         $this->load->helper(array('url','Request'));
    }
    public function index(){
        $this->load->view('/admin/goods/show');
    }
    public function  add(){
        $data['addNav']=$this->Nav_model->findAddGoodsNav();
        $this->load->view('/admin/goods/add',$data);
    }
    public function  getBrand(){
      echo $this->Brand_model->findGoodsBrand();
    }
}