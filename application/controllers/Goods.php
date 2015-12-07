<?php
class Goods extends  CI_Controller{
    public function __construct()
    {
         parent::__construct();
         $this->load->model('Goods_model');
         $this->load->helper(array('url','Request'));
    }
    public function index(){
        $this->load->view('/admin/goods/show');


    }

}