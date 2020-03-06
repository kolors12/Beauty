<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
	
	public  function insert_category($data)
	{
		$this->db->insert('category', $data);
		return true;
	}
	public function get_drop_type()
	{
		$this->db->order_by('id', 'Desc');
		$query_result=$this->db->get('brands');
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
	public function delete_category($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->delete('category');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function category_status($id,$value)
	{
		
		$this->db->where(array('id' =>$id))->set(array('status' =>(int)$value))->update('category');
		return true;
	}
	public function edit_brand($id)
	{
		$query=$this->db->where(array('id' =>$id))->get('brands');
		$result = $query->result_array();
		return $result;
	}
	public function update_brand($id,$data)
	{
		$this->db->where(array('id' =>$id))->set($data)->update('brands');
		return true;
	}

	
	
}