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
	// public function get_sub_category()
	// {
	// 	$this->db->order_by('sub_cat_id', 'Desc');
	// 	$query_result=$this->db->get('sub_categories');
	// 	$result = $query_result->result_array();
	// 	return $result;
	// }

	public function get_sub_category()
	{
		$this->db->select('sub_categories.lang_id,sub_categories.sub_cat_name,sub_categories.sub_cat_desc,sub_categories.sub_cat_image,sub_categories.sub_cat_banner_image,
		sub_categories.status,sub_categories.sub_cat_id,category.name');
		$this->db->from('sub_categories');
		$this->db->join('category','category.id = sub_categories.cat_id');
		$query=$this->db->get();
		$result=$query->result_array();
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
	public function edit_sub_category($id)
	{
		$query=$this->db->where(array('sub_cat_id' =>$id))->get('sub_categories');
		$result = $query->result_array();
		return $result;
	}
	public function update_sub_category($id,$data)
	{
		$this->db->where(array('sub_cat_id' =>$id))->set($data)->update('sub_categories');
		return true;
	}

	
	
}