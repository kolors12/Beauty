<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	
	
	  function login($email_id,$password)
	  {
		$query=$this->db->where(array('email_id'=>$email_id,'password'=>$password))->get('admin');
		$result = $query->result_array();
	
		if(sizeof($result) == 1)
		
        {
            $row = $query->row();
            $data = array(
			'admin_id' => $row->admin_id,
			'name' => $row->name,
			'email_id' => $row->email_id,
			'mobile' => $row->mobile,
			'address' => $row->address,
			'location' => $row->location,
			'admin_type' => $row->admin_type,
			'user_status' => $row->user_status,
			'password' => $row->password,
			'user_image' => $row->user_image,
			'validated' => true
			);
            $this->session->set_userdata($data);
            return true;
        } 
	}
	
	 public function update_profile($id,$data)
    {
		$this->db->where(array('user_id' =>$id))->set($data)->update('bu_users');
		return true;
	}
	/*
	public function user_count_list()
    {
		$query = $this ->db->get('users');
		$result1=$query->result_array();
		return $result1;
    }
	public function user_inactive_count_list()
    {
		$query = $this ->db->where(array ('status' => 0 ))->get('users');
		$result1=$query->result_array();
		return $result1;
    }
	public function set_count()
    {
		$query = $this ->db->where(array ('status' => 1 ))->get('sect');
		$result1=$query->result_array();
		return $result1;
    }
	public function sub_set_count()
    {
		$query = $this ->db->where(array ('status' => 1 ))->get('sub_sect');
		$result1=$query->result_array();
		return $result1;
    }
	public function favourite_count()
	{	
		$query = $this ->db->where(array ('status' => 1 ))->get('users');
		$result1=$query->result_array();
		return $result1;
	} */
	
	
}