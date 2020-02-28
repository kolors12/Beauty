<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities_model extends CI_Model {
	
	public  function insert_cities($data)
	{
		
		$this->db->insert('cities', $data);
		return true;
	}
	public function get_cities()
	{
		$this->db->order_by('city_id', 'Desc');
		$query_result=$this->db->get('cities');
		$result = $query_result->result_array();
		return $result;
	}
	public function delete_cities($id)
	{
		$this->db->where('city_id',$id);
		$query=$this->db->delete('cities');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function cities_status($id,$value)
	{
		
		$this->db->where(array('city_id' =>$id))->set(array('status' =>(int)$value))->update('cities');
		return true;
	}
	public function get_city_id($id)
	{
		$query=$this->db->where(array('city_id' =>$id))->get('cities');
		$result = $query->result_array();
		return $result;
	}
	public function update_city($id,$data)
	{
		
		$this->db->where(array('city_id' =>$id))->set($data)->update('cities');
		return true;
	}
	
}