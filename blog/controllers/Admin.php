<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->layout->template_page('admin/dashboard');
	}

	/**
	* Used for admin login
	* @return void
	**/
	public function login()
	{
		$base_url = $this->config->item('base_url');
		$login_details = $this->input->post();
		$result = '';
		if(!empty($login_details) && is_array($login_details)) {
			$login_detail['username'] = $login_details['admin_email'];
			$login_detail['password'] = $login_details['admin_password'];
			$validation = $this->common->validate_user_login($login_details);
			if($validation === TRUE) {
				if(isset($login_details['remember'])) {
					$this->input->set_cookie("admin_email",$login_details["admin_email"],time()+ (10 * 365 * 24 * 60 * 60), $_SERVER['HTTP_HOST']);
					$this->input->set_cookie("admin_password",$login_details["admin_password"],time()+ (10 * 365 * 24 * 60 * 60), $_SERVER['HTTP_HOST']);
				} else {
					if(!empty(get_cookie("admin_email"))) {
						$this->input->set_cookie ("admin_email","");
					}
					if(!empty(get_cookie("admin_password"))) {
						$this->input->set_cookie ("admin_password","");
					}
				}
			} else {
				$result['status'] = FALSE;
				// var_dump($validation);exit;
				$validation['admin_email'] = $validation['user_email'];
				$validation['admin_password'] = $validation['password'];
				$result['error'] = $validation;
				// var_dump($result['error']);
				// echo json_encode($result);exit;
			}

		}
		$this->layout->template_page('admin/login', $result);
	}

}

/* End of file Admin.php */
/* Location: .//opt/lampp/htdocs/demo/blog/controllers/Admin.php */