<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller {

	public function __construct()
        {
        	parent::__construct();
            $this->load->model('Menu_model','menu');
            if( ! $this->session->userdata('username'))
            	redirect('c=login');
        }

	public function index()
	{
        $data['left'] = $this->list_class();
		$data['rt_array'] = $this->menu->select();
		$this->load->view('class_add',$data);
	}

    public function del()
    {
        $id = $this->input->post('id');
        if($this->menu->edit(intval($id)))
            echo "1";
        else
            echo "0";
    }

	public function add()
	{
        $data['left'] = $this->list_class();
        $data['rt_array'] = $this->menu->select();
		$da['m_name']	=	$this->input->post('m_name');
        {
        	if($this->menu->add($da))
                redirect('c=menu');
            	//$this->load->view('default',$data);
            else
            	$this->load->view('class_add',$data);
        }
        $this->load->view('class_add',$data);
	}
	
}
