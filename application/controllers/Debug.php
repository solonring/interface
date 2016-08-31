<?php
/**
 * 
 * @authors solon.ring2011@gmail.com
 * @date    2015-11-20 11:16:49
 * @version $Id$
 */

class Debug extends MY_Controller {
    
    public function __construct()
        {
        	parent::__construct();
        	$this->load->model('Info_model','info');
        }

    /**
     * 在线调试主方法
     * @return [type] [description]
     */
    
    public function index()
    {
    	$data['id'] = (int)$_GET['id'];
    	$data['urls'] = $this->config->item('go_url');
        $data['type'] = $this->config->item('type');
    	$data['param'] = $this->info->read_one($data['id']);
    	$this->load->view('debug',$data);
    }


//----------------controllers/Debug.php--------------------------------
}