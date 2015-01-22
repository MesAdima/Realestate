<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends MY_Controller
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model('m_settings');
       $this->load->module('buildings');
    }

	function index()
	{
		$data['content_page']='settings/settings';
		$this->template->call_admin_template($data);
	}

  	function addtype()
	{
        $type = $this->m_settings->addhousetype();

		if($type)
        {
            redirect(base_url() . 'settings/settingslist');
        }
        else
        {
            $data['error'] = 'Could not complete Registration. Try Again!';
            $data['content_page'] = 'settings/addtype';
            $this->template->call_admin_template($data);
        }
	   
       
       redirect('/','location');
	}

    function settingslist()
    {
        $data['houses_table'] = $this->createhousetypeview('table');
        $data['content_page'] = 'settings/housetype';
        $this->template->call_admin_template($data);
    }
	
	 function createhousetypeview($type)
    {
        $buildings = $this->m_buildings->get_all_buildings();
        $building_style = '';
        if ($buildings) {
            switch ($type) {
            case 'table':
                $counter = 1;
                foreach ($buildings as $key => $building_details) {
                    $building_style .= '<tr>';
                    $building_style .= '<td>'.$counter.'</td>';
                    $building_style .= '<td>'.$building_details['est_id'].'</td>';
                    $building_style .= '<td>'.$building_details['build_name'].'</td>';
                    $building_style .= '<td>'.$building_details['build_desc'].'</td>';
                    $building_style .= '<td>'.$building_details['housetype_id'].'</td>';
                    $building_style .= '<td><a href = "'.base_url().'estates/estateprofile/'.$building_details['build_id'].'">View Building</a></td>';
                    $building_style .= '<td><a href = "'.base_url().'buildings/updatebuilding/delete/'.$building_details['build_id'].'">Delete Building</td>';
                    $building_style .= '</tr>';

                    $counter++;
                }
                break;
            
            default:
                # code...
                break;
            }
        }

        return $building_style;
    }


}
?>