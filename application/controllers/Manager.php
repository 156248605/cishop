<?php
class Manager extends  CI_Controller{
    public  function __construct()
      {
          //echo $this->db->last_query(); 打印最后一条执行的sql
          parent::__construct();
          $this->load->model('Manager_model');
          $this->load->helper(array('url','Request'));
      }
      public function index(){
          $this->load->library('pagination');
          $config=page_config($this->db->count_all('manager'),'/manager/index');
          $this->pagination->initialize($config);
          $data['Allmanager']=$this->Manager_model->findAll($config['per_page'],$this->uri->segment(3));
          $this->load->view('/admin/manager/manager',$data);
      }
     public  function  add(){
        if($this->input->post('send')){
            //定义数据库字段
            $_fields = array('id','user','pass','level','login_count','last_ip','last_time','reg_time');
            //获取用户提交的数据
            $data=$this->input->post(NULL,TRUE);
            $_adddata=filter($data,$_fields);
            $this->Manager_model->add($_adddata)?$this->load->view('/public/succ',array('message'=>'管理员新增成功','url'=>'/manager')):$this->load->view('/public/error',array('message'=>'管理员新增失败','url'=>'/manager'));
            return;
        }
            $this->load->model('Level_model');
            $data['AllLevel'] = $this->Level_model->findAll();
            $this->load->view('/admin/manager/add', $data);

    }
     public  function  delete(){
         if($this->input->get('id'))$this->Manager_model->delete()?$this->load->view('/public/succ',array('message'=>'管理员删除成功','url'=>'/manager')):$this->load->view('/public/error',array('message'=>'管理员删除失败','url'=>'/manager'));
     }
     public  function  update(){
         $this->load->helper('form');
         $this->load->model('Level_model');
         $data['AllLevel'] = $this->Level_model->findAll();
         $data['OneManager']=$this->Manager_model->findone();
         if ($this->input->post('send')) {
             //定义数据库字段
             $_fields = array('pass','level');
             $_id=$this->input->post('id');
             $this->load->library('form_validation');
             $this->form_validation->set_rules('pass', '密码', 'required');
             $this->form_validation->set_rules('notpass', '确认密码', array('required','matches[pass]'));
             if($this->form_validation->run()==FALSE) {
                 $this->load->view('/admin/manager/update', $data);
                 return;
             }
             $_updatedata=filter($this->input->post(NULL,TRUE),$_fields);
             $this->Manager_model->update($_updatedata,$_id)?$this->load->view('/public/succ',array('message'=>'更新成功','url'=>'/manager')):$this->load->view('/public/error',array('message'=>'更新失败','url'=>'/manager'));
         }else {
             $this->load->view('/admin/manager/update', $data);
         }
     }



}