<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_model extends CI_Model {
	
	public  function insert_banner($data)
	{
		$this->db->insert('banners', $data);
		return true;
	}
	public function get_banner()
	{
		$this->db->order_by('cat_id', 'Desc');
		$query_result=$this->db->get('banners');
		$result = $query_result->result_array();
		return $result;
	}
	public function delete_banner($id)
	{
		$this->db->where('cat_id',$id);
		$query=$this->db->delete('banners');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function banner_status($id,$value)
	{
		
		$this->db->where(array('cat_id' =>$id))->set(array('status' =>(int)$value))->update('banners');
		return true;
	}
	public function edit_banner($id)
	{
		$query=$this->db->where(array('cat_id' =>$id))->get('banners');
		$result = $query->result_array();
		return $result;
	}
	public function update_banner($id,$data)
	{
		$this->db->where(array('cat_id' =>$id))->set($data)->update('banners');
		return true;
	}

	
	
}