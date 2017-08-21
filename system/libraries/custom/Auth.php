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
					$this->set_user_session($user);
					return TRUE;					
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
	}

	/**
	* Used to set the user session after login
	* 
	* @param $data user data to Be set in session
	* @return void
	**/
	private function set_user_session($data = FALSE)
	{
		if($data != FALSE) {
			$this->CI->session->set_userdata(
				array(
					'USER_AUTH_ID' => $data[0]['user_id'],
					'USER_AUTH_TYPE_ID' => $data[0]['user_type_id'],
					'USER_NAME' => $data[0]['first_name'],
					)
				);
		}
	}

}

/* End of file Auth.php */
/* Location: .//opt/lampp/htdocs/demo/system/libraries/Custom/Auth.php */
