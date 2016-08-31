<?php
/**
 * 
 * @authors solon.ring2011@gmail.com
 * @date    2015-11-13 10:37:10
 * @version $Id$
 */

class Menu_model extends CI_Model {
    
     public function __construct()
    {
        parent::__construct();
    }

    public function select()
    {
    	$query = $this->db->where(array('m_parent_id'=>0,'m_del'=>1))->get('menu');
    	return $query->result_array();
    }

    public function rt_name($m_id,$find)
    {
        $query = $this->db->select($find)->where(array('m_id'=>$m_id))->get('menu');
        return $query->row_array();
    }

    public function add($da)
    {
        return $this->db->insert('menu',$da);
    }

    public function edit($id)
    {
        $this->db->where('m_id', $id);
        $data['m_del'] = 0;
        return ($id===0)?FALSE:$this->db->update('menu', $data);
    }
}
