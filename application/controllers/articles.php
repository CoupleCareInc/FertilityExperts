<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends CI_Controller {

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

		$data['user_data'] = $this->get_user_data($id_expert_session);
		$data['articles_data'] = $this->get_all_articles_data($id_expert_session);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('articles');
		$this->load->view('footer');
	}

	public function article($id_article){
		$id_expert_session = $this->session->userdata('id_expert');

		$data['id_article'] = $id_article;

		$data['user_data'] = $this->get_user_data($id_expert_session);
		
		$data['articles_data'] = $this ->get_articles_data($id_expert_session);
		$data['article_data'] = $this->get_specific_article_data($data['id_article'], $id_expert_session);


		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('modify-article');
		$this->load->view('footer');
	}

	public function action(){
		$id_expert_session = $this->session->userdata('id_expert');


		$data['user_data'] = $this->get_user_data($id_expert_session);

		if ($this->input->post('action') == 'insert') {

			if ($this->input->post('status') == 'Send to post' ) {
				$status = "ready to post";
			}
			else{
				$status = "draft";
			}
			$datainsert = array(
			'id_article' => '',
			'title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'content' => $this->input->post('content'),
			'datecreated' => date('Y-m-d'),
			'tbl_experts_id_expert' => $id_expert_session,
			'status' => $status
			);

			$this->main_model->add_article($datainsert);
		}

		if ($this->input->post('action') == 'update') {
			if ($this->input->post('status') == 'Send to post' ) {
				$status = "ready to post";
			}
			else{
				$status = "draft";
			}
			$dataupdate = array(
			'title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'content' => $this->input->post('content'),
			'datecreated' => date('Y-m-d'),
			'status' => $status
			);

			$this->main_model->update_article($dataupdate, $id_expert_session, $this->input->post('id_article'));
		}

		$this->index();

		
		/*
		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('new-advice');
		$this->load->view('footer');
		*/
	}

	public function newarticle(){
		$id_expert_session = $this->session->userdata('id_expert');


		$data['user_data'] = $this->get_user_data($id_expert_session);

		$this->load->helper('url');
		$this->load->view('header', $data);
		$this->load->view('new-article');
		$this->load->view('footer');
	}

	private function get_user_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_user($id);
		return $result;
	}

	private function get_articles_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_articles($id);
		return $result;
	}

	private function get_all_articles_data($id){
		$this->load->model('main_model');
		$result = $this->main_model->get_all_articles($id);
		return $result;
	}

	private function get_specific_advice_data($id_advice, $id_user){
		$this->load->model('main_model');
		$result = $this->main_model->get_advice($id_advice, $id_user);
		return $result;
	}

	private function get_specific_article_data($id_article, $id_user){
		$this->load->model('main_model');
		$result = $this->main_model->get_article($id_article, $id_user);
		return $result;
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */