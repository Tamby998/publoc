<?php
class Imprimerie_model extends CI_Model{

	function imprimerie_list(){
		$hasil=$this->db->get('imprimerie');
		return $hasil->result();
	}

	function save_imprimerie(){
		$data = array(
				'id' 						=> $this->input->post('id'),
				'titre' 				=> $this->input->post('titre'),
				'description' 	=> $this->input->post('description'),
				'contact' 			=> $this->input->post('contact'),
				'email' 				=> $this->input->post('email'),
			);
		$result=$this->db->insert('imprimerie',$data);
		return $result;
	}

	function getImprimerie()
  {
    $this->db->select("*");
    $this->db->from("imprimerie");
    $result = $this->db->get()->result();
    return $result;
    }
		public function cherche($titre){
			$this->db->like('titre', $titre);
			$data = $this->db->get('imprimerie');
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
			return $this->db->update('imprimerie', $data);
		}
		public function getImprimerieById($id){
			$this->db->where('id', $id);
			$query = $this->db->get('imprimerie');
			if($query->num_rows() > 0) {
				return $query->row();
			}else {
				return false;
			}
		}
		public function update_imprimerie(){
			$id = $this->input->post('txt_hidden');
			$field = array(
				'description'		=>$this->input->post('description'),
				'titre'					=>$this->input->post('titre'),
				'contact'					=>$this->input->post('contact'),
				'email'					=>$this->input->post('email'),
				'status'					=>$this->input->post('sstatus')
			);
			$this->db->where('id', $id);
			$this->db->update('imprimerie', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}

		function delete_imprimerie($id){
			$this->db->where('id', $id);
			$this->db->delete('imprimerie');
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
}
