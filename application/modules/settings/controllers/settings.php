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
        $housetype = $this->m_settings->get_house_type();
        $houseview = '';
        if ($housetype) {
            switch ($type) {
            case 'table':
                $counter = 1;
                foreach ($housetype as $key => $housetypeview) {
                    $houseview .= '<tr>';
                    $houseview .= '<td>'.$counter.'</td>';
                    $houseview .= '<td>'.$housetypeview['housetype_id'].'</td>';
                    $houseview .= '<td>'.$housetypeview['description'].'</td>';
                    $houseview .= '<td>'.$housetypeview['house_type'].'</td>';
                    $houseview .= '<td>'.$housetypeview['multiple_houses'].'</td>';
                    $houseview .= '<td><a href = "'.base_url().'estates/estateprofile/'.$housetypeview['housetype_id'].'">View Building</a></td>';
                    $houseview .= '<td><a href = "'.base_url().'buildings/updatebuilding/delete/'.$housetypeview['housetype_id'].'">Delete Building</td>';
                    $houseview .= '</tr>';

                    $counter++;
                }
                break;
            
            default:
                # code...
                break;
            }
        }

        return $housetypeview;
    }

	function housetypelist()
    {
        $data['houses_table'] = $this->createhousetypeview('table');
        $data['content_page'] = 'buildings/allbuildings';
        $this->template->call_admin_template($data);
    }


}
?>