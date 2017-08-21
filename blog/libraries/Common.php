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
		$this->CI->form_validation->set_data($data);
		$this->CI->form_validation->set_rules('user_email', 'Email', 'required|valid_email');
		$this->CI->form_validation->set_rules('password', 'Password', 'required');
		if($this->CI->form_validation->run() == FALSE){
			return $this->CI->form_validation->error_array();
		} else {
			return TRUE;
		}
	}

	/**
	* Used to format validation error array for json response
	*
	* @param $error_array error array from form validation
	* @return Array
	**/
	public function format_error_array($error_array)
	{
		return $this->_format_error_array($error_array);
	}

	/**
	* Used to format validation error array for json response
	*
	* @param $error_array error array from form validation
	* @return Array
	**/
	private function _format_error_array($error_array)
	{
		$arr = [];
		$i = 0;
		foreach ($error_array as $key => $value) {
			$arr[$i]['key'] = $key;
			$arr[$i]['value'] = $value;
			$i++;
		}
		return $arr;
	}
	

}

/* End of file Common.php */
/* Location: .//opt/lampp/htdocs/demo/blog/libraries/Common.php */
