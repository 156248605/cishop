<?php
class Manager_model extends  CI_Model{
    public function __construct()
    {
        $this->load->database();

    }
    public  function  findAll($per_page='',$uri=''){
        $this->db->select('manager.id,manager.user,manager.level,manager.login_count,manager.last_ip,manager.last_time,level.level_name');
        $this->db->from('manager');
        $this->db->join('level','manager.level=level.id','left');
        $this->db->limit($per_page,$uri);
        $this->db->order_by('manager.reg_time','DESC');
        $query= $this->db->get();
        return $query->result_array();
    }
    public  function  findOne(){
        $this->db->where('id',$this->input->get_post('id'));
        $query=$this->db->get('manager');
         return $query->result_array();
    }
    public function  findLogin(){
        $this->_tables = array(DB_FREFIX.'manager a',DB_FREFIX.'level b');
        return parent::select(array('a.user','b.level_name'),
            array('where'=>array('a.level=b.id',"user='{$this->_R['user']}'"),'limit'=>'1'));
    }
    public function  countLogin(){
        $_where = array("user='{$this->_R['user']}'");
        $_updateData['login_count']=array('login_count+1');
        $_updateData['last_ip']=Tool::getIP();
        $_updateData['last_time']=Tool::getDate();
        parent::update($_where,$_updateData);

    }
    public function total($b=0){
        return parent::total();
    }
    public  function  add(array $_adddata){
        $_adddata['pass']=sha1($_adddata['pass']);
        $_adddata['last_ip']=$this->input->ip_address();
        $_adddata['reg_time'] =date('Y-m-d H:i:s');
        return $this->db->insert('manager',$_adddata);
    }
    public  function  update(array $_updatedata,$_where){
        $_updatedata['pass']=sha1($_updatedata['pass']);
        $this->db->where('id',$_where);
        return $this->db->update('manager',$_updatedata);
    }
    public  function  delete(){
       return $this->db->delete('manager', array('id' => $this->input->get('id')));
    }
    public  function  login(){
        $_where = array("user='{$this->_R['user']}'","pass='".sha1($this->_R['pass'])."'");
        if(!$this->_check->loginCheck($this,$_where)) {
            $this->_check->error();
        }
        return true;
    }
    //ajax
    public  function  isUser(){
        $_where = array("user='{$this->_R['user']}'");
        $this->_check->ajax($this,$_where);
    }

}