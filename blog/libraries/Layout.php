<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* Sneha H Wakode
* Used to create layour pages for the view
* Integrates the pages fragments in a single layout of pages
*/
class Layout
{
	protected $CI;
	protected $theme;
	protected $template;

	public function __construct()
	{
        $this->CI =& get_instance();

        // Used to get the default theme and view template
        $this->theme = $this->CI->config->item('theme');
        $this->template = 'layout/templates/' . $this->CI->config->item('template');
	}

	/*
	* Sneha Wakode
	* Used to load the pages fragment for the home pages layout
	*/
	public function home_layout($page = "")
	{
		if($page !== "") {
			$this->CI->load->view($this->template.'/header/header');
			$this->CI->load->view($this->template.'/header/common_js');
			$this->CI->load->view($this->template.'/header/menu');
			$this->CI->load->view($page);
			$this->CI->load->view($this->template.'/footer/footer_links');
			$this->CI->load->view($this->template.'/footer/footer');
		} else {
			$this->CI->load->view($this->template.'/header/header');
			$this->CI->load->view($this->template.'/header/common_js');
			$this->CI->load->view($this->template.'/header/menu');
			$this->CI->load->view($this->template.'/footer/footer_links');
			$this->CI->load->view($this->template.'/footer/footer');
		}
	}

	/*
	* Sneha Wakode
	* Used to create general/common pages
	*/
	public function general_layout($page = "")
	{
		if($page !== "") {
			$this->CI->load->view($this->template.'/header/header_general');
			$this->CI->load->view($this->template.'/header/common_js');
			$this->CI->load->view($this->template.'/header/menu');
			$this->CI->load->view($page);
			$this->CI->load->view($this->template.'/footer/footer_links');
			$this->CI->load->view($this->template.'/footer/footer');
		}
	}

	/**
	 * Used to load elements of page
	 *
	 * @return void
	 **/
	public function view_element($page = '')
	{
		if($page !== '') {
			$this->CI->load->view($this->template.'/pages/'.$page);
		}
	}

	/**
	* Used to load common pages without top menu
	**/
	public function template_page($page = '')
	{
		if($page !== '') {
			$this->CI->load->view($this->template.'/header/header_general');
			$this->CI->load->view($this->template.'/header/common_js');
			$this->CI->load->view($this->template.'/pages/'.$page);
			$this->CI->load->view($this->template.'/footer/footer');
		}
	}

}

/* End of file Layout.php */
/* Location: .//opt/lampp/htdocs/demo/blog/libraries/Layout.php */
