<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class main_model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}

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
		$this->db->limit(4);

		$query = $this->db->get();
		return $query->result();
	}

	//Getting all the advices of the expert
	public function get_all_advices($id){
		$this->db->select('*');
		$this->db->from('tbl_advices');
		$this->db->where('tbl_experts_id_expert', $id);

		$query = $this->db->get();
		return $query->result();
	}

	//Getting last 3 articles
	public function get_articles($id){
		$this->db->select('*');
		$this->db->from('tbl_articles');
		$this->db->where('tbl_experts_id_expert', $id);
		$this->db->limit(3);	

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
}

?>
