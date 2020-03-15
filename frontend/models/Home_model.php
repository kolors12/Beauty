<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
	
	public  function insert_banner($data)
	{
		$this->db->insert('banners', $data);
		return true;
	}
	/* public function get_category()
	{
		
		$this->db->select('id,name,image');
		$this->db->from('category');
		$this->db->limit(6);	
		$query = $this->db->get();
		$result = $query->result_array();		
		return $result;
	} */
	
	public function get_category()
{
        $this->db->select('id,name,image');
		$this->db->from('category');
		$this->db->limit(6);	
		$query = $this->db->get();
		$result = $query->result_array();
	
    $return = array();

    foreach ($query->result() as $category)
    {
        $return[$category->id] = $category;
        $return[$category->id]->subs = $this->get_sub_categories($category->id); // Get the categories sub categories
    }

    return $return;
}


public function get_sub_categories($category_id)
{
    $this->db->where('cat_id', $category_id);
    $query = $this->db->get('sub_categories');
    return $query->result();
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