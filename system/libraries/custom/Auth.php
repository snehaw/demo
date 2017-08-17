<?php
/**
* Added for Authentication of user
* @package Blog
* @author Sneha wakode
* @copyright Copyright (c) 2017, Sneha Wakode
* @version Version 1.0.0
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Auth
{
	protected $CI;

	/**
	 * Constructor function
	 *
	 * @return void
	 **/
	public function __construct()
	{
        $this->CI =& get_instance();
        $this->CI->load->model('user_model');
	}

	/**
	 * To check wheter the user is logged in or not
	 *
	 * @param 
	 * @return Boolean
	 **/
	public function is_loggedin()
	{

	}

	/**
	 * To check the type of user logged in
	 *
	 * @return Boolean
	 **/
	public function is_of_type()
	{

	}

	/**
	 * Function to logout user 
	 *
	 * @return void
	 **/
	public function logout()
	{

	}

	/**
	 * Funtion to login user
	 *
	 * @param $data User login data
	 * @return Boolean
	 **/
	public function login($data = FALSE)
	{
		if($data != FALSE) {
			$user = $this->CI->user_model->get_user($data);
			if((!empty($user)) && $user != FALSE) {
				if(password_verify($data['password'], $user[0]['password'])) {
					return TRUE;					
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
	}

}

/* End of file Auth.php */
/* Location: .//opt/lampp/htdocs/demo/system/libraries/Custom/Auth.php */
