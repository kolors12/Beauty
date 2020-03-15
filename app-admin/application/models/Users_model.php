<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	public  function insert_user($data)
	{
		$this->db->insert('admin', $data);
		return true;
	}
	

	public function get_city()
	{
		$this->db->order_by('city_id', 'Desc');
		$query_result=$this->db->get('cities');
		$result = $query_result->result_array();
		return $result;
	}
	public function get_category()
	{
		$this->db->order_by('id', 'Desc');
		$query_result=$this->db->get('category');
		$result = $query_result->result_array();
		return $result;
	}
	public function delete_user($id)
	{
		$this->db->where('admin_id',$id);
		$query=$this->db->delete('admin');
		if($query)
		{
		return true;
		}else
		{
		return false;
		}

	}
	function user_status($id,$value)
	{
		
		$this->db->where(array('admin_id' =>$id))->set(array('user_status' =>(int)$value))->update('admin');
		return true;
	}
	public function edit_user($id)
	{
		$query=$this->db->where(array('admin_id' =>$id))->get('admin');
		$result = $query->result_array();
		return $result;
	}
	// public function view_details($id)
	// {
	// 	$query=$this->db->where(array('admin_id' =>$id))->get('admin');
	// 	$result = $query->result_array();
	// 	return $result;
	// }

	public function view_details($id)
	{
		  $this->db->select('*');
		  $this->db->from('admin ad');
		  $this->db->join('cities c', 'c.city_id = ad.city_id');
		  $this->db->where(array('admin_id' => $id));
		  $query = $this->db->get();
		  $result = $query->result_array();
		  return $result;
		
	}


	public function update_user($id,$data)
	{
		$this->db->where(array('admin_id' =>$id))->set($data)->update('admin');
		return true;
	}

	


		function count_all($name,$email_id)
		{
			$query = $this->make_query($name,$email_id);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($name,$email_id)
		{
			$query = "

			SELECT ad.name,ad.email_id,ad.mobile,ad.address,ad.user_status,ad.admin_id,ad.user_image,ad.admin_type,c.city_name FROM admin as ad
			left join cities as c ON c.city_id = ad.city_id
			WHERE user_status IN (0,1)  
			";

			if(isset($name) && $name != "")
			{
			$query .= "AND name LIKE '%$name%'";
			}
			if(isset($email_id) && $email_id != "")
			{
			$query .= " AND email_id LIKE '%$email_id%'";
			}
			
			$query .= "ORDER BY admin_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $name,$email_id)
		{
			$query = $this->make_query($name,$email_id);

			$query .= ' LIMIT '.$start.', ' . $limit;

			$data = $this->db->query($query);
			//echo $this->db->last_query();
			$output = '';
			if($data->num_rows() > 0)
			{
				$i = 0;
				foreach($data->result_array() as $row)
				{
					++$i;
					
					
					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td>'. $row['city_name'].'</td>
						<td><a title="View User Details" href="'.base_url().'users/view_details/'.$row['admin_id'].'">'. $row['name'].' </a></td>
						<td>'. $row['email_id'].'</td>
						<td>'. $row['mobile'].'</td>
						<td scope="row">';
						if($row['admin_type'] == "Admin")
						{ 
							$output .= '<span class="label btn-xs badge btn btn-primary"> Admin</span>';
						}
						else
						{ 
							$output .= '<span class="label btn-xs badge btn-warning">Vendor</span>';
						}
						$output .= '
						</td>
						
						<td><img src="'.base_url().$row['user_image'].'" height="50" width="50" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded"></td>
						<td scope="row">';
						if($row['user_status'] == "0")
						{ 
							$output .= '<span class="label btn-xs badge badge-danger"> Inactive</span>';
						}
						else
						{ 
							$output .= '<span class="label btn-xs badge badge-success">Active</span>';
						}
						$output .= '
						</td>
						<td>';
						if ($row['user_status'] == '1') { 
							$output .= '<a  Onclick="return Inactive();" href="'.base_url().'users/user_status/'.$row['admin_id'].'/0'.'" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-primary changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>';
						 } else { 
						$output .= '<a  Onclick="return Active();" href="'.base_url().'users/user_status/'.$row['admin_id'].'/1'.'" data-toggle="tooltip" title="Active" class="btn btn-sm btn-primary changestatus"><span  class="pe-7s-door-lock" title="Inactive"></span></a>';
						 }
                        					
						$output .= '<a href="'.base_url().'users/edit_user/'.$row['admin_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="Edit"><i class="pe-7s-trash pe-7s-link"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'users/delete_user/'.$row['admin_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="pe-7s-trash btn-icon-wrapper"></i></button></a>
					</td>
					</tr>
					';
					
				}
			}
			else
			{
				$output = '<td colspan="10" style="text-align:center;color:red;"><h5>No User Data Found</h5></td>';
			}
			return $output;
		}



	
}