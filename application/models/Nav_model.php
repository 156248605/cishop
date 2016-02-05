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
        $_allNav=$query->result_array();
        foreach($_allNav as $k=>$v){
              if($v['brand']==''){
                  $_allNav[$k]['brand']='其它品牌';
              }else{
                 $tem_arr=unserialize($v['brand']);
                  $_allNav[$k]['brand']='';
                  foreach($tem_arr as $_k=>$_v){
                       $brand=$this->db->select('name')->from('brand')->where('id',$_v)->limit(1)->get()->result_array();
                      $_allNav[$k]['brand'] .=$brand[0]['name'].',';
                  }
                  $_allNav[$k]['brand']=substr($_allNav[$k]['brand'],0,-1);
              }
        }
                 return $_allNav;
    }
    public function  findOne()
    {
        $query='';
        if ($this->input->get('sid')) {
            $this->db->select('id,name,info,brand');
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
        $_allNav=$this->db->select('id,name,sid')->get('nav')->result_array();
        return Tree::getInstance()->getTree($_allNav,$this->input->get('id'));
    }
     public function findAddGoodsNav(){
         $_mainNav=$_childNav=array();
         $_allNav=$this->db->select('id,name,sid')->order_by('sort','ASC')->get('nav')->result_array();
         foreach ($_allNav as $_key=>$_value) {
            $_value['sid']==0 ? $_mainNav[] = $_value : $_childNav[] = $_value;
         }
         foreach ($_mainNav as $_key=>$_value) {
             foreach ($_childNav as $_k=>$_v) {
                 if ($_value['id'] == $_v['sid']) {
                     $_mainNav[$_key]['child'][$_v['id']]=$_v['name'];
                 }
             }
         }
           return $_mainNav;
     }
   public  function  findNavBrand(){
        $query=$this->db->select('id,name')->from('brand')->get();
        return $query->result_array();
   }

}