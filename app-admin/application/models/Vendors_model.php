<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors_model extends CI_Model {
	
	public  function insert_vendor($data)
	{
		$this->db->insert('vendors', $data);
		return true;
	}
	public function get_vendors()
	{
		$this->db->select('vendors.name,vendors.location,vendors.address,vendors.mobile_no,vendors.email_id,cities.city_name,vendors.vendor_id,vendors.status');
		$this->db->from('vendors');
		$this->db->join('cities','cities.city_id = vendors.city_id');
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	
	public function delete_vendor($id)
	{
		$this->db->where('vendor_id',$id);
		$query=$this->db->delete('vendors');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function vendor_status($id,$value)
	{
		$this->db->where(array('vendor_id' =>$id))->set(array('status' =>(int)$value))->update('vendors');
		return true;
	}
	public function view_vendor_details($id)
	{
		$this->db->from('vendors');
		$this->db->join('cities','cities.city_id = vendors.city_id');
		$query=$this->db->get();
		$this->db->where('vendors.vendor_id',$id);
		$result=$query->result_array();
		return $result;
		
		
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