<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
        	parent::__construct();
            $this->load->model('User_model','user');
        }

	public function index()
	{
		if($this->session->userdata('username'))
				redirect('c=main');
		$this->load->view('login');
	}

	public function out()
	{
		$this->session->sess_destroy();
		redirect('c=login');
	}

	public function my_self()
	{
        if( ! $this->session->userdata('username'))
                redirect('c=login');
		$this->form_validation->set_rules('pass_word', '密码', 'required|min_length[5]|max_length[20]');
		$id = $this->session->userdata('userid');
		$da['pass_word']	=	$this->input->post('pass_word');
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('my_self');
        }
        else
        {
        	$m = $this->user->update_data($da,$id);
        	if($m)
        	{
				redirect('c=main');
        		//$this->load->view('login');
        	}
        	else
        	{
        		$this->load->view('my_self');
        	}
           
        }
	}

	public function signin()
	{
		$this->form_validation->set_rules('user_name', '用户名','required|min_length[2]|max_length[12]');
		$this->form_validation->set_rules('pass_word', '密码', 'required|min_length[5]|max_length[20]');
		$da['user_name']	=	$this->input->post('user_name');
		$da['pass_word']	=	$this->input->post('pass_word');
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
        	$m = $this->user->find_data($da);
        	if(isset($m['id']) && $m['id']>0)
        	{
        		$session = array(
							    'username'  => $da['user_name'],
							    'userid'	=> $m['id'],
							    'level' 	=> $m['level']
							);
				$this->session->set_userdata($session);
				redirect('c=main');
        		//$this->load->view('login');
        	}
        	else
        	{
        		$this->load->view('login');
        	}
           
        }
	}

	public function register()
	{
		$data['default_set'] = $this->config->item('default_set_register');
		$this->form_validation->set_rules('user_name', '用户名','required|min_length[2]|max_length[12]');
		$this->form_validation->set_rules('pass_word', '密码', 'required|min_length[5]|max_length[20]');
		$this->form_validation->set_rules('level', '权限', 'required|numeric');
		$da['user_name']	=	$this->input->post('user_name');
		$da['pass_word']	=	$this->input->post('pass_word');
		$da['level']	 	=	$this->input->post('level');
		$da['create_time']	=	time();
		$data['user_can'] = '';
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('register',$data);
        }
        else
        {
        	$m = $this->user->insert_data($da);
        	if($m>0)
        	{
        		$session = array(
							    'username'  => $da['user_name'],
							    'userid'	=> $m,
							    'level' 	=> $da['level']
							);
				$this->session->set_userdata($session);
				redirect('c=main');
        		//$this->load->view('login');
        	}
        	elseif($m == 'ERROR')
        	{
        		$data['user_can'] = '用户已经存在';
        		$this->load->view('register',$data);
        	}
        	else
        	{
        		$this->load->view('register',$data);
        	}
           
        }
	}
}
