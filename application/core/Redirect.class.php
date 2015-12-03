<?php
/**
 * Created by PhpStorm.
 * User: zhonglu
 * Date: 2015/10/14
 * Time: 10:34
 */
class Redirect {
    //用于存放实例化的对象
    static private $_instance = null;
    //公共静态方法获取实例化的对象
    static public function getInstance(&$_controll=null) {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
            self::$_instance->_controll = $_controll;
        }
        return self::$_instance;
    }
    //私有克隆
    private function __clone() {}
    //私有构造
    private function __construct() {}
    //成功跳转
    public function succ($_url, $_info='') {
        if(!empty($_info)) {
            $data['message']=$_info;
            $data['url']=$_url;
            $this->_controll->view('public/succ.html');
        }else {
            header('Location:'.$_url);
        }
        exit();
    }
    //失败返回
    public function error($_info) {
        $this->_controll->assign('message', $_info);
        $this->_controll->assign('prev', Tool::getPrevPage());
        $this->_controll->display(SMARTY_ADMIN.'public/error.html');
        exit();
    }
}