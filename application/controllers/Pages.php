<?php
class Pages extends  CI_Controller{
    public  function  view($page = 'home'){
       if(!file_exists(APPPATH.'/views/pages/'.$page.'.php')){
            echo APPPATH;
        }
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer', $data);
    }






}
