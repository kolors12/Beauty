<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {
	
	public  function insert_product($data)
	{
		$this->db->insert('products', $data);
		return true;
	}
	/* public function get_vendors()
	{
		$this->db->select('vendors.name,vendors.location,vendors.address,vendors.mobile_no,vendors.email_id,cities.city_name,vendors.vendor_id,vendors.status');
		$this->db->from('vendors');
		$this->db->join('cities','cities.city_id = vendors.city_id');
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	} */
	public function get_products()
	{
		
		$this->db->from('products');
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	public function get_city()
	{
		$this->db->from('cities');
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	public function get_category()
	{
		$this->db->from('category');
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	
	public function delete_product($id)
	{
		$this->db->where('prod_id',$id);
		$query=$this->db->delete('products');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function product_status($id,$value)
	{
		$this->db->where(array('prod_id' =>$id))->set(array('status' =>(int)$value))->update('products');
		return true;
	}
	public function view_product_details($id)
	{
		  $this->db->select('*');
		  $this->db->from('products v');
		  /* $this->db->join('cities c', 'c.city_id = v.city_id'); */
		  $this->db->where(array('prod_id' => $id));
		  $query = $this->db->get();
		  $result = $query->result_array();
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