<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Sneha H Wakode
* Used to create layour pages for the view
* Integrates the pages fragments in a single layout of pages
*/
class Layout
{
	protected $ci;

	public function __construct()
	{
        $this->CI =& get_instance();
	}

	/*
	* Sneha Wakode
	* Used to load the pages fragment for the home pages layout
	*/
	public function home_layout($page = "")
	{
		if($page !== "") {
			$this->CI->load->view('layout/header/header');
			$this->CI->load->view('layout/header/menu');
			$this->CI->load->view($page);
			$this->CI->load->view('layout/footer/footer_links');
			$this->CI->load->view('layout/footer/footer');
		} else {
			$this->CI->load->view('layout/header/header');
			$this->CI->load->view('layout/header/menu');
			$this->CI->load->view('layout/footer/footer_links');
			$this->CI->load->view('layout/footer/footer');
		}
	}

}

/* End of file Layout.php */
/* Location: .//opt/lampp/htdocs/demo/blog/libraries/Layout.php */
