<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class main_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//Login
	public function login($email, $password){
		$this->db->select('*');
		$this->db->from('tbl_experts');
		$this->db->where('email', $email); 
		$this->db->where('password', $password); 

		$query = $this->db->get();

		return $query->result();
	}

	//Getting user data
	public function get_user($id){
		$this->db->select('*');
		$this->db->from('tbl_experts');
		$this->db->where('id_expert', $id); 

		$query = $this->db->get();

		return $query->result();
	}

	//Getting last 4 advices
	public function get_advices($id){
		$this->db->select('*');
		$this->db->from('tbl_advices');
		$this->db->where('tbl_experts_id_expert', $id);
		$this->db->order_by("id_advice", "desc");
		$this->db->limit(4);

		$query = $this->db->get();
		return $query->result();
	}

	//Getting last 3 articles
	public function get_articles($id){
		$this->db->select('*');
		$this->db->from('tbl_articles');
		$this->db->where('tbl_experts_id_expert', $id);
		$this->db->order_by("id_article", "desc");
		$this->db->limit(3);	

		$query = $this->db->get();
		return $query->result();	
	}

	//**************** ADVICES

	//Getting all the advices of the expert
	public function get_all_advices($id){
		$this->db->select('*');
		$this->db->from('tbl_advices');
		$this->db->order_by("id_advice", "desc");
		$this->db->where('tbl_experts_id_expert', $id);

		$query = $this->db->get();
		return $query->result();
	}

	//Getting specific advice
	public function get_advice($id_advice, $id_user){
		$this->db->select('*');
		$this->db->from('tbl_advices');
		$this->db->where('tbl_experts_id_expert', $id_user);
		$this->db->where('id_advice', $id_advice);

		$query = $this->db->get();
		return $query->result();
	}

	//Add advice 
	public function add_advice($data){
		$this->db->insert('tbl_advices', $data);
		return;
	}

	//Upadte advice
	public function update_advice($data, $id_user, $id_advice){
		$this->db->where('tbl_experts_id_expert', $id_user);
		$this->db->where('id_advice', $id_advice);
		$this->db->update('tbl_advices', $data); 
	}

	//**************** ARTICLES

	//Getting all the articles of the expert
	public function get_all_articles($id){
		$this->db->select('*');
		$this->db->from('tbl_articles');
		$this->db->order_by("id_article", "desc");
		$this->db->where('tbl_experts_id_expert', $id);

		$query = $this->db->get();
		return $query->result();
	}

	//Getting specific article
	public function get_article($id_article, $id_user){
		$this->db->select('*');
		$this->db->from('tbl_articles');
		$this->db->where('tbl_experts_id_expert', $id_user);
		$this->db->where('id_article', $id_article);

		$query = $this->db->get();
		return $query->result();
	}

	//Add advice 
	public function add_article($data){
		$this->db->insert('tbl_articles', $data);
		return;
	}

	//Upadte advice
	public function update_article($data, $id_user, $id_article){
		$this->db->where('tbl_experts_id_expert', $id_user);
		$this->db->where('id_article', $id_article);
		$this->db->update('tbl_articles', $data); 
	}
}

?>
