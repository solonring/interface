<?php
/**
 * 
 * @authors solon.ring2011@gmail.com
 * @date    2015-11-13 10:37:10
 * @version $Id$
 */

class Info_model extends CI_Model {
    
     public function __construct()
    {
        parent::__construct();
    }

    public function add($data)
    {
        $this->db->insert('info', $data);
        return $this->db->insert_id();
    }

    public function edit($data,$id)
    {
        $this->db->where('id', $id);
        return $this->db->update('info', $data);
    }

    public function select($parent_id,$find='*')
    {
        $query = $this->db->select($find)->where('parent_id',$parent_id)->get('info');
        return $query->result_array()?$query->result_array():array();
    }

    public function search($keyword,$find='*')
    {
        $where = " title like '%".$keyword."%' OR urls like '%".$keyword."%'";
        $query = $this->db->select($find)->where($where)->get('info');
        return $query->result_array()?$query->result_array():array();
    }

    public function read_one($id)
    {
        $query = $this->db->where('id',$id)->get('info');
        return $query->row_array()?$query->row_array():array();
    }

    /**
     * /
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function del($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('info');
    }
}
