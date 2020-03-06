<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands_model extends CI_Model {
	
	public  function insert_brand($data)
	{
		$this->db->insert('brands', $data);
		return true;
	}
	public function get_brands()
	{
		$this->db->order_by('id', 'Desc');
		$query_result=$this->db->get('brands');
		$result = $query_result->result_array();
		return $result;
	}
	public function delete_brand($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->delete('brands');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function brand_status($id,$value)
	{
		
		$this->db->where(array('id' =>$id))->set(array('status' =>(int)$value))->update('brands');
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