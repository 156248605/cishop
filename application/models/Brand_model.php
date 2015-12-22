<?php
class Brand_model extends  CI_Model
{
    public function __construct()
    {
        $this->load->database();

    }

    public function  findAll($per_page='',$uri='') {
        $this->db->select('*');
        $this->db->limit($per_page,$uri);
        $query = $this->db->get('brand');
        return $query->result_array();
    }
    public function add($_adddata=array()){
        return $this->db->insert('brand',$_adddata);
    }
    public function delete(){
        return $this->db->delete('brand', array('id' => $this->input->get('id')));
    }
    public function  findGoodsBrand(){
        $_oneBrand = $this->db->select('brand')->from('nav')->where('id',$this->input->post('id'))->get()->result_array();
        if(empty($_oneBrand[0]['brand'])){
            return '-1:其他品牌';
        }
       //$_brandid=implode(',',unserialize($_oneBrand[0]['brand']));
        $_brandid=unserialize($_oneBrand[0]['brand']);
        $_brand=$this->db->select('id,name')->from('brand')->where_in('id',$_brandid)->get()->result_array();
        $_brandStr = '';
         foreach($_brand as $_key=>$_value){
             $_brandStr .= $_value['id'].':'.$_value['name'].':';
         }
        $_brandStr = substr($_brandStr, 0, -1);
         return $_brandStr;

    }
}