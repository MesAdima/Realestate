<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buildings extends MY_Controller
{

	

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->model("m_buildings");
    }
  

    function index()
	{
		$data['house_types']  = $this->gethousetype();
		$data['estate_types'] = $this->getestate();
		$data['content_page'] = 'buildings/addbuilding';

		$this->template->call_admin_template($data);
	}
	

	function getestate()
	{
        $results = $this->m_buildings->get_estates();
        
        //echo '<pre>';print_r($results);echo '</pre>';die;
        $est = '<option>Select the Estate</option>';

        foreach ($results as $value) {
            $est.= '<option value="' . $value['est_id'] . '">' . $value['est_name'] . '</option>';  
        }
        return $est;
	}

	function gethousetype()
	{
        $results = $this->m_buildings->get_housetype();
        
        //echo '<pre>';print_r($results);echo '</pre>';die;
        $htype = '<option>Select the House Type</option>';

        foreach ($results as $value) {
            $htype .= '<option value="' . $value['housetype_id'] . '">' . $value['house_type'] . '</option>';  
        }
        return $htype;
	}

	function addbuilding()
	{
        $building = $this->m_buildings->enter_building();

		if($building)
        {
            redirect(base_url() . 'buildings/buildinglist');
        }
        else
        {
            $data['error'] = 'Could not complete Registration. Try Again!';
            $data['content_page'] = 'buildings/addbuilding';
            $this->template->call_admin_template($data);
        }
	   
       
       redirect('/','location');
	}

    function buildinglist()
    {
        $data['building_table'] = $this->createbuildingsview('table');
        $data['content_page'] = 'buildings/allbuildings';
        $this->template->call_admin_template($data);
    }

    function createbuildingsview($type)
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
                    $building_style .= '<td><a href = "'.base_url().'buildings/buildingprofile/'.$building_details['build_id'].'">View Building</a></td>';
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

    function updatebuilding($type, $build_id)
    {
        $update = $this->m_buildings->updatebuilding($type, $build_id);
        if($update)
        {
            switch ($type) {
                case 'delete':
                    redirect(base_url() .'buildings/buildinglist');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }
    


}