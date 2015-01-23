<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_houses extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        date_default_timezone_set('Africa/Nairobi');
    }

    public function templatefunction(){
    	$query = $this->db->query("insert query here");
    	$result = $query->result_array();

    	return $result;
    }

    public function all_houses(){
    	$query = $this->db->query("
    		SELECT h.house_id,h.house_no,h.state, b.build_name,b.build_desc,e.est_name,e.location,e.description,e.added_on FROM house h,buildings b,estate e WHERE b.build_id = h.build_id AND b.est_id = e.est_id
    		");

    	$result = $query->result_array();
    	return $result;
    }

    public function delete_house($house_id = NULL){
    	$result = $this->db->query("
    			DELETE FROM `house` WHERE `house_id` = $house_id
    		");
    	
    	return $result;
    }

    public function estate_selection(){
    	$query = $this->db->query("
    		SELECT est_id,est_name FROM estate
    		");

    	$result = $query->result_array();
    	return $result;
    }

    public function building_selection(){
    	$query = $this->db->query("
    		SELECT build_id,build_name FROM buildings
    		");

    	$result = $query->result_array();
    	return $result;
    }

    
}