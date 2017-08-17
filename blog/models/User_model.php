<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	/**
	 * Used to create or add new user
	 *
	 * @param $data User data to be added
	 * @return Boolean
	 * @author 
	 **/
	public function create_user($data)
	{
		if(!empty($data)) {
			$data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
			return $this->db->insert('user', $data);
		} else {
			return FALSE;
		}
	}

	/**
	 * Used to get the user details from the table
	 *
	 * @param $data User data
	 * @return void
	 * @author 
	 **/
	public function get_user($data = FALSE)
	{
		if($data != FALSE) {
			$stmt = 'SELECT * FROM user WHERE username = "' . $data['username'] . '"';
			$query = $this->db->query($stmt);
			if($query->num_rows() > 0 ) {
				return $query->result_array();
			} else {
				return FALSE;
			}
		}
	}

	/*public function is_unique($username)
	{	
		$stmt = 'SELECT username FROM user WHERE username = '.$username;
	    $query = $this->db->query($stmt);
	    if($query->num_rows() > 0) {
	    	return FALSE;
	    } else {
	    	return TRUE;
	    }
	}*/

}

/* End of file User_model.php */
/* Location: .//opt/lampp/htdocs/demo/blog/models/User_model.php */