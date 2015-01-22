<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estates extends MY_Controller
{
	function __construct()
	{
		// Call the Ccontroller constructor
		parent::__construct();
		$this->load->model('m_estates');

	}

	function index()
	{
		$this->template->call_admin_template($data);
	}

	function newestate()
	{
		$data['error'] = '';
		$data['content_page'] = 'estates/addestate';
		$this->template->call_admin_template($data);
	}

	function completeregistration()
	{
		$info = $this->m_estates->addestate();
		if($info)
		{
			redirect(base_url() . 'estates/estatelist');
		}
		else
		{
			$data['error'] = 'Could not complete Registration. Try Again!';
			$data['content_page'] = 'estates/addestate';
			$this->template->call_admin_template($data);
		}
	}

	function estatelist()
	{
		$data['estate_table'] = $this->createestatesview('table');
		$data['content_page'] = 'estates/allestates';
		$this->template->call_admin_template($data);
	}

	function createestatesview($type)
	{
		$estates = $this->m_estates->get_all_estates();
		$estate_style = '';
		if ($estates) {
			switch ($type) {
			case 'table':
				$counter = 1;
				foreach ($estates as $key => $estate_details) {
					$estate_style .= '<tr>';
					$estate_style .= '<td>'.$counter.'</td>';
					$estate_style .= '<td>'.$estate_details['est_name'].'</td>';
					$estate_style .= '<td>'.$estate_details['location'].'</td>';
					$estate_style .= '<td>'.$estate_details['description'].'</td>';
					$estate_style .= '<td><a href = "'.base_url().'estates/estateprofile/'.$estate_details['est_id'].'">View Estate</a></td>';
					$estate_style .= '<td><a href = "'.base_url().'estates/updateestate/delete/'.$estate_details['est_id'].'">Delete Estate</td>';
					$estate_style .= '</tr>';

					$counter++;
				}
				break;
			
			default:
				# code...
				break;
			}
		}

		return $estate_style;
	}

	function updateestate($type, $estate_id)
	{
		$update = $this->m_estates->updateestate($type, $estate_id);
		if($update)
		{
			switch ($type) {
				case 'delete':
					redirect(base_url() .'estates/estatelist');
					break;
				
				default:
					# code...
					break;
			}
		}
	}
}