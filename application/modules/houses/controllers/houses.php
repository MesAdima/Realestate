<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Houses extends MY_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('m_houses');
    }

	public function index()
	{
		//echo "Sth";exit;
		$this->load->view('h_home');
	}

	public function register(){
		//echo "Sth";exit;
		$data['estates'] = $this->m_houses->estate_selection();
		$data['buildings'] = $this->m_houses->building_selection();
		$data['content_page'] = "houses/h_register";

		$this->template->call_admin_template($data);
	}

	public function registerhouse(){
		//$posted = $this->input->post();
		//echo "<pre>";print_r($posted);echo "</pre>";exit;
		
		$recieved = $this->input->post();

    	$house_no = $this->input->post("house_no");
    	$estate = $this->input->post("estate");
    	$building = $this->input->post("building");
    	$state = $this->input->post("state");

    	$house_data = array();
    	$house_info = array(
    		'house_no' => $house_no, 
    		'state' => $state, 
    		'build_id' => $building, 
    	);

    	array_push($house_data, $house_info);
    	$insertion = $this->db->insert_batch("house",$house_data);
    	
		redirect(base_url() .'houses/housesindex/success');

	}

	public function housesindex($successful_action = NULL){
		$houses_info = $this->m_houses->all_houses();
		$data['success'] =  (isset($successful_action))? 1 : NULL;
		//echo "<pre>";print_r($houses_info);echo "</pre>";exit;
		$data['houses_info'] = $houses_info;
		// $data['success'] = 1;
		$data['content_page'] = 'houses/h_index';
		$this->template->call_admin_template($data);
	}

	public function deletehouse($house_id){
		$deletion = $this->m_houses->delete_house($house_id);

		// echo $deletion;exit;
		redirect(base_url() .'houses/housesindex');
	}
}