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
        $data=array();
        //echo $this->db->last_query()
        $this->load->helper('request');
        if($this->input->post('send')){
             $_fields = array('name','info','sort','sid','brand');
             $data=$this->input->post(NULL,TRUE);
             $_adddata=filter($data,$_fields);
              if(isset($_adddata['brand'])){
                  $_adddata['brand']=serialize($_adddata['brand']);
              }
             $this->Nav_model->add($_adddata)? $this->load->view('/public/succ',array('message'=>'导航新增成功','url'=>'/nav')):$this->load->view('/public/error',array('message'=>'导入新增失败','url'=>'/nav'));
             return;
        }
        if($this->input->get('id')){
           $data['OneNav']=$this->Nav_model->findOne();
           $data['AllBrand']=$this->Nav_model->findNavBrand();
        }
        $this->load->view('/admin/nav/add',$data);
    }
    public  function  delete(){
        if($this->input->get('id'))$this->Nav_model->delete()?$this->load->view('/public/succ',array('message'=>'导航删除成功','url'=>'/nav')):$this->load->view('/public/error',array('message'=>'导航删除失败','url'=>'/nav'));
    }
    //排序
    public function  sort(){
       // if (isset($_POST['send'])) $this->_model->sort()?$this->_redirect->succ(Tool::getPrevPage()):$this->_redirect->error('排序失败！');
       if ($this->input->post('send')) $this->Nav_model->sort()?redirect('/nav'):$this->load->view('/public/error',array('message'=>'排序失败','url'=>'/nav'));
    }
    public function  update(){




    }

}