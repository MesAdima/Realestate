<?php if(!defined("BASEPATH")) exit("No direct access to scrip allowed");
/**
* 
*/
class home extends MY_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$this->login();
	}
	public function login()
	{
		$this->load->view("login");
	}

	function authentication()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$hashed_password = md5($password);

		$authenticate = $this->home_model->get_user_login($username,$hashed_password);
		
		if($authenticate['auth'] == TRUE)
		{
			$user_id = $authentication['user_id'];
			$user_type = $authentication['usertype'];
			
			$data = array(
				'logged_in' => TRUE,
				'userid' => $user_id,
				'usertype' => $user_type
			);

			// echo $redirect_url;die();
			$this->session->set_userdata($data);
			echo "<pre>";print_r($this->session->all_userdata());die;
			// echo base_url() . $redirect_url;die();
			// redirect(base_url() . $redirect_url);
		}
		else
		{
			$data['error'] = 'Login Error! Please Try Again';
			$this->load->view('login', $data);
		}
	}
}
?>