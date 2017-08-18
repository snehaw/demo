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
		if(!empty($login_details) && is_array($login_details)) {
			$validation = $this->validate_user_login($post_data);

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

		}
		$this->layout->template_page('admin/login');
	}

}

/* End of file Admin.php */
/* Location: .//opt/lampp/htdocs/demo/blog/controllers/Admin.php */