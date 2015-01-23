<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_settings extends MY_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

   public function addhousetype(){
        $housetype = $this->input->post('housetype');
		$description = $this->input->post('description');
        $multiplehouses = $this->input->post('multiplehouses');
		
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
   
   public function get_house_type()
	{
		$housetype = array();
		$query = $this->db->get_where('house_type', array('multiple_houses' => 0));
		$result = $query->result_array();

		if ($result) {
			foreach ($result as $key => $value) {
				$housetype[$value['housetype_id']] = $value;
			}

			return $housetype;
		}
		
		return $housetype;
	}

   
}
?>