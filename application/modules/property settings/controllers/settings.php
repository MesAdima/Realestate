<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
       
    }

	function index()
	{
		$this->load->view('settings');
	}

  


}
?>