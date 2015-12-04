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
    public function  findOne(){
        if($this->input->get('sid')){
            $this->db->select('id,name,info');
            $this->db->where('id',$this->input->get('sid'));
            $this->db->limit('1');
            $query=$this->db->get('nav');
            return $query->result_array();
        }



    }

}