<?php
class Nav extends  CI_Controller{
     public function  __construct()
     {
         parent::__construct();
         $this->load->model('Nav_model');
         $this->load->helpers(array('url','form'));
     }
     public function  index(){
         $sid='0';
         $this->load->library('pagination');
         $this->load->helpers('request');
         if($this->input->get('sid')){
            $sid=$this->input->get('sid');
            $data['OneNav']=$this->Nav_model->findOne();
         }
         $config=page_config($this->db->from('nav')->where('sid',$sid)->count_all_results(),'/nav/index');
         $this->pagination->initialize($config);
         $data['AllNav']=$this->Nav_model->findAll($config['per_page'],$this->uri->segment(3),$sid);
         $this->load->view('admin/nav/show',$data);
     }
    public function  add(){
        $this->load->library('form_validation');




    }



}