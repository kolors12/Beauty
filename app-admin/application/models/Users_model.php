<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	public  function insert_user($data)
	{
		$this->db->insert('admin', $data);
		return true;
	}
	public function get_users()
	{
		$this->db->order_by('admin_id', 'Desc');
		$query_result=$this->db->get('admin');
		$result = $query_result->result_array();
		return $result;
	}
	public function get_city()
	{
		$this->db->order_by('city_id', 'Desc');
		$query_result=$this->db->get('cities');
		$result = $query_result->result_array();
		return $result;
	}
	public function get_category()
	{
		$this->db->order_by('id', 'Desc');
		$query_result=$this->db->get('category');
		$result = $query_result->result_array();
		return $result;
	}
	public function delete_user($id)
	{
		$this->db->where('admin_id',$id);
		$query=$this->db->delete('admin');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function user_status($id,$value)
	{
		
		$this->db->where(array('admin_id' =>$id))->set(array('user_status' =>(int)$value))->update('admin');
		return true;
	}
	public function edit_user($id)
	{
		$query=$this->db->where(array('admin_id' =>$id))->get('admin');
		$result = $query->result_array();
		return $result;
	}
	public function update_user($id,$data)
	{
		$this->db->where(array('admin_id' =>$id))->set($data)->update('admin');
		return true;
	}

	
	
}