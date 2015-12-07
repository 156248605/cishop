<?php
class Nav_model extends CI_Model{
    public  function  __construct()
    {
        $this->load->database();
    }
    public function   findAll($per_page='',$uri='',$sid){
        $this->db->select('*');
        $this->db->limit($per_page,$uri);
        $this->db->where('sid',$sid);
        $this->db->order_by('sort');
        $query=$this->db->get('nav');
        return $query->result_array();
    }
    public function  findOne()
    {
        $query='';
        if ($this->input->get('sid')) {
            $this->db->select('id,name,info');
            $this->db->where('id', $this->input->get('sid'));
            $this->db->limit('1');
            $query = $this->db->get('nav');
        }
        if($this->input->get('id')){
            $query=$this->db->select('id,name')->from('nav')->where('id',$this->input->get('id'))->get();
        }
         return $query->result_array();
    }
   public function add($_adddata=array()){
       return $this->db->insert('nav',$_adddata);

    }
   public function  delete(){
       return $this->db->delete('nav', array('id' => $this->input->get('id')));
   }
    public function  update(){

    }
    public function  sort(){
      foreach ($this->input->post('sort',TRUE) as $_key=>$_value) {
            if (!is_numeric($_value)) continue;
            $data=array('sort'=>$_value);
            $this->db->where('id',$_key);
            $this->db->update('nav',$data);
        }
        return true;
    }
    public function findFrontTenNav(){
        $query=$this->db->select('id,name')->from('nav')->limit('10')->where('sid','0')->order_by('sort','ASC')->get();
        return $query->result_array();
    }
    public function  findFrontNav(){

       /* $_where = array("id='{$this->_R['id']}'");
        if(!$this->_check->oneCheck($this,$_where))$this->_check->error('./');
        //$_childNav = $_resultNav=array();
        $_allNav=parent::select(array('id','name','sid'));
        return Tree::getInstance()->getTree($_allNav,$this->_R['id']);*/
        $_allNav=$this->db->select('id,name,sid')->get('nav')->result_array();
        return Tree::getInstance()->getTree($_allNav,$this->input->get('id'));
    }



}