<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * solon.ring2011@gmail.com
 */
class MY_Controller extends CI_Controller {


	public function __construct()
        {
        	parent::__construct();
            $this->load->model('Menu_model','menu');
            $this->load->model('Info_model','info');
            if( ! $this->session->userdata('username'))
            	redirect('login');
        }

	public function list_class()
	{
		$new_array = array();
		$sele = $this->menu->select();
		foreach ($sele as $key => $value) {
			$new_array[$key]['m_id']	=	$value['m_id'];
			$new_array[$key]['m_name']	=	$value['m_name'];
			$new_array[$key]['m_parent_id']	=	$value['m_parent_id'];
			$new_array[$key]['get_list_info_title']	=	$this->info->select($value['m_id'],'title');
		}
		return $new_array;
	}

}
