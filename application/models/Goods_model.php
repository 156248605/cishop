<?php
class Goods_model extends  CI_Model{
    public function __construct()
    {
        $this->load->database();
    }
   public function add($_adddata=array()){
       $_adddata['date']=date('Y-m-d H:i:s');
       return $this->db->insert('goods',$_adddata);
   }
   public function is_one($sn){
        $query=$this->db->select('id')->from('goods')->where('sn',$sn)->get();
        if(empty($query)) return 1;
        return 0;
   }

}