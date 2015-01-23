<?php if(!defined("BASEPATH")) exit("No direct access to the script allowed");

/**
* 
*/
class home_model extends MY_Model
{
	
	function __construct()
	{
		parent:: __construct();
	}

	public function FunctionName()
	{
		
	}
	function get_user_login($username,$password)
	{
		$user = array();
    	$query = $this->db->get_where('users', array('username' => $username, 'password' => $password, 'is_active' => 1), 1);
        
    	$details = $query->result_array();

    	if($details)
    	{
    		$user['auth'] = TRUE;
    		$user['user_id'] = $details[0]['user_id'];
    		$user['usertype'] = $details[0]['user_type'];

    		redirect(base_url().'admin');
    	}
    	else
    	{
    		$user['auth'] = FALSE;
    	}

    	// echo "<pre>";print_r($user);die;

        
    	return $user;
	}

	
}
?>