<?php
class Concepteur_model extends CI_Model{

	public function concepteur_list(){
		$hasil=$this->db->get('concepteur');
		return $hasil->result();
	}

	public function save_concepteur(){
		$data = array(
				'id' 						=> $this->input->post('id'),
				'titre' 				=> $this->input->post('titre'),
				'description' 	=> $this->input->post('description'),
				'contact' 			=> $this->input->post('contact'),
				'email' 				=> $this->input->post('email'),
			);
		$result=$this->db->insert('concepteur',$data);
		return $result;
	}


	public function getConcepteur()
  {
    $this->db->select("*");
    $this->db->from("concepteur");
    $result = $this->db->get()->result();
    return $result;
    }
		public function cherche($titre){
			$this->db->like('titre', $titre);
			$data = $this->db->get('concepteur');
			return $data->result();
		}
		public function update_status(){
			$id = $_REQUEST['$id'];
			$status = $_REQUEST['$status'];
			if ($status == 1) {
				$status = 0;
			}else {
				$status = 1;
			}
			$data = array('status' => $status);
			$this->db->where('id', $id);
			return $this->db->update('concepteur', $data);
		}
		public function getConcepteurById($id){
			$this->db->where('id', $id);
			$query = $this->db->get('concepteur');
			if($query->num_rows() > 0) {
				return $query->row();
			}else {
				return false;
			}
		}
		public function update_concepteur(){
			$id = $this->input->post('txt_hidden');
			$field = array(
				'description'		=>$this->input->post('description'),
				'titre'					=>$this->input->post('titre'),
				'contact'					=>$this->input->post('contact'),
				'email'					=>$this->input->post('email'),
				'status'					=>$this->input->post('sstatus')
			);
			$this->db->where('id', $id);
			$this->db->update('concepteur', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}

		function delete_concepteur($id){
			$this->db->where('id', $id);
			$this->db->delete('concepteur');
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
}
