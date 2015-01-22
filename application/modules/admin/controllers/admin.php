<?php if(!defined("BASEPATH")) exit("No direct access to scripts allowed");

/**
* 
*/
class admin extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->module('template');
	}

	public function index()
	{
		$data['content_page'] = "admin/dashboard";
		$data['title'] = "Home|Administrator";

		$this->template->call_admin_template($data);
	}
}
?>