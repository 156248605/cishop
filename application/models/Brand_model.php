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

}