<?php
class Conseil_model extends CI_Model{

	function conseil_list(){
		$hasil=$this->db->get('conseil');
		return $hasil->result();
	}

	function save_conseil(){
		$data = array(
				'id' 						=> $this->input->post('id'),
				'titre' 				=> $this->input->post('titre'),
				'description' 	=> $this->input->post('description'),
				'contact' 			=> $this->input->post('contact'),
				'email' 				=> $this->input->post('email'),
				'status' 				=> $this->input->post('status'),
			);
		$result=$this->db->insert('conseil',$data);
		return $result;
	}
	function getConseil()
  {
    $this->db->select("*");
    $this->db->from("conseil");
    $result = $this->db->get()->result();
    return $result;
    }
		public function cherche($titre){
			$this->db->like('titre', $titre);
			$data = $this->db->get('conseil');
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
			return $this->db->update('conseil', $data);
		}
		public function getConseilById($id){
			$this->db->where('id', $id);
			$query = $this->db->get('conseil');
			if($query->num_rows() > 0) {
				return $query->row();
			}else {
				return false;
			}
		}
		public function update_conseil(){
			$id = $this->input->post('txt_hidden');
			$field = array(
				'description'		=>$this->input->post('description'),
				'titre'					=>$this->input->post('titre'),
				'contact'					=>$this->input->post('contact'),
				'email'					=>$this->input->post('email'),
				'status'					=>$this->input->post('sstatus')
			);
			$this->db->where('id', $id);
			$this->db->update('conseil', $field);
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}

		function delete_conseil($id){
			$this->db->where('id', $id);
			$this->db->delete('conseil');
			if ($this->db->affected_rows() > 0) {
				return true;
			}else {
				return false;
			}
		}
}
