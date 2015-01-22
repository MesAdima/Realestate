<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buildings extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model("m_buildings");
    }

	function index()
	{
		$this->load->view('buildings');
	}

	function get_estate()
	{
         
	}

	function get_housetype()
	{

	}

	function add_building()
	{
		
	   $result = $this->m_buildings->enter_building();
        echo $result;die();
	}

  


}