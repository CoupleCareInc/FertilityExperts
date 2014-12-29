<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advices extends CI_Controller {

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
	}

	public function index()
	{		

		$id_expert_session = $this->session->userdata('id_expert');

		$data['user_data'] = $this->get_user_data($id_expert_session);
		$data['advices_data'] = $this ->get_all_advices_data($id_expert_session);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('advices');
		$this->load->view('footer');
	}

	public function advice($id_advice){
		$id_expert_session = $this->session->userdata('id_expert');

		$data['id_advice'] = $id_advice;

		$data['user_data'] = $this->get_user_data($id_expert_session);
		
		$data['advices_data'] = $this ->get_advices_data($id_expert_session);
		$data['advice_data'] = $this->get_specific_advice_data($data['id_advice'], $id_expert_session);


		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('modify-advice');
		$this->load->view('footer');
	}

	public function newadvice(){
		$id_expert_session = $this->session->userdata('id_expert');


		$data['user_data'] = $this->get_user_data($id_expert_session);


		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('new-advice');
		$this->load->view('footer');
	}

	private function get_user_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_user($id);
		return $result;
	}

	private function get_advices_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_advices($id);
		return $result;
	}

	private function get_all_advices_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_all_advices($id);
		return $result;
	}

	private function get_specific_advice_data($id_advice, $id_user){
		$this->load->model('main_model');
		$result = $this->main_model->get_advice($id_advice, $id_user);
		return $result;
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */