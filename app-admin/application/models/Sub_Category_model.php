<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_Category_model extends CI_Model {
	
	public  function insert_sub_category($data)
	{
		$this->db->insert('sub_categories', $data);
		return true;
	}
	public function get_drop_type()
	{
		$this->db->order_by('id', 'Desc');
		$query_result=$this->db->get('category');
		$result = $query_result->result_array();
		return $result;
	}
	public function get_sub_category()
	{
		$this->db->order_by('sub_cat_id', 'Desc');
		$query_result=$this->db->get('sub_categories');
		$result = $query_result->result_array();
		return $result;
	}
	public function delete_sub_category($id)
	{
		$this->db->where('sub_cat_id',$id);
		$query=$this->db->delete('sub_categories');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function sub_category_status($id,$value)
	{
		
		$this->db->where(array('sub_cat_id' =>$id))->set(array('status' =>(int)$value))->update('sub_categories');
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