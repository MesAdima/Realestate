<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_estates extends MY_Model {

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function addestate()
	{
		if($this->input->post())
		{
			$query = $this->db->insert('estate', $this->input->post());

			if ($query) {
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public function get_all_estates()
	{
		$estates = array();
		$query = $this->db->get_where('estate', array('is_deleted' => 0));
		$result = $query->result_array();

		if ($result) {
			foreach ($result as $key => $value) {
				$estates[$value['est_id']] = $value;
			}

			return $estates;
		}
		
		return $estates;
	}

	public function updateestate($type, $estate_id)
	{
		$data = array();
		switch ($type) {
			case 'delete':
				$data['is_deleted'] = 1; 
				break;
			
			case 'update':
				$data = $this->input->post();
				break;
			default:
				# code...
				break;
		}
		$this->db->where('est_id', $estate_id);
		$update = $this->db->update('estate', $data);

		if ($update) {
			return true;
		}
		else
		{
			return false;
		}
	}
}