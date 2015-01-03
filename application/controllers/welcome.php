<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}

	public function index()
	{	
		
		$id_expert_session = $this->session->userdata('id_expert');
		$data['mensaje_error'] = "";


		if ($id_expert_session > 0) {
			$data['user_data'] = $this->get_user_data($id_expert_session);
			$data['advices_data'] = $this->get_advices_data($id_expert_session);
			$data['articles_data'] = $this->get_articles_data($id_expert_session);

			$this->load->helper('url');
			$this->load->view('header', $data);
			$this->load->view('index');
			$this->load->view('footer');
		}
		else{
			$this->load->helper('url');
			$this->load->view('header',$data);
			$this->load->view('login');
			$this->load->view('footer');
		}

		
	}

	public function login(){
		$data['login-data'] = $this->get_login($this->input->post('email'), $this->input->post('password'));
		if ($data['login-data'] != null) {
			$dr_id = 0;
			foreach ($data['login-data'] as $row) {
				$dr_id = $row->id_expert;
				$this->session->set_userdata('id_expert', $dr_id);
			}
			$this->index();
		}
		else{
			$data['mensaje_error'] = "<p><font color='e1447b'>The username and password you entered do not match our records.<br> Please review and try again.</font></p>";
			$this->load->helper('url');
			$this->load->view('header', $data);
			$this->load->view('login');
			$this->load->view('footer');
		}

	}
	private function msg_error_login($msg){

	}

	public function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

	private function get_user_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_user($id);
		return $result;
	}

	private function get_login($email, $password){
		$this->load->model('main_model');
		$result = $this->main_model->login($email, $password);
		return $result;
	}

	private function get_advices_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_advices($id);
		return $result;
	}

	private function get_articles_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_articles($id);
		return $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */