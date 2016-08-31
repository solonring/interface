<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct()
        {
        	parent::__construct();
            $this->load->model('User_model','user');
            if( ! $this->session->userdata('username'))
            	redirect('c=login&l='.base64_encode($_SERVER['REQUEST_URI']));
        }

	public function index()
	{
		$data['left'] = $this->list_class();
		$rt = $this->info->search('member','*');

		$new_rt = '';
		foreach ($rt as $key => $value) {
			$m_name = $this->menu->rt_name($value['parent_id'],'m_name');
			$new_rt	.=	"\"".$m_name['m_name']."\t".$value['title']."|".$value['urls'].'|'.$value['parent_id'].'|'.$value['id']."\",\t\n";
		}
		$data['info'] = $new_rt;
		$this->load->view('default',$data);
	}

	public function explain()
	{
		$this->load->view('explain');
	}

	public function get_list()
	{
		$data['left'] = $this->list_class();
		$data['user_list'] = $this->user->user_list();
		$this->load->view('list',$data);
	}

	/**
	 * /
	 * @return [type] [description]
	 */
	public function change_level()
	{
		$id = $this->input->post('id');
		$data['level'] = $this->input->post('level');
		$rt = $this->user->update_data($data,$id);
		echo $rt?'1':'0';
	}
}
