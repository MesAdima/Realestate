<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
// error_reporting(0);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '-1');

class MY_Controller extends MX_Controller
{
    
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->module('template');
        

    }

     


}