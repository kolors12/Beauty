<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public  function insert_user($data)
	{
		$this->db->insert('users', $data);
		return true;
	}

	public function checkEmail($email)
	{
	 $query=$this->db->get_where('users',array('email_id'=>$email,'user_status'=>'1'));
	  $result = $query->result_array();
	  $count = count($result);
	  return $count;
	 }




	function user_login($email_id,$password)
	{
	  $query=$this->db->where(array('email_id'=>$email_id,'password'=>$password))->get('users');
	  $result = $query->result_array();
  
	  if(sizeof($result) == 1)
	  
	  {
		  $row = $query->row();
		  $user_data = array(
		  'user_id' => $row->user_id,
		  'first_name' => $row->first_name,
		  'middle_name' => $row->middle_name,
		  'last_name' => $row->last_name,
		  'mobile' => $row->mobile,
		  'email_id' => $row->email_id,
		  'city' => $row->city,
		  'user_status' => $row->user_status,
		  'password' => $row->password,
		  'user_status' => $row->user_status,
		  'address1' => $row->address1,
		  'validated' => true
		  );
		  $this->session->set_userdata($user_data);
		  return true;

		  
	  } 
  }


  public function forgotpassword($email)
  {
		$this->db->select('*');
		$this->db->from('users'); 
		$this->db->where('email_id', $email); 
		$query=$this->db->get();

		return $query->row_array();

  }
  public  function get_user_info($id)
	{
		$this->db->where("user_id",$id);
		$query = $this->db->get('users');
		$ret = $query->result_array();
		return $ret;
	}


	public  function facebook_insert($data)
	{
		$this->db->insert('facebook', $data);
		return true;
	}



	
	


	
	
	
	
	
	
}