<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		// $this->load->model('user_model');
	}

	public function index()
	{
		redirect('user/login');
		// $this->auth->login();
	}

	/**
	* AJAX User Login function
	*
	* @return Json 
	*/
	public function login()
	{
		$post_data = $this->input->post();
		if(!empty($post_data) && is_array($post_data)) {
			$validation = $this->common->validate_user_login($post_data);
			if($validation === TRUE) {
				$data['username'] = $post_data['user_email'];
				$data['password'] = $post_data['password'];
				$login_status =  $this->auth->login($data);
				if($login_status) {
					// profile page
					echo 'hello';exit;
					// redirect();
				} else {
					$result['status'] = FALSE;
					$err['message'] = 'Invalid Username or Password';
					$result['error'] = $this->format_error_array($err);
					echo json_encode($result);exit;
				}
			} else {
				$result['status'] = FALSE;
				$result['error'] = $this->format_error_array($validation);
				echo json_encode($result);exit;
			}
		}
		//$this->layout->view_element('user/login');
	}

	/**
	* Used for AJAX user registration
	*
	* @return Json
	**/
	public function register()
	{
		$post_data = $this->input->post();
		if(!empty($post_data) && is_array($post_data)) {
			// var_dump($post_data);exit;
			$validation = $this->_validate_user_registration($post_data);
			if($validation === TRUE) {
				$data['username'] = $post_data['user_email_regis'];
				$data['password'] = $post_data['password_regis'];
				$data['user_type_id'] = USER;
				$reslt = $this->user_model->create_user($data);
				if($reslt) {
					$result['status'] = TRUE;
					$msg['message'] = 'User created successfully. Check verification email on your email Id.';
					$result['success'] = $this->format_error_array($msg);
					echo json_encode($result);exit;
				} else {
					$result['status'] = FALSE;
					$err['message'] = 'Could not register';
					$result['error'] = $this->format_error_array($err);
					echo json_encode($result);exit;
				}
			} else {
				$result['status'] = FALSE;
				$result['error'] = $this->format_error_array($validation);
				echo json_encode($result);exit;
			}
		}
	}

	/**
	* Private Function to validate User registration data
	*
	* @param $data Post array containing user information from user registration form
	* @return Array/Boolean
	**/
	private function _validate_user_registration($data)
	{
		$this->form_validation->set_data($data);
		$this->form_validation->set_rules('user_email_regis', 'Email', 
			'required|valid_email|is_unique[user.username]|max_length[100]');
		$this->form_validation->set_rules('password_regis', 'Password', 'required|min_length[7]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if($this->form_validation->run() == FALSE){
			return $this->form_validation->error_array();
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
	private function format_error_array($error_array)
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

/* End of file User.php */
/* Location: .//opt/lampp/htdocs/demo/blog/controllers/User.php */