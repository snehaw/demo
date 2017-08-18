<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();
	}

	/**
	* Function to validate user login data
	*
	* @param $data Post array containing user information from login form
	* @return Array/Boolean
	**/
	public function validate_user_login($data)
	{
		return $this->_validate_user_login($data);
	}

	/**
	* Private Function to validate User Login data
	*
	* @param $data array containing user information from validate_user_login function
	* @return Array/Boolean
	**/
	private function _validate_user_login($data)
	{
		$this->form_validation->set_data($data);
		$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			return $this->form_validation->error_array();
		} else {
			return TRUE;
		}
	}
	

}

/* End of file Common.php */
/* Location: .//opt/lampp/htdocs/demo/blog/libraries/Common.php */
