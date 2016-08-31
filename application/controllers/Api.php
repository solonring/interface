<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
        {
        	parent::__construct();
            $this->load->model('Info_model','info');
            if( ! $this->session->userdata('username'))
            	redirect('c=login&l='.base64_encode($_SERVER['REQUEST_URI']));
        }

    /**
     * /
     * @return [type] [description]
     */
	public function index()
	{
		$id = intval($_GET['cid']);
		$data['left'] = $this->info->select($id);
		$this->load->view('info',$data);
	}

	/**
	 * 删除
	 * @return [type] [description]
	 */
	public function del()
	{
		$id = $this->input->post('id');
		if($this->info->del($id))
			echo '1';
		else
			echo "0";
	}
}
