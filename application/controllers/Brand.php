<?php
class Brand extends  CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Brand_model');
        $this->load->helper(array('url','Request'));
    }


    public function  index(){
        $this->load->library('pagination');
        $config=page_config($this->db->count_all('brand'),'/brand/index');
        $this->pagination->initialize($config);
        $data['AllBrand']=$this->Brand_model->findAll($config['per_page'],$this->uri->segment(3));
        $this->load->view('/admin/brand/show',$data);
    }
    public function  add(){
         if($this->input->post('send')){
             $_fields = array('id','name','url','info','sid','reg_time');
             $data=$this->input->post(NULL,TRUE);
             $_adddata=filter($data,$_fields);
             $this->Brand_model->add($_adddata)? $this->load->view('/public/succ',array('message'=>'品牌新增成功','url'=>'/brand')):$this->load->view('/public/error',array('message'=>'品牌新增失败','url'=>'/brand'));
             return;
         }
        $this->load->view('/admin/brand/add');
    }
    public function delete(){
        if($this->input->get('id'))$this->Brand_model->delete()?$this->load->view('/public/succ',array('message'=>'品牌删除成功','url'=>'/brand')):$this->load->view('/public/error',array('message'=>'品牌删除失败','url'=>'/brand'));
    }




}