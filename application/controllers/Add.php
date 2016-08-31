<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends MY_Controller {

	public function __construct()
        {
        	parent::__construct();
            $this->load->model('Menu_model','menu');
            $this->load->model('Info_model','info');
            if( ! $this->session->userdata('username'))
            	redirect('c=login');
        }

	public function index()
	{
		$data['left'] = $this->list_class();
		$data['list'] = $this->menu->select('0');
		$data['type']	=	$this->config->item('type');
		$this->load->view('add',$data);
	}

	/**
	 * 添加接口
	 */
	public function add()
	{
		$data['left'] = $this->list_class();
		$data['list'] = $this->menu->select('0');

		$this->form_validation->set_rules('title', '标题','required|min_length[2]');
		$this->form_validation->set_rules('return_info', '返回格式必须', 'required|min_length[5]');
		//show_error('测试', '200', $heading = 'An Error Was Encountered');
		
		$da['title']	=	$this->input->post('title');
		$da['method']	=	$this->input->post('method');
		$da['urls']	 	=	$this->input->post('urls');
		$da['parent_id']=	$this->input->post('parent_id');
		$da['return_info'] = $this->input->post('return_info');
		$da['create_time']	=	time();
		$da['update_time']	=	time();
		$da['user_name']	=	$this->session->userdata('username');
		$da['user_id']		=	$this->session->userdata('userid');
		$da['param_key']	=	json_encode($_POST['param_key']);
		$da['param_value']	=	json_encode($_POST['param_value']);
		$da['param_type']	=	json_encode($_POST['param_type']);
		$da['param_is']	=	json_encode($_POST['param_is']);
		$da['param_default']	=	json_encode($_POST['param_default']);
		$da['type']	=	$this->input->post('type');
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('add',$data);
        }
        else
        {
        	$rt = $this->info->add($da);
        	if($rt)
        		echo "<script>alert('操作成功');window.location.href='".site_url('c=add')."'</script>";
        	else
        		echo "<script>alert('操作错误');window.location.href='".site_url('c=add&m=add')."'</script>";
        }
	}

	public function edit()
	{

		$id = $_GET['id'];
		$class_id = $_GET['cid'];
		if(intval($id) === 0 || intval($class_id) === 0)
		{
			echo "<script>alert('参数错误');window.history.back();</script>";
			exit();
		}
		$data['info'] = $this->info->read_one($id);
		$data['type']	=	$this->config->item('type');
		$data['left'] = $this->list_class();
		$data['list'] = $this->menu->select('0');
		$da['title']	=	$this->input->post('title');
		$da['method']	=	$this->input->post('method');
		$da['urls']	 	=	$this->input->post('urls');
		$da['parent_id']=	$this->input->post('parent_id');
		$da['return_info'] = $this->input->post('return_info');
		//$da['create_time']	=	time();
		$da['update_time']	=	time();
		$da['user_name']	=	$this->session->userdata('username');
		$da['user_id']		=	$this->session->userdata('userid');
		$da['param_key']	=	isset($_POST['param_key'])?json_encode($_POST['param_key']):'';
		$da['param_value']	=	isset($_POST['param_value'])?json_encode($_POST['param_value']):'';
		$da['param_type']	=	isset($_POST['param_type'])?json_encode($_POST['param_type']):'';
		$da['param_is']	=	isset($_POST['param_is'])?json_encode($_POST['param_is']):'';
		$da['param_default']	=	isset($_POST['param_default'])?json_encode($_POST['param_default']):'';
		$da['type']	=	$this->input->post('type');
		$this->form_validation->set_rules('title', '标题','required|min_length[2]');
		$this->form_validation->set_rules('return_info', '返回格式必须', 'required|min_length[5]');
		if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('edit',$data);
        }
        else
        {
        	$rt = $this->info->edit($da,$id);
        	if($rt)
        		echo "<script>alert('操作成功');window.location.href='".site_url('c=api&m=index&cid='.$class_id)."'</script>";
        	else
        		echo "<script>alert('操作错误');window.location.href='".site_url('c=add&m=edit&id='.$id)."'</script>";
        }
	}
}
