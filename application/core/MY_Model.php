<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function getallestates(){
    	$query = $this->db->query("
    		SELECT * FROM estates
    		");
    	$result = $query -> $result_array;
    }
}