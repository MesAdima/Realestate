<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_settings extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

   public function addhousetype(){
   		$description = strtoupper($this->input->post('description'));
        $housetype = strtoupper($this->input->post('housetype'));
        $multiplehouses = strtoupper($this->input->post('multiplehouses'));
		
		$house_type_data = array();
		$house_type_ = array(
          'description' => $description,
          'house_type' => $housetype,
          'multiple_houses' => $multiplehouses
		  );
		  
		  array_push($house_type_data, $house_type_);
		  // print_r($house_type_data);die;

        //echo '<pre>'; print_r($member_details_data); echo '<pre>'; die;

       $type = $this->db->insert_batch('house_type',$house_type_data);
	
	return $type;
   }

   
}
?>