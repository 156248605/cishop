<?php
class Goods extends  CI_Controller{
    public function __construct()
    {
         parent::__construct();
         $this->load->model('Nav_model');
         $this->load->model('Brand_model');
         $this->load->model('Goods_model');
         $this->load->helper(array('url','Request','form'));
    }
    public function index(){
        $this->load->library('pagination');
        $data['AllGoods']=$this->Goods_model->find_all();
        $this->load->view('/admin/goods/show',$data);

      /*  $config=page_config($this->db->count_all('manager'),'/manager/index');
        $this->pagination->initialize($config);
        $data['Allmanager']=$this->Manager_model->findAll($config['per_page'],$this->uri->segment(3));
        $this->load->view('/admin/manager/manager',$data);*/




    }
    public function  add(){
        if(isset($_POST['send'])){
            $_fields = array('nav','brand','name','sn','price_sale','price_market','price_cost','unit','weight','thumbnail','content','is_up','is_freight','inventory','warn_inventory');
            $data=$this->input->post(NULL,TRUE);
            $_adddata=filter($data,$_fields);
            $this->Goods_model->add($_adddata)? $this->load->view('/public/succ',array('message'=>'商品添加成功','url'=>'/nav')):$this->load->view('/public/error',array('message'=>'商品添加失败','url'=>'/nav'));
            return;
        }


        $data['addNav']=$this->Nav_model->findAddGoodsNav();
        $this->load->view('/admin/goods/add',$data);
    }
    public function  getBrand(){
      echo $this->Brand_model->findGoodsBrand();
    }
}