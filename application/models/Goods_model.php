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
   public function find_all(){
        $this->db->select('goods.id,goods.name,goods.sn,goods.brand,goods.price_sale,goods.is_up,goods.inventory,nav.name as nav_name');
        $this->db->from('goods');
        $this->db->join('nav','goods.nav=nav.id','left');
        $query=$this->db->get();
        $_allgoods=$query->result_array();
//      $_allbrands=$this->db->select('id,name')->get('brand')->result_array();
  /*    foreach ($_allgoods as $_key=>$_value) {
           if ($_value['brand'] == 0) {
               $_value['brand'] = '其他品牌';
           } else {
               $_value['brand'] = $_allbrands[$_value['brand']];
           }
       }*/
        return $_allgoods;
   }

}