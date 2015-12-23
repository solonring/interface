<?php
/**
 * 
 * @authors solon.ring2011@gmail.com
 * @date    2015-11-13 10:37:10
 * @version $Id$
 */

class User_model extends CI_Model {
    
     public function __construct()
    {
        parent::__construct();
    }

    public function insert_data($data)
    {
    	$get_one = $this->db->where('user_name',''.$data['user_name'].'')->get('user',0,1);
    	$rt = $get_one->result_array();
    	if(count($rt)>0)
			return 'ERROR';
		else
        	$this->db->insert('user', $data);
        return $this->db->insert_id();
    }


    public function user_list()
    {
        $rt = $this->db->get('user');
        return $rt->result_array()?$rt->result_array():array();
    }

    public function update_data($data,$id)
    {
        $this->db->where('id',$id);
        return $this->db->update('user',$data);
    }

    public function find_data($data)
    {
    	$get_one = $this->db->where(array('user_name'=>''.$data['user_name'].'','pass_word'=>''.$data['pass_word'].''))->get('user');
    	return $get_one->row_array()?$get_one->row_array():array();
    }
}
