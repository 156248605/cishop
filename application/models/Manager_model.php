<?php
class Manager_model extends  CI_Model{
    public function __construct()
    {
        $this->load->database();

    }
    public  function  findAll($per_page='',$uri=''){
        $query = $this->db->get('manager',$per_page,$uri);
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
    public  function  update(array$a=array(),array $b=array(),array $c=array()){
        $_where = array("id='{$this->_R['id']}'");
        if(!$this->_check->oneCheck($this,$_where)) $this->_check->error();
        if(!$this->_check->updateCheck($this)) $this->_check->error();
        $_updateData = $this->getRequest()->filter($this->_fields);
        $_updateData['pass'] = sha1($_updateData['pass']);
        return parent::update($_where, $_updateData);
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