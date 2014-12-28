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
	}

	public function index()
	{	
		$this->session->set_userdata('id_expert','2');
		$id_expert_session = $this->session->userdata('id_expert');

		$data['user_data'] = $this->get_user_data($id_expert_session);
		$data['advices_data'] = $this->get_advices_data($id_expert_session);
		$data['articles_data'] = $this->get_articles_data($id_expert_session);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('index');
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

	private function get_articles_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_articles($id);
		return $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */