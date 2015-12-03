<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', '用户名', array('required','min_length[5]'),array('min_length'=>'用户名不得小于5位'));
        $this->form_validation->set_rules('password', '密码', 'required');
        $this->form_validation->set_rules('passconf', '密码确认', array('required','matches[password]'));
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }
}