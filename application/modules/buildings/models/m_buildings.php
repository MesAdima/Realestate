<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_buildings extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }


    public function enter_building(){
      
      $estate_id = $this->input->post('estateid');
      $building_name = strtoupper($this->input->post('buildingname'));
      $buildind_description = $this->input->post('buildingdescription');
      $house_type = $this->input->post('housetype');
      

      $building_details_data = array();
      $building_details = array(
          'est_id' => $estate_id,
          'build_name' => $building_name,
          'build_desc' => $buildind_description,
          'housetype_id' => $house_type
      );

        

        array_push($building_details_data, $building_details);

        //echo '<pre>'; print_r($member_details_data); echo '<pre>'; die;

        $this->db->insert_batch('buildings',$building_details_data);
       
    }

   

   
}