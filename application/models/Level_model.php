<?php
class Level_model extends  CI_Model{
    public function __construct()
    {
        $this->load->database();

    }
     public function  findAll(){
         $this->db->select('id,level_name');
         $query=$this->db->get('level');
         return $query->result_array();
     }
}